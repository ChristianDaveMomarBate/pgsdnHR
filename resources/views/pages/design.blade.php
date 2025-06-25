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
                        <h5 class="card-title mb-3">Employee Records</h5>
                        <table id="datatable1" class="table table-striped table-bordered w-100">
                            <thead class="table-light">
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Department</th>
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





    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

        <script>
        $(document).ready(function() {
            $('#datatable1').DataTable({
                processing: true,
                serverSide: false, // Set to true if you're paginating server-side
                ajax: "{{ route('getEmployees') }}",
                columns: [{
                        data: 'empID'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `${row.lname}, ${row.fname} ${row.mname ?? ''}`;
                        }
                    },
                    {
                        data: 'officeID'
                    }
                ]
            });
        });
    </script>
</body>

</html>
