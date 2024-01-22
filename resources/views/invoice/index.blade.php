@extends('layouts.main')

@section('main-content')

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Bill</h1>
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<li class="breadcrumb-item text-muted">
											<a href="#" class="text-muted text-hover-primary">Home</a>
										</li>
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<li class="breadcrumb-item text-dark">Bills</li>
									</ul>
								</div>
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<div class="m-0">
									</div>
								</div>
							</div>
						</div>
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-xxl">
								<div class="card">
									<div class="card-header border-0 pt-6">
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
												<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Payer"/>
											</div>
										</div>
										<div class="card-toolbar">
											<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
												<div class="w-150px me-3">
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="PENDING">PENDING</option>
														<option value="DRAFT">DRAFT</option>
													</select>
												</div>
												<button type="button" class="btn btn-success" data-bs-toggle="modal" onClick="location.href='/CreateInvoice'">Prepare Invoice</button>
											</div>
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
												<div class="fw-bolder me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
												<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
											<thead>
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2" disable>
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" disabled/>
														</div>
													</th>
													<th class="min-w-70px">N° Avis</th>
													<th class="min-w-100px">Date</th>
													<th class="min-w-70px">N° OR</th>
													<th class="min-w-70px">NIC</th>
													<th class="min-w-100px">Nom</th>
													<th class="min-w-100px">Tel</th>
													<th class="min-w-70px">Zone</th>
													<th class="min-w-100px">Address</th>
													<th class="min-w-100px">GPS</th>
													<th class="min-w-100px">Somme</th>
													<th class="min-w-70px">Status</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
											</thead>
											<tbody class="fw-bold text-gray-600">
											<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1"/>
														</div>
													</td>

													<td>001/23</td>
													<td>03/01/2024</td>
													<td>001/23</td>
													<td>00011</td>
													<td>Sté Mont Agou</td>
													<td>91…</td>
													<td>1</td>
													<td>lXXYYZZ</td>
													<td>XY</td>
													<td>60000</td>
													<td><div class="badge badge-light-primary">PENDING</div></td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														</a>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="/ModifyInvoice" class="menu-link px-3">View</a>
															</div><div class="menu-item px-3">
																<a href="/ModifyInvoice" class="menu-link px-3">Validate</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
															</div>
														</div>
													</td>
												</tr>													
												<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1"/>
														</div>
													</td>

													<td>001/23</td>
													<td>03/01/2024</td>
													<td>001/23</td>
													<td>00011</td>
													<td>Sté Mont Agou</td>
													<td>91…</td>
													<td>1</td>
													<td>lXXYYZZ</td>
													<td>XY</td>
													<td>60000</td>
													<td><div class="badge badge-light-primary">PENDING</div></td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														</a>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="/ModifyInvoice" class="menu-link px-3">View</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
															</div>
														</div>
													</td>
												</tr>													
												<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1"/>
														</div>
													</td>

													<td>001/23</td>
													<td>03/01/2024</td>
													<td>001/23</td>
													<td>00011</td>
													<td>Sté Mont Agou</td>
													<td>91…</td>
													<td>1</td>
													<td>lXXYYZZ</td>
													<td>XY</td>
													<td>60000</td>
													<td><div class="badge badge-light-primary">PENDING</div></td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														</a>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="/ModifyInvoice" class="menu-link px-3">View</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
															</div>
														</div>
													</td>
												</tr>													
												
											</tbody>
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
@endsection					