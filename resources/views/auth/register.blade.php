<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from zoyothemes.com/tapeli/html/auth-register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 16:04:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="utf-8" />
        <title>Register | Tapeli - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-white">

        <!-- Begin page -->
        <div class="account-page">
            <div class="container-fluid p-0">        
                <div class="row align-items-center g-0">
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
                                        <form action="{{route('register.post')}}" method="POST" class="my-4">
                                          @csrf
                                          <div class="form-group mb-3">
                                              <label for="company_name" class="form-label">Kompaniya nomi</label>
                                              <input class="form-control" name="company_name" type="text" id="company_name" required="" placeholder="Kompaniya nomi kiriting">
                                          </div>
                                            <div class="form-group mb-3">
                                                <label for="username" class="form-label">Ismingiz</label>
                                                <input class="form-control" name="name" type="text" id="username" required="" placeholder="Ismingiz kiriting">
                                            </div>

                                            <div class="form-group mb-3">
                                                <label for="emailaddress" class="form-label">Telefon raqam</label>
                                                <div class="input-group">
                                                  <span class="input-group-text" id="basic-addon1">+998</span>
                                                  <input class="form-control" type="text" name="phone" maxlength="9" id="emailaddress" required="" placeholder="Telefon raqam kiriting">
                                                </div>
                                            </div>
                
                                            <div class="form-group mb-3">
                                              <label for="password" class="form-label">Parolni kiriting</label>
                                              <input class="form-control" name="password" type="password" required="" id="password" placeholder="Parolni kiriting">
                                          </div>
                                          <div class="form-group mb-3">
                                              <label for="password" class="form-label">Parolni yana kiriting</label>
                                              <input class="form-control" name="password_confirmation" type="password" required="" id="password" placeholder="Parolni yana kiriting">
                                          </div>
                
                                            <div class="form-group d-flex mb-3">
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                                        <label class="form-check-label" for="checkbox-signin">I agree to the <a href="#" class="text-primary fw-medium"> Terms and Conditions</a></label>
                                                    </div>
                                                </div><!--end col-->
                                            </div>
                                            
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary" type="submit"> Register</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                        <div class="saprator my-4"><span>or sign in with</span></div>

                                        <div class="text-center text-muted mb-4">
                                            <p class="mb-0">Already have an account ?<a class='text-primary ms-2 fw-medium' href='auth-login.html'>Login here</a></p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-7">
                        <div class="account-page-bg p-md-5 p-4">
                            <div class="text-center">
                                <h3 class="text-dark mb-3 pera-title">Quick, Effective, and Productive With Tapeli Admin Dashboard</h3>
                                <div class="auth-image">
                                    <img src="assets/images/authentication.svg" class="mx-auto img-fluid"  alt="images">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END wrapper -->

        @include('sweetalert::alert')
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

<!-- Mirrored from zoyothemes.com/tapeli/html/auth-register by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Oct 2024 16:04:08 GMT -->
</html>