
@extends('layouts.main')

@section('main-content')

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								<div class="card mb-5 mb-xl-10">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="{{ asset('media/avatars/blank.png') }}" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ $user->name }}</a>
															<a href="#">
																<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																		<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Active</a>
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																	<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																</svg>
															</span>
															Super Admin</a>
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
																	<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
																</svg>
															</span>
															{{ $user->email }}</a>
														</div>
													</div>
													<div class="d-flex my-4">
														<div class="me-0">
															<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="bi bi-three-dots fs-3"></i>
															</button>
															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Actions</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/CreateInvoice" class="menu-link px-3">Create Invoice</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/Payments" class="menu-link flex-stack px-3">Create Payment
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="CreateInvoice" class="menu-link px-3">Generate Bill</a>
																</div>
																<!-- <div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div> -->
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="CFA"> 0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Earnings</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Transactions</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Success Rate</div>
																<!--end::Label-->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Navbar-->
								<!--begin::details View-->

                                

                                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                    @csrf
                                </form>

                                <form class="form w-100" novalidate="novalidate" id="form_submit" action="{{ route('profile.update') }}" method="POST">
                                    @csrf 
                                    @method('patch')
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">{{ __('Profile Information') }}</span>
                                            <span class="text-gray-400 pt-2 fw-bold fs-6">{{ __("Update your account's profile information and email address.") }}</span>
                                        </h3>
										
										<!-- <a href="#" class="btn btn-success align-self-center">Edit Profile</a> -->
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Full Name</label>
                                            <div class="fv-row mb-10">
                                                <input maxlength="30" class="form-control form-control-lg form-control-solid" type="text" name="name" value="{{ old('name', $user->name) }}"  required autofocus autocomplete="name" placeholder="{{ __('name') }}" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
										</div>
										<div class="row">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Contact Phone
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="fv-row mb-10">
                                                <input maxlength="30" class="form-control form-control-lg form-control-solid" type="phone" name="phone" value="{{ old('name', $user->Telephone) }}" autocomplete="off" disabled placeholder="{{ __('Telephone') }}" />
                                                <!-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->
                                            </div>
											<!--end::Col-->
										</div>
										<div class="row">
											<label class="col-lg-4 fw-bold text-muted">Email</label>
											<div class="fv-row mb-10">
                                                <input maxlength="30" class="form-control form-control-lg form-control-solid" type="email" name="email" value="{{ old('email', $user->email) }}" autocomplete="off" placeholder="{{ __('Email') }}" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
										</div>

                                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                                    <div>
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
										<div class="row">
											<label class="col-lg-4 fw-bold text-muted">Municipal</label>
											<div class="fv-row mb-10">
                                                <input maxlength="30" class="form-control form-control-lg form-control-solid" type="text" name="municipal" value="{{ old('municipal') }}" autocomplete="off" disabled placeholder="{{ __('municipal') }}" />
                                                <!-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->
                                            </div>
										</div>
										<div class="row">
											<label class="col-lg-4 fw-bold text-muted">Zone</label>
											<div class="fv-row mb-10">
                                                <input maxlength="30" class="form-control form-control-lg form-control-solid" type="text" name="zone" value="{{ old('zone') }}" autocomplete="off" disabled placeholder="{{ __('zone') }}" />
                                                <!-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->
                                            </div>
										</div>
										<!-- <div class="row mb-10">
											<label class="col-lg-4 fw-bold text-muted">Emanil</label>
											<div class="col-lg-8">
												<span class="fw-bold fs-6 text-gray-800">Yes</span>
											</div>
										</div> -->

                                        <div  type="submit" id="login_submit" class="text-center col-md-2">
                                            <button class="btn btn-lg btn-success w-100 mb-5">
                                                <span class="indicator-label">{{ __('Submit') }}</span>
                                                <span class="indicator-progress">{{ __('wait') }}
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            @if (session('status') === 'profile-updated')
                                                <p
                                                    x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600"
                                                >{{ __('Saved.') }}</p>
                                            @endif
                                        </div>
									</div>
								</div>
                                </form>

                                <form class="form w-100" novalidate="novalidate" id="form_submit" action="{{ route('password.update') }}" method="POST">
                                    @csrf 
                                    @method('put')
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">{{ __('Update Password') }}</span>
                                            <span class="text-gray-400 pt-2 fw-bold fs-6">{{ __('Ensure your account is using a long, random password to stay secure.') }}</span>
                                        </h3>
										
										<!-- <a href="#" class="btn btn-success align-self-center">Edit Profile</a> -->
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<!--begin::Row-->
										<div class="row">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">{{ __('Current Password') }}</label>
                                            <div class="fv-row mb-10">
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="current_password" value="__('Current Password')" autocomplete="off" placeholder="{{ __('Current Password') }}" />
                                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                            </div>
										</div>
										<div class="row">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">{{ __('New Password') }}</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="fv-row mb-10">
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="password" value="{{ __('New Password') }}" autocomplete="off" placeholder="{{ __('New Password') }}" />
                                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                            </div>
											<!--end::Col-->
										</div>
										<div class="row">
											<label class="col-lg-4 fw-bold text-muted">{{ __('Confirm Password') }}</label>
											<div class="fv-row mb-10">
                                                <input class="form-control form-control-lg form-control-solid" type="password" name="password_confirmation" value="{{ __('Confirm Password') }}" autocomplete="off" placeholder="{{ __('Confirm Password')" />
                                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                            </div>
										</div>

                                        <div  type="submit" id="login_submit" class="text-center col-md-2">
                                            <button class="btn btn-lg btn-success w-100 mb-5">
                                                <span class="indicator-label">{{ __('Update') }}</span>
                                                <span class="indicator-progress">{{ __('wait') }}
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                            @if (session('status') === 'password-updated')
                                                <p
                                                    x-data="{ show: true }"
                                                    x-show="show"
                                                    x-transition
                                                    x-init="setTimeout(() => show = false, 2000)"
                                                    class="text-sm text-gray-600"
                                                >{{ __('Saved.') }}</p>
                                            @endif
                                        </div>
									</div>
								</div>
                                </form>
                                
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">
                                            		{{ __('Are you sure you want to delete your account?') }}
                                        	</span>
                                            <span class="text-gray-400 pt-2 fw-bold fs-6">{{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}</span>
                                        </h3>
										<br>

									</div>

								</div>
										<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account">{{ __('delete_account') }}</button>
							</div>
							
						</div>
						<!--end::Post-->
                   </div>

        <div class="modal fade" id="kt_modal_create_account" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog mw-1000px">
				<div class="modal-content">
					<div class="modal-header">
						<h2>{{ __('Delete Account') }}</h2>
						<div class="btn btn-sm btn-icon btn-active-color-success" data-bs-dismiss="modal">
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
						</div>
					</div>
					<div class="modal-body scroll-y m-5">
						<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
							

                                        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                            @csrf
                                            @method('delete')

                                            <h2 class="text-lg font-medium text-gray-900">
                                                {{ __('Are you sure you want to delete your account?') }}
                                            </h2>

                                            <p class="mt-1 text-sm text-gray-600">
                                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                            </p>

                                            <div class="row mb-12">
                                                <div class="col-md-6 fv-row">
                                                    <label class="required fs-6 fw-bold form-label mb-2">{{ __('Password') }}</label>
                                                    <div class="row fv-row">
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="{{ __('Password') }}" name="password" id="password" />
                                                            <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mb-6">
                                                <div class="col-md-3 fv-row">
                                                    <button class="btn btn-lg btn-light-primary w-100 mb-5" type="reset" onclick="$dispatch('close')">
                                                        <span class="indicator-label">{{ __('Cancel') }}</span>
                                                    </button>
                                                </div>
                                                <div class="col-md-3 fv-row">
                                                <button class="btn btn-lg btn-danger w-100 mb-5">
                                                        <span class="indicator-label">{{ __('Delete Account') }}</span>
                                                        <span class="indicator-progress">{{ __('wait') }}
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>

							
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection