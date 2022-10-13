<?php
if(isset($_GET['page'])) {
	$pg = $_GET['page'];
} else {
	$pg = 'dashboard';
}
$class = "nav-link btn btn-flex btn-color-primary btn-outline btn-outline-default btn-active-primary d-flex flex-grow-1 flex-column flex-center py-5 h-1250px h-lg-175px"
?>

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<?php include 'components/head.php';?>

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
		<?php include 'components/aside.php';?>
		<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php include 'components/navbar.php';?>
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
					<!--begin::Post-->
					<div class="content flex-row-fluid" id="kt_content">
						<!--begin::Row-->
						<div class="row gy-0 gx-10">
							<!--begin::Col-->
							<div class="col-xl-8">
								<!--begin::General Widget 1-->
								<div class="mb-10">
									<!--begin::Tabs-->
									<ul class="nav row mb-10">
										<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
											<a class="<?php if($pg === 'dashboard') {echo "$class active";} else {echo $class;} ?>"
												data-bs-toggle="tab" href="#kt_general_widget_1_1">
												<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
												<span pan class="svg-icon svg-icon-3x mb-5 mx-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
															fill="currentColor" />
														<path
															d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-6 fw-bold">Dashboard</span>
											</a>
										</li>
										<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
											<a class="<?php if($pg === 'marketing') {echo "$class active";} else {echo $class;} ?>"
												data-bs-toggle="tab" href="#kt_general_widget_1_2">
												<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
												<span class="svg-icon svg-icon-3x mb-5 mx-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path
															d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
															fill="currentColor" />
														<path opacity="0.3"
															d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
															fill="currentColor" />
														<path opacity="0.3"
															d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
															fill="currentColor" />
														<path opacity="0.3"
															d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-6 fw-bold">Marketing</span>
											</a>
										</li>
										<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
											<a class="<?php if($pg === 'sales') {echo "$class active";} else {echo $class;} ?>"
												data-bs-toggle="tab" href="#kt_general_widget_1_3">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
												<span class="svg-icon svg-icon-3x mb-5 mx-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
															fill="currentColor" />
														<path
															d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-6 fw-bold">Sales</span>
											</a>
										</li>
										<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
											<a class="<?php if($pg === 'customer-management') {echo "$class active";} else {echo $class;} ?>"
												data-bs-toggle="tab" href="#kt_general_widget_1_4">
												<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
												<span class="svg-icon svg-icon-3x mb-5 mx-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect x="8" y="9" width="3" height="10" rx="1.5"
															fill="currentColor" />
														<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
															fill="currentColor" />
														<rect x="18" y="11" width="3" height="8" rx="1.5"
															fill="currentColor" />
														<rect x="3" y="13" width="3" height="6" rx="1.5"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-6 fw-bold">Customer
													<br />Management<span>
											</a>
										</li>
										<li class="nav-item col-12 col-lg mb-5 mb-lg-0">
											<a class="<?php if($pg === 'admin') {echo "$class active";} else {echo $class;} ?>"
												data-bs-toggle="tab" href="#kt_general_widget_1_5">
												<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
												<span class="svg-icon svg-icon-3x mb-5 mx-0">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
															fill="currentColor" />
														<path
															d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<span class="fs-6 fw-bold">Admin</span>
											</a>
										</li>
									</ul>
									<!--begin::Tab content-->
									<div class="tab-content">
										<div class="<?php if($pg === "dashboard") {echo "tab-pane fade show active";} else {echo "tab-pane fade";}?>" id="kt_general_widget_1_1">
											<!--begin::Tables Widget 5-->
											<div class="card">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5 collapsible">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">My Tools</span>
														<span class="text-muted mt-1 fw-bold fs-7">View all of my
															tools</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_edit_tools">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_my_tools_card_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-140px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/plurk.svg"
																						class="h-50 align-self-center"
																						alt="" />
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Salesforce</a>
																			<span
																				class="text-muted fw-bold d-block">www.salesforce.com</span>
																		</td>
																		<td class="text-end text-muted fw-bold">CRM
																		</td>
																		<td class="text-end">
																			<span
																				class="badge badge-light-success">Connected</span>
																		</td>
																		<td class="text-end">
																			<a target="_blank" href="https://www.salesforce.com/">
																				<button type="button"
																					class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																					<span class="svg-icon svg-icon-2">
																						<svg xmlns="http://www.w3.org/2000/svg"
																							width="24" height="24"
																							viewBox="0 0 24 24" fill="none">
																							<rect opacity="0.5" x="18"
																								y="13" width="13" height="2"
																								rx="1"
																								transform="rotate(-180 18 13)"
																								fill="currentColor" />
																							<path
																								d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																								fill="currentColor" />
																						</svg>
																					</span>
																				</button>
																			</a>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 5-->

											<!--begin::Post-->
											<div class="content flex-row-fluid" id="kt_content">
												<!--begin::Card-->
												<div class="card">
													<!--begin::Card header-->
													<div class="card-header">
														<h2 class="card-title fw-bolder">Calendar</h2>
														<div class="card-toolbar">
															<button class="btn btn-flex btn-primary"
																data-kt-calendar="add">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
																<span class="svg-icon svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="11.364" y="20.364"
																			width="16" height="2" rx="1"
																			transform="rotate(-90 11.364 20.364)"
																			fill="currentColor" />
																		<rect x="4.36396" y="11.364" width="16"
																			height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->Add Event
															</button>
														</div>
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body">
														<!--begin::Calendar-->
														<div id="kt_calendar_app"></div>
														<!--end::Calendar-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
												<!--begin::Modals-->
												<!--begin::Modal - New Product-->
												<div class="modal fade" id="kt_modal_add_event" tabindex="-1"
													aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog modal-dialog-centered mw-650px">
														<!--begin::Modal content-->
														<div class="modal-content">
															<!--begin::Form-->
															<form class="form" action="#" id="kt_modal_add_event_form">
																<!--begin::Modal header-->
																<div class="modal-header">
																	<!--begin::Modal title-->
																	<h2 class="fw-bolder" data-kt-calendar="title">
																		Add Event</h2>
																	<!--end::Modal title-->
																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-icon-primary"
																		id="kt_modal_add_event_close">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																		<span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="24" height="24"
																				viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.5" x="6" y="17.3137"
																					width="16" height="2" rx="1"
																					transform="rotate(-45 6 17.3137)"
																					fill="currentColor" />
																				<rect x="7.41422" y="6" width="16"
																					height="2" rx="1"
																					transform="rotate(45 7.41422 6)"
																					fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Close-->
																</div>
																<!--end::Modal header-->
																<!--begin::Modal body-->
																<div class="modal-body py-10 px-lg-17">
																	<!--begin::Input group-->
																	<div class="fv-row mb-9">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold required mb-2">Event
																			Name</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text"
																			class="form-control form-control-solid"
																			placeholder="" name="calendar_event_name" />
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-9">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold mb-2">Event
																			Description</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text"
																			class="form-control form-control-solid"
																			placeholder=""
																			name="calendar_event_description" />
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-9">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold mb-2">Event
																			Location</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text"
																			class="form-control form-control-solid"
																			placeholder=""
																			name="calendar_event_location" />
																		<!--end::Input-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row mb-9">
																		<!--begin::Checkbox-->
																		<label
																			class="form-check form-check-custom form-check-solid">
																			<input class="form-check-input"
																				type="checkbox" value=""
																				id="kt_calendar_datepicker_allday" />
																			<span class="form-check-label fw-bold"
																				for="kt_calendar_datepicker_allday">All
																				Day</span>
																		</label>
																		<!--end::Checkbox-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="row row-cols-lg-2 g-10">
																		<div class="col">
																			<div class="fv-row mb-9">
																				<!--begin::Label-->
																				<label
																					class="fs-6 fw-bold mb-2 required">Event
																					Start Date</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input
																					class="form-control form-control-solid"
																					name="calendar_event_start_date"
																					placeholder="Pick a start date"
																					id="kt_calendar_datepicker_start_date" />
																				<!--end::Input-->
																			</div>
																		</div>
																		<div class="col" data-kt-calendar="datepicker">
																			<div class="fv-row mb-9">
																				<!--begin::Label-->
																				<label class="fs-6 fw-bold mb-2">Event
																					Start Time</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input
																					class="form-control form-control-solid"
																					name="calendar_event_start_time"
																					placeholder="Pick a start time"
																					id="kt_calendar_datepicker_start_time" />
																				<!--end::Input-->
																			</div>
																		</div>
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="row row-cols-lg-2 g-10">
																		<div class="col">
																			<div class="fv-row mb-9">
																				<!--begin::Label-->
																				<label
																					class="fs-6 fw-bold mb-2 required">Event
																					End Date</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input
																					class="form-control form-control-solid"
																					name="calendar_event_end_date"
																					placeholder="Pick a end date"
																					id="kt_calendar_datepicker_end_date" />
																				<!--end::Input-->
																			</div>
																		</div>
																		<div class="col" data-kt-calendar="datepicker">
																			<div class="fv-row mb-9">
																				<!--begin::Label-->
																				<label class="fs-6 fw-bold mb-2">Event
																					End Time</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<input
																					class="form-control form-control-solid"
																					name="calendar_event_end_time"
																					placeholder="Pick a end time"
																					id="kt_calendar_datepicker_end_time" />
																				<!--end::Input-->
																			</div>
																		</div>
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Modal body-->
																<!--begin::Modal footer-->
																<div class="modal-footer flex-center">
																	<!--begin::Button-->
																	<button type="reset" id="kt_modal_add_event_cancel"
																		class="btn btn-light me-3">Cancel</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="button" id="kt_modal_add_event_submit"
																		class="btn btn-primary">
																		<span class="indicator-label">Submit</span>
																		<span class="indicator-progress">Please
																			wait...
																			<span
																				class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
																<!--end::Modal footer-->
															</form>
															<!--end::Form-->
														</div>
													</div>
												</div>
												<!--end::Modal - New Product-->
												<!--begin::Modal - New Product-->
												<div class="modal fade" id="kt_modal_view_event" tabindex="-1"
													aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog modal-dialog-centered mw-650px">
														<!--begin::Modal content-->
														<div class="modal-content">
															<!--begin::Modal header-->
															<div class="modal-header border-0 justify-content-end">
																<!--begin::Edit-->
																<div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
																	data-bs-toggle="tooltip" data-bs-dismiss="click"
																	title="Edit Event" id="kt_modal_view_event_edit">
																	<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
																				fill="currentColor" />
																			<path
																				d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
																				fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Edit-->
																<!--begin::Edit-->
																<div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
																	data-bs-toggle="tooltip" data-bs-dismiss="click"
																	title="Delete Event"
																	id="kt_modal_view_event_delete">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path
																				d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
																				fill="currentColor" />
																			<path opacity="0.5"
																				d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
																				fill="currentColor" />
																			<path opacity="0.5"
																				d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
																				fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Edit-->
																<!--begin::Close-->
																<div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
																	data-bs-toggle="tooltip" title="Hide Event"
																	data-bs-dismiss="modal">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																	<span class="svg-icon svg-icon-1">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<rect opacity="0.5" x="6" y="17.3137"
																				width="16" height="2" rx="1"
																				transform="rotate(-45 6 17.3137)"
																				fill="currentColor" />
																			<rect x="7.41422" y="6" width="16"
																				height="2" rx="1"
																				transform="rotate(45 7.41422 6)"
																				fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Close-->
															</div>
															<!--end::Modal header-->
															<!--begin::Modal body-->
															<div class="modal-body pt-0 pb-20 px-lg-17">
																<!--begin::Row-->
																<div class="d-flex">
																	<!--begin::Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																	<span
																		class="svg-icon svg-icon-1 svg-icon-muted me-5">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
																				fill="currentColor" />
																			<path
																				d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
																				fill="currentColor" />
																			<path
																				d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
																				fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Icon-->
																	<div class="mb-9">
																		<!--begin::Event name-->
																		<div class="d-flex align-items-center mb-2">
																			<span class="fs-3 fw-bolder me-3"
																				data-kt-calendar="event_name"></span>
																			<span class="badge badge-light-success"
																				data-kt-calendar="all_day"></span>
																		</div>
																		<!--end::Event name-->
																		<!--begin::Event description-->
																		<div class="fs-6"
																			data-kt-calendar="event_description">
																		</div>
																		<!--end::Event description-->
																	</div>
																</div>
																<!--end::Row-->
																<!--begin::Row-->
																<div class="d-flex align-items-center mb-2">
																	<!--begin::Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
																	<span
																		class="svg-icon svg-icon-1 svg-icon-success me-5">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<circle fill="currentColor" cx="12" cy="12"
																				r="8" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Icon-->
																	<!--begin::Event start date/time-->
																	<div class="fs-6">
																		<span class="fw-bolder">Starts</span>
																		<span
																			data-kt-calendar="event_start_date"></span>
																	</div>
																	<!--end::Event start date/time-->
																</div>
																<!--end::Row-->
																<!--begin::Row-->
																<div class="d-flex align-items-center mb-9">
																	<!--begin::Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
																	<span
																		class="svg-icon svg-icon-1 svg-icon-danger me-5">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24px" height="24px"
																			viewBox="0 0 24 24" version="1.1">
																			<circle fill="currentColor" cx="12" cy="12"
																				r="8" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Icon-->
																	<!--begin::Event end date/time-->
																	<div class="fs-6">
																		<span class="fw-bolder">Ends</span>
																		<span data-kt-calendar="event_end_date"></span>
																	</div>
																	<!--end::Event end date/time-->
																</div>
																<!--end::Row-->
																<!--begin::Row-->
																<div class="d-flex align-items-center">
																	<!--begin::Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
																	<span
																		class="svg-icon svg-icon-1 svg-icon-muted me-5">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<path opacity="0.3"
																				d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
																				fill="currentColor" />
																			<path
																				d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
																				fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--end::Icon-->
																	<!--begin::Event location-->
																	<div class="fs-6" data-kt-calendar="event_location">
																	</div>
																	<!--end::Event location-->
																</div>
																<!--end::Row-->
															</div>
															<!--end::Modal body-->
														</div>
													</div>
												</div>
												<!--end::Modal - New Product-->
												<!--end::Modals-->
											</div>
											<!--end::Post-->

											<!--begin::Row-->
											<div class="row gy-0 gx-10">
												<!--begin::Col-->
												<div class="col-xl-6">
													<!--begin::List Widget 5-->
													<div class="card mb-10">
														<!--begin::Header-->
														<div class="card-header align-items-center border-0 mt-4">
															<h3 class="card-title align-items-start flex-column">
																<span class="fw-bolder mb-2 text-dark">Activities</span>
																<span class="text-muted fw-bold fs-7">890,344
																	Sales</span>
															</h3>
															<div class="card-toolbar">
																<!--begin::Menu-->
																<button type="button"
																	class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
																	data-kt-menu-trigger="click"
																	data-kt-menu-placement="bottom-end">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24px" height="24px"
																			viewBox="0 0 24 24">
																			<g stroke="none" stroke-width="1"
																				fill="none" fill-rule="evenodd">
																				<rect x="5" y="5" width="5" height="5"
																					rx="1" fill="currentColor" />
																				<rect x="14" y="5" width="5" height="5"
																					rx="1" fill="currentColor"
																					opacity="0.3" />
																				<rect x="5" y="14" width="5" height="5"
																					rx="1" fill="currentColor"
																					opacity="0.3" />
																				<rect x="14" y="14" width="5" height="5"
																					rx="1" fill="currentColor"
																					opacity="0.3" />
																			</g>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</button>
																<!--begin::Menu 1-->
																<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
																	data-kt-menu="true" id="kt_menu_624451d685445">
																	<!--begin::Header-->
																	<div class="px-7 py-5">
																		<div class="fs-5 text-dark fw-bolder">Filter
																			Options
																		</div>
																	</div>
																	<!--end::Header-->
																	<!--begin::Menu separator-->
																	<div class="separator border-gray-200"></div>
																	<!--end::Menu separator-->
																	<!--begin::Form-->
																	<div class="px-7 py-5">
																		<!--begin::Input group-->
																		<div class="mb-10">
																			<!--begin::Label-->
																			<label
																				class="form-label fw-bold">Status:</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<div>
																				<select
																					class="form-select form-select-solid"
																					data-kt-select2="true"
																					data-placeholder="Select option"
																					data-dropdown-parent="#kt_menu_624451d685445"
																					data-allow-clear="true">
																					<option></option>
																					<option value="1">Approved</option>
																					<option value="2">Pending</option>
																					<option value="2">In Process
																					</option>
																					<option value="2">Rejected</option>
																				</select>
																			</div>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="mb-10">
																			<!--begin::Label-->
																			<label class="form-label fw-bold">Member
																				Type:</label>
																			<!--end::Label-->
																			<!--begin::Options-->
																			<div class="d-flex">
																				<!--begin::Options-->
																				<label
																					class="form-check form-check-sm form-check-custom form-check-solid me-5">
																					<input class="form-check-input"
																						type="checkbox" value="1" />
																					<span
																						class="form-check-label">Author</span>
																				</label>
																				<!--end::Options-->
																				<!--begin::Options-->
																				<label
																					class="form-check form-check-sm form-check-custom form-check-solid">
																					<input class="form-check-input"
																						type="checkbox" value="2"
																						checked="checked" />
																					<span
																						class="form-check-label">Customer</span>
																				</label>
																				<!--end::Options-->
																			</div>
																			<!--end::Options-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="mb-10">
																			<!--begin::Label-->
																			<label
																				class="form-label fw-bold">Notifications:</label>
																			<!--end::Label-->
																			<!--begin::Switch-->
																			<div
																				class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																				<input class="form-check-input"
																					type="checkbox" value=""
																					name="notifications"
																					checked="checked" />
																				<label
																					class="form-check-label">Enabled</label>
																			</div>
																			<!--end::Switch-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Actions-->
																		<div class="d-flex justify-content-end">
																			<button type="reset"
																				class="btn btn-sm btn-light btn-active-light-primary me-2"
																				data-kt-menu-dismiss="true">Reset</button>
																			<button type="submit"
																				class="btn btn-sm btn-primary"
																				data-kt-menu-dismiss="true">Apply</button>
																		</div>
																		<!--end::Actions-->
																	</div>
																	<!--end::Form-->
																</div>
																<!--end::Menu 1-->
																<!--end::Menu-->
															</div>
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-5">
															<!--begin::Timeline-->
															<div class="timeline-label">
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		08:42</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-warning fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Text-->
																	<div
																		class="fw-mormal timeline-content text-muted ps-3">
																		Outlines keep
																		you honest. And keep structure</div>
																	<!--end::Text-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		10:00</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-success fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Content-->
																	<div class="timeline-content d-flex">
																		<span class="fw-bolder text-gray-800 ps-3">AEOL
																			meeting</span>
																	</div>
																	<!--end::Content-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		14:37</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-danger fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Desc-->
																	<div
																		class="timeline-content fw-bolder text-gray-800 ps-3">
																		Make deposit
																		<a href="#" class="text-primary">USD 700</a>. to
																		ESL
																	</div>
																	<!--end::Desc-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		16:50</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-primary fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Text-->
																	<div
																		class="timeline-content fw-mormal text-muted ps-3">
																		Indulging in
																		poorly driving and keep structure keep great
																	</div>
																	<!--end::Text-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		21:03</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-danger fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Desc-->
																	<div
																		class="timeline-content fw-bold text-gray-800 ps-3">
																		New
																		order
																		placed
																		<a href="#" class="text-primary">#XF-2356</a>.
																	</div>
																	<!--end::Desc-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		16:50</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-primary fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Text-->
																	<div
																		class="timeline-content fw-mormal text-muted ps-3">
																		Indulging in
																		poorly driving and keep structure keep great
																	</div>
																	<!--end::Text-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		21:03</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-danger fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Desc-->
																	<div
																		class="timeline-content fw-bold text-gray-800 ps-3">
																		New
																		order
																		placed
																		<a href="#" class="text-primary">#XF-2356</a>.
																	</div>
																	<!--end::Desc-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="timeline-item mb-9">
																	<!--begin::Label-->
																	<div
																		class="timeline-label fw-bolder text-gray-800 fs-6">
																		10:30</div>
																	<!--end::Label-->
																	<!--begin::Badge-->
																	<div class="timeline-badge">
																		<i
																			class="fa fa-genderless text-success fs-1"></i>
																	</div>
																	<!--end::Badge-->
																	<!--begin::Text-->
																	<div
																		class="timeline-content fw-mormal text-muted ps-3">
																		Finance KPI
																		Mobile app launch preparion meeting</div>
																	<!--end::Text-->
																</div>
																<!--end::Item-->
															</div>
															<!--end::Timeline-->
														</div>
														<!--end: Card Body-->
													</div>
													<!--end: List Widget 5-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-6">
													<!--begin::Tables widget 14-->
													<div class="card">
														<!--begin::Header-->
														<div class="card-header">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span
																	class="card-label fw-bolder text-gray-800">Tasks</span>
															</h3>
															<!--end::Title-->

															<div class="card-toolbar">
																<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_task">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
																	<span class="svg-icon svg-icon-2">
																		<svg xmlns="http://www.w3.org/2000/svg"
																			width="24" height="24" viewBox="0 0 24 24"
																			fill="none">
																			<rect opacity="0.5" x="11.364" y="20.364"
																				width="16" height="2" rx="1"
																				transform="rotate(-90 11.364 20.364)"
																				fill="currentColor"></rect>
																			<rect x="4.36396" y="11.364" width="16"
																				height="2" rx="1" fill="currentColor">
																			</rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Add Task
																</button>
															</div>
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body pt-6">
															<!--begin::Table container-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table
																	class="table table-row-dashed align-middle gs-0 gy-3 my-0">
																	<!--begin::Table head-->
																	<thead>
																		<tr
																			class="fs-7 fw-bolder text-gray-400 border-bottom-0">
																			<th class="p-0 pb-3 min-w-175px text-start">
																				TITLE</th>
																			<th
																				class="p-0 pb-3 min-w-165px text-end pe-12">
																				STATUS</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<div class="d-flex align-items-center">
																					<div
																						class="d-flex justify-content-start flex-column">
																						<a href="#"
																							class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Mivy
																							App</a>
																						<span
																							class="text-gray-400 fw-bold d-block fs-7">Jane
																							Cooper</span>
																					</div>
																				</div>
																			</td>
																			<td class="text-end pe-12">
																				<span
																					class="badge py-3 px-4 fs-7 badge-light-primary">In
																					Process</span>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
															</div>
															<!--end::Table-->
														</div>
														<!--end: Card Body-->
													</div>
													<!--end::Tables widget 14-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<div class="<?php if($pg === "marketing") {echo "tab-pane fade show active";} else {echo "tab-pane fade";}?>" id="kt_general_widget_1_2">
											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Social Media</span>
														<span class="text-muted mt-1 fw-bold fs-7">Build a brand
															awareness by utilizing social media channels</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_social_media_card_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<!-- <th class="p-0 min-w-140px"></th> -->
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/linkedin-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">LinkedIn</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span
																				class="badge badge-light-success">Connected</span>
																		</td>
																		<td class="text-end">
																			<a href="https://www.linkedin.com/" target="_blank"
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="24" height="24"
																						viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18"
																							y="13" width="13" height="2"
																							rx="1"
																							transform="rotate(-180 18 13)"
																							fill="currentColor" />
																						<path
																							d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																							fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Instagram</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																			<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Facebook</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Twitter</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Prospecting</span>
														<span class="text-muted mt-1 fw-bold fs-7">Find and engage the
															best contacts</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_social_prospecting_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																		</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Branding</span>
														<span class="text-muted mt-1 fw-bold fs-7">Design imagery to
															express your product or service</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_branding_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Content</span>
														<span class="text-muted mt-1 fw-bold fs-7">Create interesting
															material to share with prospects</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_content_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->
										</div>
										<div class="<?php if($pg === "sales") {echo "tab-pane fade show active";} else {echo "tab-pane fade";}?>" id="kt_general_widget_1_3">
											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">CRM</span>
														<span class="text-muted mt-1 fw-bold fs-7">Add, track and manage
															your prospects and customers</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>

												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_crm_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<!-- <th class="p-0 min-w-140px"></th> -->
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/linkedin-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">LinkedIn</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Instagram</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Facebook</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Twitter</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Digital
															Contracts</span>
														<span class="text-muted mt-1 fw-bold fs-7">Email contracts and
															receive signatures virtually</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_digital_contracts_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Payments</span>
														<span class="text-muted mt-1 fw-bold fs-7">Allow your customers
															to pay for your services digitally</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_payments_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->
										</div>
										<div class="<?php if($pg === "customer-management") {echo "tab-pane fade show active";} else {echo "tab-pane fade";}?>" id="kt_general_widget_1_4">
											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Planning</span>
														<span class="text-muted mt-1 fw-bold fs-7">Establish a clean,
															repeatable handover process</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_planning_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<!-- <th class="p-0 min-w-140px"></th> -->
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/linkedin-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">LinkedIn</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Instagram</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Facebook</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Twitter</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Delivery and
															Setup</span>
														<span class="text-muted mt-1 fw-bold fs-7">Provide your product
															to your customer</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_social_delivery_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Training and
															Onboarding</span>
														<span class="text-muted mt-1 fw-bold fs-7">Work with your
															customer to provide necessary training</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_training_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->
										</div>
										<div class="<?php if($pg === "admin") {echo "tab-pane fade show active";} else {echo "tab-pane fade";}?>" id="kt_general_widget_1_5">
											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Establish</span>
														<span class="text-muted mt-1 fw-bold fs-7">Setup your
															business</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_establish_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<!-- <th class="p-0 min-w-140px"></th> -->
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/linkedin-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">LinkedIn</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Instagram</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Facebook</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Twitter</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Email</span>
														<span class="text-muted mt-1 fw-bold fs-7">Create an account to
															use specifically for business</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_email_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Finance</span>
														<span class="text-muted mt-1 fw-bold fs-7">Track your expenses
															and manage your taxes</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_finance_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->

											<!--begin::Tables Widget 3-->
											<div class="card mb-10">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bolder fs-3 mb-1">Legal</span>
														<span class="text-muted mt-1 fw-bold fs-7">Find contracts and
															legal resources</span>
													</h3>
													<div class="card-toolbar">
														<button class="btn btn-light me-2">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-pencil"
																	viewBox="0 0 16 16">
																	<path
																		d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z">
																	</path>
																</svg>
															</span> Edit
														</button>
														<button class="btn btn-primary me-2" data-bs-toggle="modal"
															data-bs-target="#kt_modal_create_tools">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11.364" y="20.364" width="16"
																		height="2" rx="1"
																		transform="rotate(-90 11.364 20.364)"
																		fill="currentColor"></rect>
																	<rect x="4.36396" y="11.364" width="16" height="2"
																		rx="1" fill="currentColor"></rect>
																</svg>
															</span>
															<!--end::Svg Icon-->Add Tool
														</button>
														<button class="d-none btn btn-sm btn-light"
															data-bs-toggle="collapse"
															data-bs-target="#kt_my_tools_card_collapsible">
															<span class="svg-icon svg-icon-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="16"
																	height="16" fill="currentColor" class="bi bi-dash"
																	viewBox="0 0 16 16">
																	<path
																		d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z">
																	</path>
																</svg>
															</span>
														</button>
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div id="kt_legal_collapsible" class="collapse show">
													<div class="card-body py-3">
														<!--begin::Table container-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table
																class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-0">
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-110px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Apollo</a>
																			<span
																				class="text-muted fw-bold d-block">www.linkedin.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/instagram-2-1.svg"
																						class="h-30px my-2" alt="">

																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Seamless.ai</a>
																			<span
																				class="text-muted fw-bold d-block">www.instagram.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/facebook-4.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Cognism</a>
																			<span
																				class="text-muted fw-bold d-block">www.facebook.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<div class="symbol symbol-45px me-2">
																				<span class="symbol-label">
																					<img src="assets/media/svg/brand-logos/twitter.svg"
																						class="h-30px my-2" alt="">
																				</span>
																			</div>
																		</td>
																		<td>
																			<a href="#"
																				class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Zoominfo</a>
																			<span
																				class="text-muted fw-bold d-block">www.twitter.com</span>
																		</td>
																		<td class="text-end">
																			<span class="badge badge-light-danger">Link
																				Account</span>
																		</td>
																		<td class="text-end">
																		<button
																				class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
																				data-bs-toggle="popover"
																				data-bs-html="true"
																				data-bs-trigger="hover"
																				data-bs-dismiss="true"
																				title="<span><b>Key Statistics</b></span>"
																				data-bs-content="And here's some amazing content. It's very <b class='text-danger'>engaging</b>. Right?">
																				<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																				<span class="svg-icon svg-icon-2">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="16" height="16"
																						fill="currentColor"
																						class="bi bi-question"
																						viewBox="0 0 16 16">
																						<path
																							d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</button>
																		</td>
																	</tr>
																</tbody>
																<!--end::Table body-->
															</table>
														</div>
														<!--end::Table-->
													</div>
												</div>
												<!--end::Body-->
											</div>
											<!--end::Tables Widget 3-->
										</div>
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::General Widget 1-->

							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4">
								<!--begin::Engage widget 1-->
								<div class="card mb-10">
									<!--begin::Body-->
									<div class="card-body d-flex flex-column flex-center">
										<!--begin::Heading-->
										<div class="mb-2">
											<!--begin::Title-->
											<h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
												<br>new
												<span class="fw-boldest">Mobile Application ?</span>
											</h1>
											<!--end::Title-->
											<!--begin::Illustration-->
											<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12"
												style="background-image:url('assets/media/svg/illustrations/easy/1.svg')">
											</div>
											<!--end::Illustration-->
										</div>
										<!--end::Heading-->
										<!--begin::Links-->
										<div class="text-center mb-1">
											<!--begin::Link-->
											<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app"
												data-bs-toggle="modal">Try now</a>
											<!--end::Link-->
											<!--begin::Link-->
											<a class="btn btn-sm btn-light"
												href="../../demo18/dist/pages/user-profile/activity.html">Learn more</a>
											<!--end::Link-->
										</div>
										<!--end::Links-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Engage widget 1-->
								<!--begin::Card-->
								<div class="card mb-10 d-flex align-items-center justify-content-center h-250px">
									<span class="card-label fw-bolder fs-3 mb-1">Advertising Box</span>
									<span class="text-muted mt-1 fw-bold fs-7">Your ads place here</span>
								</div>
								<!--end::Card-->

								<!--begin::Card-->
								<div class="card mb-10 d-flex align-items-center justify-content-center h-250px">
									<span class="card-label fw-bolder fs-3 mb-1">Advertising Box</span>
									<span class="text-muted mt-1 fw-bold fs-7">Your ads place here</span>
								</div>
								<!--end::Card-->

								<!--begin::Card-->
								<div class="card mb-10 d-flex align-items-center justify-content-center h-250px">
									<span class="card-label fw-bolder fs-3 mb-1">Advertising Box</span>
									<span class="text-muted mt-1 fw-bold fs-7">Your ads place here</span>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Post-->
				</div>
				<!--end::Container-->
				<!--begin::Footer-->
				<?php include 'components/footer.php';?>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--end::Main-->

	<!--begin::Chat drawer-->
	<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
		data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
		<!--begin::Messenger-->
		<div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
			<!--begin::Card header-->
			<div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
				<!--begin::Title-->
				<div class="card-title">
					<!--begin::User-->
					<div class="d-flex justify-content-center flex-column me-3">
						<a href="#" class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
							Cox</a>
						<!--begin::Info-->
						<div class="mb-0 lh-1">
							<span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
							<span class="fs-7 fw-bold text-muted">Active</span>
						</div>
						<!--end::Info-->
					</div>
					<!--end::User-->
				</div>
				<!--end::Title-->
				<!--begin::Card toolbar-->
				<div class="card-toolbar">
					<!--begin::Menu-->
					<div class="me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
							data-kt-menu-placement="bottom-end">
							<i class="bi bi-three-dots fs-3"></i>
						</button>
						<!--begin::Menu 3-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
							data-kt-menu="true">
							<!--begin::Heading-->
							<div class="menu-item px-3">
								<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
									Contacts</div>
							</div>
							<!--end::Heading-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_users_search">Add Contact</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
									data-bs-target="#kt_modal_invite_friends">Invite Contacts
									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
										title="Specify a contact email to send an invitation"></i></a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3" data-kt-menu-trigger="hover"
								data-kt-menu-placement="right-start">
								<a href="#" class="menu-link px-3">
									<span class="menu-title">Groups</span>
									<span class="menu-arrow"></span>
								</a>
								<!--begin::Menu sub-->
								<div class="menu-sub menu-sub-dropdown w-175px py-4">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Create
											Group</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Invite
											Members</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
											title="Coming soon">Settings</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu sub-->
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-3 my-1">
								<a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
									title="Coming soon">Settings</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::Menu 3-->
					</div>
					<!--end::Menu-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-2">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Card toolbar-->
			</div>
			<!--end::Card header-->
			<!--begin::Card body-->
			<div class="card-body" id="kt_drawer_chat_messenger_body">
				<!--begin::Messages-->
				<div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
					data-kt-scroll-activate="true" data-kt-scroll-height="auto"
					data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
					data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">2 mins</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">How likely are you to recommend
								our company to your
								friends and family ?</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">5 mins</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Hey there, we’re just writing to
								let you know that you’ve
								been subscribed to a repository on GitHub.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">1 Hour</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Ok, Understood!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">2 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">You’ll receive notifications for
								all issues, pull
								requests!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">3 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">You can unwatch this repository
								immediately by clicking
								here:
								<a href="https://keenthemes.com">Keenthemes.com</a>
							</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(out)-->
					<div class="d-flex justify-content-end mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">4 Hours</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text">Most purchased Business courses
								during this sale!</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(out)-->
					<!--begin::Message(in)-->
					<div class="d-flex justify-content-start mb-10">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">5 Hours</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Company BBQ to celebrate the last
								quater achievements and
								goals. Food and drinks provided</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(in)-->
					<!--begin::Message(template for out)-->
					<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-end">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Details-->
								<div class="me-3">
									<span class="text-muted fs-7 mb-1">Just now</span>
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
								</div>
								<!--end::Details-->
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
								data-kt-element="message-text"></div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for out)-->
					<!--begin::Message(template for in)-->
					<div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
						<!--begin::Wrapper-->
						<div class="d-flex flex-column align-items-start">
							<!--begin::User-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-3">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian
										Cox</a>
									<span class="text-muted fs-7 mb-1">Just now</span>
								</div>
								<!--end::Details-->
							</div>
							<!--end::User-->
							<!--begin::Text-->
							<div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
								data-kt-element="message-text">Right before vacation season we
								have the next Big Deal
								for you.</div>
							<!--end::Text-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Message(template for in)-->
				</div>
				<!--end::Messages-->
			</div>
			<!--end::Card body-->
			<!--begin::Card footer-->
			<div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
				<!--begin::Input-->
				<textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
					placeholder="Type a message"></textarea>
				<!--end::Input-->
				<!--begin:Toolbar-->
				<div class="d-flex flex-stack">
					<!--begin::Actions-->
					<div class="d-flex align-items-center me-2">
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-paperclip fs-3"></i>
						</button>
						<button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
							data-bs-toggle="tooltip" title="Coming soon">
							<i class="bi bi-upload fs-3"></i>
						</button>
					</div>
					<!--end::Actions-->
					<!--begin::Send-->
					<button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
					<!--end::Send-->
				</div>
				<!--end::Toolbar-->
			</div>
			<!--end::Card footer-->
		</div>
		<!--end::Messenger-->
	</div>
	<!--end::Chat drawer-->



	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
					fill="currentColor" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->

	<!--begin::Modals-->
	<!--begin::Modal - Create Project-->
	<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-fullscreen p-9">
			<!--begin::Modal content-->
			<div class="modal-content modal-rounded">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Create Project</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Nav-->
							<div class="stepper-nav justify-content-center py-2">
								<!--begin::Step 1-->
								<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Project Type</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Project Settings</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Budget</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Build A Team</h3>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Set First Target</h3>
								</div>
								<!--end::Step 5-->
								<!--begin::Step 6-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Upload Files</h3>
								</div>
								<!--end::Step 6-->
								<!--begin::Step 7-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
								<!--end::Step 7-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
								id="kt_modal_create_project_form" method="post">
								<!--begin::Type-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-7 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Project Type</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check out
												<a href="#" class="link-primary fw-bolder">FAQ Page</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-15" data-kt-buttons="true">
											<!--begin::Option-->
											<label
												class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6 active">
												<!--begin::Input-->
												<input class="btn-check" type="radio" checked="checked"
													name="project_type" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
													<span class="svg-icon svg-icon-3hx">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
																fill="currentColor" />
															<path
																d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="ms-4">
														<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Personal
															Project</span>
														<span class="fw-bold fs-4 text-muted">If you need more info,
															please check it out</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label
												class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6">
												<!--begin::Input-->
												<input class="btn-check" type="radio" name="project_type" value="2" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
													<span class="svg-icon svg-icon-3hx">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
																fill="currentColor" />
															<path
																d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="ms-4">
														<span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Team
															Project</span>
														<span class="fw-bold fs-4 text-muted">Create corporate account
															to manage users</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="type-next">
												<span class="indicator-label">Project Settings</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Type-->
								<!--begin::Settings-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Project Settings</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_project_settings_logo">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
													<span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
																fill="currentColor" />
															<path
																d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
																fill="currentColor" />
															<path
																d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
																fill="currentColor" />
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bolder text-gray-900 mb-1">Drop files here
															or click to upload.</h3>
														<span class="fw-bold fs-4 text-muted">Upload up to 10
															files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold mb-2">Customer</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select class="form-select form-select-solid" data-control="select2"
												data-hide-search="true" data-placeholder="Select..."
												name="settings_customer">
												<option></option>
												<option value="1">Keenthemes</option>
												<option value="2">CRM App</option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Project Name</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify project name"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter Project Name" value="StockPro Mobile App"
												name="settings_name" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold mb-2">Project Description</label>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea class="form-control form-control-solid" rows="3"
												placeholder="Enter Project Description"
												name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold mb-2">Release Date</label>
											<!--end::Label-->
											<!--begin::Wrapper-->
											<div class="position-relative d-flex align-items-center">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
												<span class="svg-icon svg-icon-2 position-absolute mx-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
															d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
															fill="currentColor" />
														<path
															d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
															fill="currentColor" />
														<path
															d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Input-->
												<input class="form-control form-control-solid ps-12"
													placeholder="Pick date range" name="settings_release_date" />
												<!--end::Input-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="required fs-6 fw-bold">Notifications</label>
													<div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or
														Email</div>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="email" name="settings_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Email</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="phone" checked="checked"
															name="settings_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Phone</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--begin::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="settings-previous">Project Type</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="settings-next">
												<span class="indicator-label">Budget</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Settings-->
								<!--begin::Budget-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Budget</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold mb-2">
												<span class="required">Setup Budget</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
													data-bs-trigger="hover" data-bs-html="true"
													data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
											</label>
											<!--end::Label-->
											<!--begin::Dialer-->
											<div class="position-relative w-lg-250px"
												id="kt_modal_create_project_budget_setup" data-kt-dialer="true"
												data-kt-dialer-min="50" data-kt-dialer-max="50000"
												data-kt-dialer-step="100" data-kt-dialer-prefix="$"
												data-kt-dialer-decimals="2">
												<!--begin::Decrease control-->
												<button type="button"
													class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
													data-kt-dialer-control="decrease">
													<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
																rx="10" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Decrease control-->
												<!--begin::Input control-->
												<input type="text"
													class="form-control form-control-solid border-0 ps-12"
													data-kt-dialer-control="input" placeholder="Amount"
													name="budget_setup" readonly="readonly" value="$50" />
												<!--end::Input control-->
												<!--begin::Increase control-->
												<button type="button"
													class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
													data-kt-dialer-control="increase">
													<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
																rx="10" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
																transform="rotate(-90 10.8891 17.8033)"
																fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Increase control-->
											</div>
											<!--end::Dialer-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Budget Usage</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row g-9" data-kt-buttons="true"
												data-kt-buttons-target="[data-kt-button='true']">
												<!--begin::Col-->
												<div class="col-md-6 col-lg-12 col-xxl-6">
													<!--begin::Option-->
													<label
														class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6"
														data-kt-button="true">
														<!--begin::Radio-->
														<span
															class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
																name="budget_usage" value="1" checked="checked" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span
																class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Precise
																Usage</span>
															<span class="fw-bold fs-7 text-gray-600">Withdraw money to
																your bank account per transaction under $50,000
																budget</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-lg-12 col-xxl-6">
													<!--begin::Option-->
													<label
														class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6"
														data-kt-button="true">
														<!--begin::Radio-->
														<span
															class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
																name="budget_usage" value="2" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span
																class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Extreme
																Usage</span>
															<span class="fw-bold fs-7 text-gray-600">Withdraw money to
																your bank account per transaction under $50,000
																budget</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Allow Changes in Budget</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please
														check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="budget_allow" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="budget-previous">Project Settings</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="budget-next">
												<span class="indicator-label">Build Team</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Budget-->
								<!--begin::Team-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Build a Team</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Invite Teammates</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Add project memnbers by name or email.."
												name="invite_teammates" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<div class="fs-6 fw-bold mb-2">Team Members</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
																Smith</a>
															<div class="fw-bold text-muted">smith@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-bold">M</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
																Macy</a>
															<div class="fw-bold text-muted">melody@altbox.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
																Smith</a>
															<div class="fw-bold text-muted">max@kt.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
																Bean</a>
															<div class="fw-bold text-muted">sean@dellito.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
																Cox</a>
															<div class="fw-bold text-muted">brian@exchange.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-warning text-warning fw-bold">C</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
																Collins</a>
															<div class="fw-bold text-muted">mik@pex.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
																Mitcham</a>
															<div class="fw-bold text-muted">f.mit@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-bold">O</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
																Wild</a>
															<div class="fw-bold text-muted">olivia@corpmail.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-primary text-primary fw-bold">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
																Owen</a>
															<div class="fw-bold text-muted">owen.neil@gmail.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
																Wilson</a>
															<div class="fw-bold text-muted">dam@consilting.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-bold">E</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
																Bold</a>
															<div class="fw-bold text-muted">emma@intenso.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
																Crown</a>
															<div class="fw-bold text-muted">ana.cf@limtel.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-info text-info fw-bold">A</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
																Doe</a>
															<div class="fw-bold text-muted">robert@benko.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
																Miller</a>
															<div class="fw-bold text-muted">miller@mapple.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-success text-success fw-bold">L</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
																Kunic</a>
															<div class="fw-bold text-muted">lucy.m@fentech.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
																Wilder</a>
															<div class="fw-bold text-muted">ethan@loop.com.au</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
																Cox</a>
															<div class="fw-bold text-muted">brian@exchange.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
											</div>
											<!--end::Users-->
										</div>
										<!--end::Input group-->
										<!--begin::Notice-->
										<div class="d-flex flex-stack mb-15">
											<!--begin::Label-->
											<div class="me-5 fw-bold">
												<label class="fs-6">Adding Users by Team Members</label>
												<div class="fs-7 text-muted">If you need more info, please check budget
													planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value=""
													checked="checked" />
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Notice-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="team-previous">Budget</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="team-next">
												<span class="indicator-label">Set Target</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Team-->
								<!--begin::Targets-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Set First Target</h1>
											<!--end::Title-->
											<!--begin::Title-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="fs-6 fw-bold mb-2">Target Title</label>
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter Target Title" name="Project Launch" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold mb-2">Assign</label>
												<select class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Select a Team Member"
													name="target_assign">
													<option></option>
													<option value="1">Karina Clark</option>
													<option value="2" selected="selected">Robert Doe</option>
													<option value="3">Niel Owen</option>
													<option value="4">Olivia Wild</option>
													<option value="5">Sean Bean</option>
												</select>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold mb-2">Due Date</label>
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
																fill="currentColor" />
															<path
																d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
																fill="currentColor" />
															<path
																d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12"
														placeholder="Pick date range" name="target_due_date" />
													<!--end::Datepicker-->
												</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="fs-6 fw-bold mb-2">Target Details</label>
											<textarea class="form-control form-control-solid" rows="2"
												name="target_details"
												placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="required fs-6 fw-bold mb-2">Tags</label>
											<input class="form-control form-control-solid" value="Important, Urgent"
												name="target_tags" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Allow Changes in Budget</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please
														check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="target_allow" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Notifications</label>
													<div class="fs-7 fw-bold text-muted">Allow Notifications by Phone or
														Email</div>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="email" name="target_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Email</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="phone" checked="checked"
															name="target_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-bold">Phone</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="targets-previous">Build a Team</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="targets-next">
												<span class="indicator-label">Upload Files</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Targets-->
								<!--begin::Files-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Upload Files</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_project_files_upload">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
													<span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
																fill="currentColor" />
															<path
																d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
																fill="currentColor" />
															<path
																d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
																fill="currentColor" />
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bolder text-gray-900 mb-1">Drop files here
															or click to upload.</h3>
														<span class="fw-bold fs-4 text-muted">Upload up to 10
															files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-bold mb-2">Uploaded File</label>
											<!--End::Label-->
											<!--begin::Files-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/pdf.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Avionica
																Technical Requirements</a>
															<div class="fw-bold text-muted">230kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/doc.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">9
																Degree CURD draftplan</a>
															<div class="fw-bold text-muted">3.6mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/css.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">User
																CRUD Styles</a>
															<div class="fw-bold text-muted">85kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/ai.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Design
																Initial Logo</a>
															<div class="fw-bold text-muted">40kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
												<!--begin::File-->
												<div class="d-flex flex-stack py-4">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/tif.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Tower
																Hill Bilboard</a>
															<div class="fw-bold text-muted">27mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
															<option></option>
															<option value="1">Remove</option>
															<option value="2">Modify</option>
															<option value="3">Select</option>
														</select>
													</div>
													<!--end::Menu-->
												</div>
												<!--end::File-->
											</div>
											<!--end::Files-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-bold">Allow Changes in Budget</label>
													<div class="fs-7 fw-bold text-muted">If you need more info, please
														check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="target_allow" checked="checked" />
													<span class="form-check-label fw-bold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="files-previous">Set First Target</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="files-next">
												<span class="indicator-label">Complete</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Files-->
								<!--begin::Complete-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12 text-center">
											<!--begin::Title-->
											<h1 class="fw-bolder text-dark">Project Created!</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-bold fs-4">If you need more info, please check how
												to create project</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-center pb-20">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="complete-start">Create New Project</button>
											<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
												title="Coming Soon">View Project</a>
										</div>
										<!--end::Actions-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt=""
												class="mww-100 mh-350px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Complete-->
							</form>
							<!--end::Form-->
						</div>
						<!--begin::Container-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Create Project-->
	<!--begin::Modal - Users Search-->
	<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Content-->
					<div class="text-center mb-13">
						<h1 class="mb-3">Search Users</h1>
						<div class="text-muted fw-bold fs-5">Invite Collaborators To Your Project</div>
					</div>
					<!--end::Content-->
					<!--begin::Search-->
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
						data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span
								class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
										transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path
										d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15"
								name="search" value="" placeholder="Search by username, full name or email..."
								data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
								data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span
								class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
								data-kt-search-element="clear">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<!--end::Reset-->
						</form>
						<!--end::Form-->
						<!--begin::Wrapper-->
						<div class="py-5">
							<!--begin::Suggestions-->
							<div data-kt-search-element="suggestions">
								<!--begin::Heading-->
								<h3 class="fw-bold mb-5">Recently searched:</h3>
								<!--end::Heading-->
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
											<span class="badge badge-light">Art Director</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
											<span class="badge badge-light">Marketing Analytic</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Max Smith</span>
											<span class="badge badge-light">Software Enginer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
											<span class="badge badge-light">Web Developer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
									<!--begin::User-->
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle me-5">
											<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Info-->
										<div class="fw-bold">
											<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
											<span class="badge badge-light">UI/UX Designer</span>
										</div>
										<!--end::Info-->
									</a>
									<!--end::User-->
								</div>
								<!--end::Users-->
							</div>
							<!--end::Suggestions-->
							<!--begin::Results(add d-none to below element to hide the users list by default)-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Users-->
								<div class="mh-375px scroll-y me-n7 pe-7">
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='0']"
													value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
													Smith</a>
												<div class="fw-bold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='1']"
													value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
													Macy</a>
												<div class="fw-bold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='2']"
													value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
													Smith</a>
												<div class="fw-bold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='3']"
													value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
													Bean</a>
												<div class="fw-bold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='4']"
													value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
													Cox</a>
												<div class="fw-bold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='5']"
													value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-warning text-warning fw-bold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-bold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='6']"
													value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
													Mitcham</a>
												<div class="fw-bold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='7']"
													value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
													Wild</a>
												<div class="fw-bold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='8']"
													value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-primary text-primary fw-bold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
													Owen</a>
												<div class="fw-bold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='9']"
													value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
													Wilson</a>
												<div class="fw-bold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='10']"
													value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
													Bold</a>
												<div class="fw-bold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='11']"
													value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
													Crown</a>
												<div class="fw-bold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='12']"
													value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-bold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
													Doe</a>
												<div class="fw-bold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='13']"
													value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
													Miller</a>
												<div class="fw-bold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='14']"
													value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-success text-success fw-bold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
													Kunic</a>
												<div class="fw-bold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2" selected="selected">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='15']"
													value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
													Wilder</a>
												<div class="fw-bold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1" selected="selected">Guest</option>
												<option value="2">Owner</option>
												<option value="3">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
									<!--begin::Separator-->
									<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
									<!--end::Separator-->
									<!--begin::User-->
									<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
										<!--begin::Details-->
										<div class="d-flex align-items-center">
											<!--begin::Checkbox-->
											<label class="form-check form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='16']"
													value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
													Crown</a>
												<div class="fw-bold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
												<option value="1">Guest</option>
												<option value="2">Owner</option>
												<option value="3" selected="selected">Can Edit</option>
											</select>
										</div>
										<!--end::Access menu-->
									</div>
									<!--end::User-->
								</div>
								<!--end::Users-->
								<!--begin::Actions-->
								<div class="d-flex flex-center mt-15">
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
										class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
										Selected Users</button>
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Results-->
							<!--begin::Empty-->
							<div data-kt-search-element="empty" class="text-center d-none">
								<!--begin::Message-->
								<div class="fw-bold py-10">
									<div class="text-gray-600 fs-3 mb-2">No users found</div>
									<div class="text-muted fs-6">Try to search by username, full name or email...</div>
								</div>
								<!--end::Message-->
								<!--begin::Illustration-->
								<div class="text-center px-5">
									<img src="assets/media/illustrations/sketchy-1/1.png" alt=""
										class="w-100 h-200px h-sm-325px" />
								</div>
								<!--end::Illustration-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Search-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Users Search-->
	<!--begin::Modal - Invite Friends-->
	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-muted fw-bold fs-5">If you need more info, please check out
							<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
						</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bolder w-100 mb-8">
						<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite
						Gmail Contacts
					</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3"
						placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-bold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
											Smith</a>
										<div class="fw-bold text-muted">smith@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
											Macy</a>
										<div class="fw-bold text-muted">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
											Smith</a>
										<div class="fw-bold text-muted">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
											Bean</a>
										<div class="fw-bold text-muted">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
											Cox</a>
										<div class="fw-bold text-muted">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
											Collins</a>
										<div class="fw-bold text-muted">mik@pex.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
											Mitcham</a>
										<div class="fw-bold text-muted">f.mit@kpmg.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
											Wild</a>
										<div class="fw-bold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
											Owen</a>
										<div class="fw-bold text-muted">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
											Wilson</a>
										<div class="fw-bold text-muted">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
											Bold</a>
										<div class="fw-bold text-muted">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
											Crown</a>
										<div class="fw-bold text-muted">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-bold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
											Doe</a>
										<div class="fw-bold text-muted">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
											Miller</a>
										<div class="fw-bold text-muted">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-bold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
											Kunic</a>
										<div class="fw-bold text-muted">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
											Wilder</a>
										<div class="fw-bold text-muted">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
											Wild</a>
										<div class="fw-bold text-muted">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2"
										data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-bold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-bold text-muted">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Invite Friend-->
	<!--begin::Modal - Create Tool-->
	<div class="modal fade" tabindex="-1" id="kt_modal_create_tools">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--begin::Form-->
				<form class="form" action="#" id="kt_modal_create_tools_form">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2 class="fw-bolder" data-kt-calendar="title">Add a New Tool</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
										transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
										transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body">
						<!--begin::Input group-->
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-bold required mb-2">Tool Name</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_name" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-bold mb-2">Website</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_description" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row">
							<!--begin::Label-->
							<label class="fs-6 fw-bold mb-2">Category</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_location" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer flex-center">
						<!--begin::Button-->
						<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="button" id="kt_modal_create_tools_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please
								wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
						<!--end::Button-->
					</div>
					<!--end::Modal footer-->
				</form>
				<!--end::Form-->
			</div>
		</div>
	</div>
	<!--end::Modal - Create Tool-->

		<!--begin::Modal - Create Tool-->
		<div class="modal fade" tabindex="-1" id="kt_modal_edit_tools">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--begin::Form-->
				<form class="form" action="#" id="kt_modal_edit_tools_form">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2 class="fw-bolder" data-kt-calendar="title">Edit Existing Tool</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
										transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
										transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body">
						<!--begin::Input group-->
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-bold required mb-2">Tool Name</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_name" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-bold mb-2">Website</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_description" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row">
							<!--begin::Label-->
							<label class="fs-6 fw-bold mb-2">Category</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_location" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer flex-center">
						<!--begin::Button-->
						<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="button" id="kt_modal_create_tools_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please
								wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
						<!--end::Button-->
					</div>
					<!--end::Modal footer-->
				</form>
				<!--end::Form-->
			</div>
		</div>
	</div>
	<!--end::Modal - Create Tool-->

		<!--begin::Modal - Create Task-->
		<div class="modal fade" tabindex="-1" id="kt_modal_create_task">
		<div class="modal-dialog">
			<div class="modal-content">
				<!--begin::Form-->
				<form class="form" action="#" id="kt_modal_create_task_form">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2 class="fw-bolder" data-kt-calendar="title">Add a New Task</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
									fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
										transform="rotate(-45 6 17.3137)" fill="currentColor" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1"
										transform="rotate(45 7.41422 6)" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body">
						<!--begin::Input group-->
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-bold required mb-2">Task Name</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_name" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-9">
							<!--begin::Label-->
							<label class="fs-6 fw-bold required mb-2">Task Detail</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_description" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row">
							<!--begin::Label-->
							<label class="fs-6 fw-bold required mb-2">Task Status</label>
							<!--end::Label-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-solid" placeholder=""
								name="calendar_event_location" />
							<!--end::Input-->
						</div>
						<!--end::Input group-->
					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer flex-center">
						<!--begin::Button-->
						<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Cancel</button>
						<button type="button" id="kt_modal_create_tools_submit" class="btn btn-primary">Submit</button>
						<!--end::Button-->
					</div>
					<!--end::Modal footer-->
				</form>
				<!--end::Form-->
			</div>
		</div>
	</div>
	<!--end::Modal - Create Tool-->

	<!--begin::Modal - Social Media-->
	<div class="modal fade" tabindex="-1" id="kt_modal_social_media">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Social Media</h5>

					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<span class="svg-icon svg-icon-2x"></span>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--end::Modal - Social Media-->

	<!--begin::Modal - Prospecting-->
	<div class="modal fade" tabindex="-1" id="kt_modal_prospecting">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Prospecting</h5>

					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<span class="svg-icon svg-icon-2x"></span>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--end::Modal - Prospecting-->

	<!--begin::Modal - branding-->
	<div class="modal fade" tabindex="-1" id="kt_modal_branding">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add branding</h5>

					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<span class="svg-icon svg-icon-2x"></span>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--end::Modal - branding-->

	<!--begin::Modal - content-->
	<div class="modal fade" tabindex="-1" id="kt_modal_content">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add content</h5>

					<!--begin::Close-->
					<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
						aria-label="Close">
						<span class="svg-icon svg-icon-2x"></span>
					</div>
					<!--end::Close-->
				</div>

				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--end::Modal - content-->
	<!--end::Modals-->


	<!--begin::Javascript-->
	<script>var hostUrl = "assets/";</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="assets/js/custom/apps/calendar/calendar.js"></script>
	<script src="assets/js/widgets.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
	<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
	<script src="assets/js/custom/utilities/modals/create-app.js"></script>
	<script src="assets/js/custom/utilities/modals/users-search.js"></script>

	<script src="assets/js/app.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>