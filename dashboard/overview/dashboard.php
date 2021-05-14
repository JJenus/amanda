
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<?= include HELPERPATH."temp/main_nav.php" ?> 
					<!--begin::Main-->
					<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Content-->
						<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-8">
									<div class="col-xl-4">
										<!--begin::Engage Widget 5-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Body-->
											<div class="card-body pb-0">
												<!--begin::Wrapper-->
												<div class="d-flex flex-column h-100">
													<!--begin::Text-->
													<h3 class="text-dark text-center fs-1 fw-bolder pt-15 lh-lg">
													  <?= APP_NAME ?>
													<br />Web Application</h3>
													<!--end::Text-->
													
													<!--begin::Image-->
													<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-200px" style="background-image:url('<?= base_url ?>/assets/media/svg/illustrations/terms-2.svg')"></div>
													<!--end::Image-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Engage Widget 5-->
									</div>
									<div class="col-xl-8">
										<!--begin::Table Widget 1-->
										<div class="card card-stretch d-none mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark fs-3">Campaign Leaders</span>
													<span class="text-muted mt-2 fw-bold fs-6">890,344 Sales</span>
												</h3>
												<div class="card-toolbar">
													<ul class="nav nav-pills nav-pills-sm nav-light">
														<li class="nav-item">
															<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 active fw-bolder me-2" data-bs-toggle="tab" href="#kt_tab_pane_1_1">Day</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder me-2" data-bs-toggle="tab" href="#kt_tab_pane_1_2">Week</a>
														</li>
														<li class="nav-item">
															<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder" data-bs-toggle="tab" href="#kt_tab_pane_1_3">Month</a>
														</li>
													</ul>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="tab-content mt-5" id="myTabTables1">
													<!--begin::Tap pane-->
													<div class="tab-pane fade show active" id="kt_tab_pane_1_1" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless align-middle">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-200px"></th>
																		<th class="p-0 min-w-100px"></th>
																		<th class="p-0 min-w-40px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th class="px-0 py-3">
																			<div class="symbol symbol-65px me-5">
																				<span class="symbol-label bg-light-primary">
																					<!--begin::Svg Icon | path: icons/stockholm/Communication/Group-chat.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																							<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Top Authors</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-primary">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 46%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">46%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="px-0 py-3">
																			<div class="symbol symbol-65px">
																				<span class="symbol-label bg-light-warning">
																					<!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-4-blocks.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-warning">
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																								<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																							</g>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</td>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Popular Authors</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML, VueJS, Laravel</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-warning">
																						<div class="progress-bar bg-warning" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">87%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="px-0 py-3">
																			<div class="symbol symbol-65px">
																				<span class="symbol-label bg-light-success">
																					<!--begin::Svg Icon | path: icons/stockholm/Communication/Add-user.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																							<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">New Users</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-success">
																						<div class="progress-bar bg-success" role="progressbar" style="width: 53%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">53%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="px-0 py-3">
																			<div class="symbol symbol-65px">
																				<span class="symbol-label bg-light-danger">
																					<!--begin::Svg Icon | path: icons/stockholm/Home/Library.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																								<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																							</g>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Weekly Bestsellers</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-danger">
																						<div class="progress-bar bg-danger" role="progressbar" style="width: 92%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">92%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_1_2" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless align-middle">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-200px"></th>
																		<th class="p-0 min-w-100px"></th>
																		<th class="p-0 min-w-40px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<th class="ps-0 py-3">
																			<div class="symbol symbol-65px me-3">
																				<span class="symbol-label bg-light-success">
																					<!--begin::Svg Icon | path: icons/stockholm/Communication/Add-user.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																							<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">New Users</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-success">
																						<div class="progress-bar bg-success" role="progressbar" style="width: 53%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">53%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-0 py-3">
																			<div class="symbol symbol-65px me-3">
																				<span class="symbol-label bg-light-danger">
																					<!--begin::Svg Icon | path: icons/stockholm/Home/Library.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																								<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																							</g>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Weekly Bestsellers</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-danger">
																						<div class="progress-bar bg-danger" role="progressbar" style="width: 92%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">92%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-0 py-3">
																			<div class="symbol symbol-65px me-3">
																				<span class="symbol-label bg-light-primary">
																					<!--begin::Svg Icon | path: icons/stockholm/Communication/Group-chat.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																							<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Top Authors</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-primary">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 46%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">46%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<td class="ps-0 py-3">
																			<div class="symbol symbol-65px me-3">
																				<span class="symbol-label bg-light-warning">
																					<!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-4-blocks.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-warning">
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																								<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																							</g>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</td>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Popular Authors</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML, VueJS, Laravel</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-warning">
																						<div class="progress-bar bg-warning" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">87%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													<!--begin::Tap pane-->
													<div class="tab-pane fade" id="kt_tab_pane_1_3" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless align-middle">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-200px"></th>
																		<th class="p-0 min-w-100px"></th>
																		<th class="p-0 min-w-40px"></th>
																	</tr>
																</thead>
																<tbody>
																	<tr>
																		<td class="ps-0 py-3">
																			<div class="symbol symbol-65px bg-light-warning me-3">
																				<span class="symbol-label">
																					<!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-4-blocks.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-warning">
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
																								<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
																							</g>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</td>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Popular Authors</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML, VueJS, Laravel</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-warning">
																						<div class="progress-bar bg-warning" role="progressbar" style="width: 87%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">87%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-0 py-3">
																			<div class="symbol symbol-65px bg-light-success me-3">
																				<span class="symbol-label">
																					<!--begin::Svg Icon | path: icons/stockholm/Communication/Add-user.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-success">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																							<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">New Users</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-success">
																						<div class="progress-bar bg-success" role="progressbar" style="width: 53%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">53%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-0 py-3">
																			<div class="symbol symbol-65px bg-light-primary me-3">
																				<span class="symbol-label">
																					<!--begin::Svg Icon | path: icons/stockholm/Communication/Group-chat.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-primary">
																						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
																							<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Top Authors</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-primary">
																						<div class="progress-bar bg-primary" role="progressbar" style="width: 46%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">46%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-0 py-3">
																			<div class="symbol symbol-65px bg-light-danger me-3">
																				<span class="symbol-label">
																					<!--begin::Svg Icon | path: icons/stockholm/Home/Library.svg-->
																					<span class="svg-icon svg-icon-1 svg-icon-danger">
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<rect x="0" y="0" width="24" height="24" />
																								<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
																								<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
																							</g>
																						</svg>
																					</span>
																					<!--end::Svg Icon-->
																				</span>
																			</div>
																		</th>
																		<td class="ps-0">
																			<a href="#" class="text-gray-800 fw-bolder text-hover-primary fs-6">Weekly Bestsellers</a>
																			<span class="text-muted fw-bold d-block mt-1">HTML/CSS/JS, Python</span>
																		</td>
																		<td>
																			<div class="d-flex flex-column w-100 me-3">
																				<div class="d-flex flex-stack mb-2">
																					<span class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="progress h-6px w-100 bg-light-danger">
																						<div class="progress-bar bg-danger" role="progressbar" style="width: 92%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
																					</div>
																					<span class="text-muted fs-7 fw-bold ps-3">92%</span>
																				</div>
																			</div>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
												</div>
											</div>
										</div>
										<!--end::Table Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-8">
									<div class="col-xl-4">
										<!--begin::Stats Widget 1-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="fw-bolder text-dark fs-3">Sales Share</span>
													<span class="text-muted mt-2 fw-bold fs-6">890,344 Sales</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Dropdown-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4" href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
													<!--end::Dropdown-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-12">
												<!--begin::Chart-->
												<div class="d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center h-175px" style="background-image:url('<?= base_url ?>/assets/media/svg/illustrations/bg-1.svg')">
													<div class="fw-bolder fs-1 text-gray-800 position-absolute">8,345</div>
													<canvas id="kt_stats_widget_1_chart"></canvas>
												</div>
												<!--end::Chart-->
												<!--begin::Items-->
												<div class="d-flex justify-content-around pt-18">
													<!--begin::Item-->
													<div class="">
														<span class="fw-bolder text-gray-800">48% SNT</span>
														<span class="bg-info w-25px h-5px d-block rounded mt-1"></span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="">
														<span class="fw-bolder text-gray-800">20% REX</span>
														<span class="bg-primary w-25px h-5px d-block rounded mt-1"></span>
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="">
														<span class="fw-bolder text-gray-800">32% SAP</span>
														<span class="bg-warning w-25px h-5px d-block rounded mt-1"></span>
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Stats Widget 1-->
									</div>
									
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-8">
									<div class="col-xl-4">
										<!--begin::List Widget 1-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="fw-bolder text-dark fs-3">Timeline</span>
													<span class="text-muted mt-2 fw-bold fs-6">890,344 Sales</span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Dropdown-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
														<!--begin::Svg Icon | path: icons/stockholm/Layout/Layout-4-blocks-2.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Manage</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add User</a>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Add Role</a>
														</div>
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start" data-kt-menu-flip="left-start, top">
															<a href="#" class="menu-link px-3">
																<span class="menu-title">Add Group</span>
																<span class="menu-arrow"></span>
															</a>
															<div class="menu-sub menu-sub-dropdown w-200px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">Reports</a>
														</div>
														<div class="separator mt-3 opacity-75"></div>
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary fw-bold btn-sm px-4" href="#">Create New</a>
															</div>
														</div>
													</div>
													<!--end::Menu-->
													<!--end::Dropdown-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<!--begin::Timeline-->
												<div class="timeline mt-3">
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-gray-200 fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="fw-normal fs-7 timeline-content text-gray-600 ps-3">Outlines keep you Indulging in poorly driving.</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="fw-bolder text-gray-800 ps-3 pe-3">AEOL meeting with</span>
															<!--begin::Symbol-->
															<div class="symbol symbol-35px bg-light-primary mt-n3 me-2 align-self-center">
																<span class="symbol-label bg-light align-items-end">
																	<img alt="Logo" src="<?= base_url ?>/assets/media/svg/avatars/004-boy-1.svg" class="mh-25px" />
																</span>
															</div>
															<!--end::Symbol-->
															<!--begin::Symbol-->
															<div class="symbol symbol-35px bg-light-primary mt-n3 align-self-center">
																<span class="symbol-label bg-light align-items-end">
																	<img alt="Logo" src="<?= base_url ?>/assets/media/svg/avatars/010-girl-4.svg" class="mh-25px" />
																</span>
															</div>
															<!--end::Symbol-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit 
														<a href="#" class="text-primary">USD 700</a>. to ESL</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content fw-normal fs-7 text-gray-600 ps-3">Poorly driving and keep structure</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 v">21:03</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content fw-bolder text-gray-800 ps-3">New order placed 
														<a href="#" class="text-primary">#XF-2356</a>.</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">23:41</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content fw-normal fs-7 text-gray-600 ps-3">Amazing keep you Indulging in poorly driving.</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start pb-1">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">15:27</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Desc-->
														<div class="timeline-content fw-bolder text-gray-800 ps-3">Make deposit 
														<a href="#" class="text-primary">USD 400</a>. to ESL</div>
														<!--end::Desc-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6">23:10</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless fs-1 text-gray-200"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="timeline-content fw-normal fs-7 text-gray-600 ps-3">Indulging in poorly driving and keep structure keep great</div>
														<!--end::Text-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Timeline-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::List Widget 1-->
									</div>
									<div class="col-xl-8">
										<!--begin::Table Widget 2-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark fs-3">Staffs</span>
													<span class="text-muted mt-2 fw-bold fs-6"><?= count($staffs) ?></span>
												</h3>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-3 pb-0 mt-n3">
												
													<div class="" id="kt_tab_pane_2_1" role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
														<!--begin::Table-->
														<div class="table-responsive">
															<table class="table table-borderless align-middle">
																<thead>
																	<tr>
																		<th class="p-0 w-50px"></th>
																		<th class="p-0 min-w-150px"></th>
																		<th class="p-0 min-w-120px"></th>
																		<th class="p-0 min-w-70px"></th>
																		<th class="p-0 min-w-70px"></th>
																		<th class="p-0 min-w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																  <?php foreach ($staffs as $staff): ?>
																    <!-- html... -->
																	<tr>
																		<td class="px-0 py-3">
																			<div class="symbol symbol-55px mt-1 me-5">
																				<span class="symbol-label bg-light-primary align-items-end">
																					<img alt="Logo" src="<?= base_url ?>/assets/media/svg/avatars/001-boy.svg" class="mh-40px" />
																				</span>
																			</div>
																		</td>
																		<td class="px-0">
																			<a  class="text-gray-800 fw-bolder text-hover-primary fs-6">
																			  <?= $staff['name'] ?>
																			</a>
																			<span class="text-muted fw-bold d-block mt-1">
																			  <?= $staff['role'] ?>
																			</span>
																		</td>
																		<td></td>
																		<td class="text-end">
																			<span class="text-gray-800 fw-bolder d-block fs-6">$1,200,000</span>
																			<span class="text-muted fw-bold d-block mt-1 fs-7">Paid</span>
																		</td>
																		<td class="text-end">
																			<span class="fw-bolder text-primary">+28%</span>
																		</td>
																		<td class="text-end pe-0">
																			<a href="#" class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																				<!--begin::Svg Icon | path: icons/stockholm/Navigation/Arrow-right.svg-->
																				<span class="svg-icon svg-icon-4">
																					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																							<polygon points="0 0 24 0 24 24 0 24" />
																							<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
																							<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</a>
																		</td>
																	</tr>
																  <?php endforeach; ?>
																</tbody>
															</table>
														</div>
														<!--end::Table-->
													</div>
													<!--end::Tap pane-->
													
											</div>
											<!--end::Body-->
										</div>
										<!--end::Table Widget 2-->
									</div>
								</div>
								<!--end::Row-->
							
							</div>
							<!--end::Container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
					<!--begin::Footer-->
					  <?php include HELPERPATH.'temp/footer.php' ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
				
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		