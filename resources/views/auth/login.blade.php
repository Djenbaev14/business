<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
    
<!-- Mirrored from zoyothemes.com/tapeli/html/auth-login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 16:04:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>Log In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">
        <!-- Begin page -->
        <div class="account-page">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0 justify-content-center">
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-md-7 mx-auto">
                                <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                    <div class="mb-4 p-0">
                                        <a class='auth-logo' href='index.html'>
                                            <img src="assets/images/logo-dark.png" alt="logo-dark" class="mx-auto" height="28" />
                                        </a>
                                    </div>
    
                                    <div class="pt-0">
                                        <form action="{{route('login')}}" class="my-4" method="POST">
																					@csrf
                                            <div class="form-group mb-3">
                                                <label for="login" class="form-label">Телефон номер</label>
                                                <input class="form-control" type="text" id="phone" required="" name="phone" placeholder="Введите свой номер телефона">
                                            </div>
                
                                            <div class="form-group mb-3">
                                                <label for="password" class="form-label">Пароль</label>
                                                <input class="form-control" type="password" required="" id="password" name="password" placeholder="Введите свой пароль">
                                            </div>
                                            
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary" type="submit"> Авторизоваться </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
    
    
                                        <div class="text-center text-muted mb-4">
                                            <p class="mb-0">У вас нет учетной записи ?<a class='text-primary ms-2 fw-medium' href="{{asset('register')}}">Зарегистрировать</a></p>
                                        </div>
    

=======
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Eatio - Restaurant Food Order Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="{{route('login')}}" class="my-4" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Телефон номер</strong></label>
                                            <input class="form-control" type="text" id="phone" required="" name="phone" placeholder="Введите свой номер телефона">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Пароль</strong></label>
                                            <input class="form-control" type="password" required="" id="password" name="password" placeholder="Введите свой пароль">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Авторизоваться</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>У вас нет учетной записи ? <a class="text-primary" href="{{route('register')}}">Зарегистрировать</a></p>
>>>>>>> ad7da9f53347bfd5ee561a3a260da9b63cc10dc5
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
    
                </div>
            </div>
        </div>
        
        <!-- END wrapper -->

        <!-- Vendor -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{asset('assets/libs/jquery.counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('assets/js/app.js')}}"></script>
        
    </body>

<!-- Mirrored from zoyothemes.com/tapeli/html/auth-login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 16:04:08 GMT -->
=======
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('vendor/global/global.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
    <script src="{{asset('js/deznav-init.js')}}"></script>

</body>

>>>>>>> ad7da9f53347bfd5ee561a3a260da9b63cc10dc5
</html>