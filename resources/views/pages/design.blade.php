<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HRMIS PGSDN - Confidential Data</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <link rel="icon" href="images/SDN.PNG" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        /* Compact table styling */
        .custom-table th,
        .custom-table td {
            font-size: 0.85rem;
            padding: 0.5rem;
            vertical-align: middle;
            white-space: nowrap;
        }

        /* Dark header style */
        .custom-table thead th {
            background-color: #343a40;
            /* Bootstrap dark */
            color: #fff;
            border-bottom: 2px solid #495057;
        }

        /* Alternating row colors */
        .custom-table tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
            /* light grey */
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #e9f2fb;
            /* soft blue */
        }

        /* Hover effect */
        .custom-table tbody tr:hover {
            background-color: #d0ebff;
            /* highlight on hover */
        }

        .custom-table th:nth-child(5),
        .custom-table td:nth-child(5) {
            max-width: 350px;
            white-space: normal;
            word-wrap: break-word;
        }

        .custom-table {
            font-size: 0.75rem;
        }

        .custom-table th,
        .custom-table td {
            padding: 0.25rem 0.4rem;
            white-space: nowrap;
        }

        .container-fluid {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Fixed Header -->
    <header class="fixed-top bg-white shadow-sm d-flex justify-content-between align-items-center px-3"
        style="height: 60px; z-index: 1030;">
        <div>
            <h5 class="mb-0">HRMIS PGSDN - Confidential Data</h5>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn text-danger"
                style="width: 100px; height: 40px; font-size: 15px; padding: 0; border-radius: 4px;">
                Sign Out
            </button>
        </form>
    </header>
    <!-- Main content -->
    <div class="container-fluid py-5 mt-4">
        <div class="row gx-3">
            <div class="col-12 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <h5 class="mb-0">Employee Records</h5>
                            <button class="btn btn-dark btn-sm" id="addEmployeeBtn">
                                <i class="bx bx-plus"></i> Print PDF LIST
                            </button>
                        </div>
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table id="datatable1"
                                    class="table table-sm table-striped table-bordered align-middle mb-0 custom-table">
                                    <thead class="table-dark text-white text-center align-middle">
                                        <tr class="text-nowrap">
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>Status</th>
                                            <th>Current Address</th>
                                            <th>Mobile</th>
                                            <th>Position ID</th>
                                            <th>Plantilla No</th>
                                            <th>Employment Status ID</th>
                                            <th>Date Employed</th>
                                            <th>Last Appointment</th>
                                            <th>Office ID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be populated via AJAX -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable1').DataTable({
                processing: true,
                serverSide: false,
                pageLength: 50,
                ajax: "{{ route('getEmployees') }}",
                columns: [{
                        data: 'empID'
                    },
                    {
                        data: 'lname',
                        render: function(data, type, row) {
                            return `${row.lname}, ${row.fname} ${row.mname ?? ''}`;
                        }
                    },
                    {
                        data: 'gender'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'currentAdd'
                    },
                    {
                        data: 'mobile'
                    },
                    {
                        data: 'positionID'
                    },
                    {
                        data: 'plantillaNo'
                    },
                    {
                        data: 'empStatusID'
                    },
                    {
                        data: 'dateEmployed'

                    },
                    {
                        data: 'last_appointment'

                    },

                    {
                        data: 'officeID'
                    }
                ]
            });
        });
    </script>

    <script>
        document.getElementById('addEmployeeBtn').addEventListener('click', function() {
            window.open("{{ route('employees.printPdf') }}", '_blank');
        });
    </script>
</body>

</html>
