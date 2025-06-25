<!DOCTYPE HTML>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HRMIS PGSDN - Confidential Data</title>
    <link href="images/SDN.png" rel="shortcut icon" type="image/x-icon">
    <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
    <link href="css/ui.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <script src="js/script.js" type="text/javascript"></script>
</head>

<body>
    <a href="/" class="btn btn-dark rounded-pill"
        style="font-size:13px; z-index:100; position: fixed; bottom:10px; right:10px;">Home</a>
    <section class="section-conten padding-y" style="min-height:84vh">
        <div class="card mx-auto" style="max-width: 380px; margin-top:100px;">
            <div class="card-body">
                <!-- Centered Logo -->
                <div class="text-center mb-4">
                    <img class="img-fluid" src="images/SDN.png" alt="Logo" style="max-height: 100px;">
                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Field -->
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Enter your email" required
                            autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" placeholder="Enter your password">
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block w-100">Login</button>
                    </div>
                </form>
            </div>

        </div> <!-- card .// -->

        <br><br>
    </section>
</body>

</html>
