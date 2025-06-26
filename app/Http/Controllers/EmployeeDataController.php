<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;
use App\Models\employeeData;
use Barryvdh\DomPDF\Facade\Pdf;


class EmployeeDataController extends Controller
{
        public function getEmployees()
    {
        // Get designations from hrmps
        $positions = DB::connection('hrmps')
            ->table('positions')
            ->select('positionID', 'designation')
            ->get()
            ->keyBy('positionID');

        // Get offices from hrmps
        $offices = DB::connection('hrmps')
            ->table('offices')
            ->select('officeID', 'officeName','office')
            ->get()
            ->keyBy('officeID');

        // Get employment status types from hrmps
        $employmentStatuses = DB::connection('hrmps')
            ->table('employment_status')
            ->select('empStatusID', 'type')
            ->get()
            ->keyBy('empStatusID');

        // Get employees
            $employees = employeeData::select(
            'empID', 'lname', 'fname', 'mname', 'gender', 'status',
            'currentAdd', 'permanentAdd', 'mobile', 'positionID',
            'plantillaNo', 'empStatusID', 'dateEmployed',
            'last_appointment', 'officeID'
        )
        ->get();

        // Transform data
        $employees->transform(function ($employee) use ($positions, $offices, $employmentStatuses) {
            $employee->status = $employee->status == 1 ? 'Active' : 'Inactive';

            // Replace positionID with designation name
            $employee->positionID = $positions[$employee->positionID]->designation ?? 'N/A';

            // Replace empStatusID with type from employment_status table
            $employee->empStatusID = $employmentStatuses[$employee->empStatusID]->type ?? 'Unknown';

            // Format officeID as (office) officeName
            $employee->officeID = isset($offices[$employee->officeID])
                ? "({$offices[$employee->officeID]->office}) {$offices[$employee->officeID]->officeName}"
                : 'N/A';

            return $employee;
        });
        return response()->json(['data' => $employees]);
    }

public function printPdf()
{
    // Load lookup tables from external DB connection
    $positions = DB::connection('hrmps')
        ->table('positions')
        ->select('positionID', 'designation')
        ->get()
        ->keyBy('positionID');

$offices = DB::connection('hrmps')
    ->table('offices')
    ->select('officeID', 'officeName', 'office')
    ->get()
    ->keyBy('officeID');

$employmentStatuses = DB::connection('hrmps')
    ->table('employment_status')
    ->select('empStatusID', 'type')
    ->get()
    ->keyBy('empStatusID');

// Date boundaries
$startDateEmployed = '2010-01-01';
$endDateEmployed = '2022-06-30';

$allEmployees = DB::connection('hrmps')
    ->table('employees')
    ->select(
        'empID', 'lname', 'fname', 'mname', 'gender', 'status',
        'currentAdd', 'permanentAdd', 'mobile', 'positionID',
        'plantillaNo', 'empStatusID', 'dateEmployed',
        'last_appointment', 'officeID'
    )
    ->whereBetween('dateEmployed', [$startDateEmployed, $endDateEmployed])
    ->where('empStatusID', 3) // Filter by employment status ID 3
    ->orderByDesc('last_appointment')
    ->limit(50)
    ->get();



    $allEmployees->transform(function ($e) use ($positions, $offices, $employmentStatuses) {
        $e->status = ($e->status == 1) ? 'Active' : 'Inactive';
        $e->positionID = $positions[$e->positionID]->designation ?? 'N/A';
        $e->empStatusID = $employmentStatuses[$e->empStatusID]->type ?? 'Unknown';
        $e->officeID = isset($offices[$e->officeID])
            ? "({$offices[$e->officeID]->office}) {$offices[$e->officeID]->officeName}"
            : 'N/A';
        return $e;
    });

    // Build styled HTML content
    $html = '
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 11px;
            color: #333;
        }
        h2 {
            text-align: center;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
            padding: 6px;
            border: 1px solid #ddd;
            text-align: left;
        }
        td {
            padding: 5px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>

    <div class="header">
        <strong>Provincial Human Resource Management and Development Office</strong><br>
        <em>Employee Report (2000–2022)</em>
    </div>

    <h2>Employee List</h2>

    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Status</th>
                <th>Current Address</th>
                <th>Mobile</th>
                <th>Position</th>
                <th>Plantilla No</th>
                <th>Employment Status</th>
                <th>Date Employed</th>
                <th>Last Appointment</th>
                <th>Office</th>
            </tr>
        </thead>
        <tbody>';

    foreach ($allEmployees as $e) {
        $html .= '<tr>
            <td>' . e($e->empID) . '</td>
            <td>' . e("{$e->lname}, {$e->fname} {$e->mname}") . '</td>
            <td>' . e($e->gender) . '</td>
            <td>' . e($e->status) . '</td>
            <td>' . e($e->currentAdd) . '</td>
            <td>' . e($e->mobile) . '</td>
            <td>' . e($e->positionID) . '</td>
            <td>' . e($e->plantillaNo) . '</td>
            <td>' . e($e->empStatusID) . '</td>
            <td>' . ($e->dateEmployed ? Carbon::parse($e->dateEmployed)->format('F j, Y') : 'N/A') . '</td>
            <td>' . ($e->last_appointment ? Carbon::parse($e->last_appointment)->format('F j, Y') : 'N/A') . '</td>
            <td>' . e($e->officeID) . '</td>
        </tr>';
    }

    $html .= '</tbody></table>';

    // Generate and return PDF
    $pdf = Pdf::loadHTML($html)->setPaper('A4', 'landscape');
    return $pdf->download('employee_list.pdf');
}




}
