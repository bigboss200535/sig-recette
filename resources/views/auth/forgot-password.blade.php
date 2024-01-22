<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title>{{ config('app.name') }} | Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="{{ asset('media/logo.png') }}"/>
    </head>
    <body id="kt_body" class="bg-body">     
        <div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				
            <x-auth-session-status class="mb-4" :status="session('status')" />
            
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<form class="form w-100" novalidate="novalidate" id="form_submit" method="POST" action="{{ route('password.email') }}">
                                @csrf
								<div class="text-center mb-10">
									<h1 class="text-success mb-3">{{ __('password_reset') }}</h1>
								</div>
                                <div class="fv-row mb-10">
                                    <div class="d-flex flex-stack mb-2">
                                        <label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('email') }}</label>
										<a href="{{ route('login') }}" class="link-success fs-6 fw-bolder">{{ __('remeber_login') }}</a>
                                    </div>
                                    <input class="form-control form-control-lg form-control-solid" type="email" name="email" value="admin@admin.com" autocomplete="off" placeholder="{{ __('Email') }}" />
                                    
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
								<div class="fv-row mb-10">
								</div>
								<div class="text-center">
                                    <button class="btn btn-lg btn-success w-100 mb-5">
                                        <span class="indicator-label">{{ __('submit') }}</span>
                                        <span class="indicator-progress">{{ __('wait') }}
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
								</div>
							</form>
						</div>
					</div>
					<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
						<div class="d-flex flex-center fw-bold fs-6">
							<a class="text-muted text-hover-primary px-2">&copy;<?php echo '2023';?></span> {{ config('app.name') }}.</a>
						</div>
					</div>
				</div>

                <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color:#006A4A">
                    <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                        <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                            <a href="#" class="py-9 mb-5">
                                <img alt="Logo" src="{{ asset('media/logo.png') }}" class="h-100px"/>
                            </a>
                            <h1 class="fw-bolder fs-2qx" style="color: #ffffff;"><?php echo 'Sig-Recettes';?> </h1>
                            <span class="text-gray-400"><i style="">{{ __('slogan') }}</i></span>
                              <img alt="Logo" src="{{ asset('media/icons/reset_pass.svg') }}" style="padding-bottom:20px; padding-left: 10px;" align="center" height="300px"/>
                        </div>
                        <div class="">
                            
                        </div>
                    </div>
                </div>
			</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js'"></script>
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('general_authenticate.js') }}"></script>
       <script type="text/javascript">
        "use strict";

    var KTSigninGeneral = function () {
    var t, e, i;
    
    return {
        init: function () {
            t = document.querySelector("#form_submit"),
            e = document.querySelector("#login_submit"),
            i = FormValidation.formValidation(t, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email address is required"
                            },
                            emailAddress: {
                                message: "The value is not a valid email address"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row"
                    })
                }
            });
            

            e.addEventListener("click", (function (event) {
                //event.preventDefault();
                i.validate().then((function (validationResult) {
                    if ("Valid" == validationResult) {
                        e.setAttribute("data-kt-indicator", "on");
                        e.disabled = true;
/
                    }
                }));
            }));
        }
    }
}();
        KTUtil.onDOMContentLoaded((function () {
            KTSigninGeneral.init();
        }));

    </script>
 </body>
</html>