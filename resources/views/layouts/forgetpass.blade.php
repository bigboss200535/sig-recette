 <!DOCTYPE html>
<html lang="en" translate="no">
    <head>
        <title>{{ config('app.name') }} | Forget Password</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="{{ asset('media/logo.png') }}"/>
    </head>
    <body id="kt_body" class="bg-body">     
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-column flex-lg-row flex-column-fluid">
                <div class="d-flex flex-column flex-lg-row-fluid py-10">
                    <div class="d-flex flex-center flex-column flex-column-fluid">
                        <div class="w-lg-500px p-10 p-lg-15 mx-auto">
                            <form class="form w-100" novalidate="novalidate" id="form_submit" action="#">
                                <div class="text-center mb-10">
                                    <h1 class="text-success mb-3">Password Reset</h1>
                                </div>
                                <div class="fv-row mb-10">
                                    <div class="d-flex flex-stack mb-2">
                                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Telephone></label>
                                        <a href="/" class="link-success fs-6 fw-bolder">Remeber? Login</a>
                                    </div>
                                    <input class="form-control form-control-lg form-control-solid" type="text" name="telephone" autocomplete="off" placeholder="Telephone"/>
                                </div>
                                <div class="fv-row mb-10">
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="login_submit" class="btn btn-lg btn-success w-100 mb-5">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait..
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                        <div class="d-flex flex-center fw-bold fs-6">
                            <a class="text-muted text-hover-primary px-2">&copy;<?php echo '2023';?></span> <?php echo 'Sig-Recettes'?>.</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color:#006A4A">
                    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                            <a href="#" class="py-9 mb-5">
                                <!-- <img alt="Logo" src="assets/media/logo.png" class="h-60px" /> -->
                                    <!-- <img alt="Logo" src="assets/media/icons/login.svg" height="200px" width="200px" /> -->
                            </a>
                            <h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #ffffff;"><?php echo 'sig'?></h1>
                            <img alt="forgetpass" src="{{ asset('media/icons/reset_pass.svg') }}" style="padding-bottom:20px; padding-left: 10px;" align="center" height="300px" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js'"></script>
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('general_authenticate.js') }}"></script>
    </body>
</html>



