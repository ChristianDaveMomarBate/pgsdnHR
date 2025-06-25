<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employeeData;

class EmployeeDataController extends Controller
{
    public function getEmployees()
    {
        $employees = employeeData::select('empID', 'lname', 'fname', 'mname', 'officeID')->get();

        return response()->json(['data' => $employees]);
    }
}
