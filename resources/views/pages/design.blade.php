<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HRMIS PGSDN - Confidential Data</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- DataTables Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" />

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
    <!-- Main content -->
    <div class="container-fluid py-5" style="MARGIN-top: 30px;">
        <div class="row gx-3">
            <!-- DataTable 1 -->
            <div class="col-12  mb-4">
                <table id="datatable1" class="table table-striped table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>John Doe</td>
                            <td>HR</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Jane Smith</td>
                            <td>Finance</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Mike Johnson</td>
                            <td>IT</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery and DataTables -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#datatable1').DataTable();
            $('#datatable2').DataTable();
        });
    </script>
</body>

</html>
