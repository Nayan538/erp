<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Foster Dynamics || Login </title>
    <link rel="icon" type="image/x-icon" href="src/assets/img/favicon.png"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- ENABLE LOADERS -->
    <link href="src/vertical-light-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="src/vertical-light-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="src/vertical-light-menu/loader.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="src/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="src/vertical-light-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
<!--    <link href="src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />-->

    <link href="src/vertical-light-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    @section('title'){{'Log IN'}} @endsection

</head>
<body class="form">

<div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

        <div class="row">

            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <form action="{{ route('dashboard') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <img src="src/assets/img/cork-logo.png" width="150px" alt="">
                                </div>

                                <div class="col-md-12 mb-2 text-center">

                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>

                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox" id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button type="submit" href="{{ route('dashboard') }}" class="btn btn-secondary w-100">SIGN IN</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="src/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>