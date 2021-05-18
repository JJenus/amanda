
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page
			d-flex flex-row flex-column-fluid
			-->
			<div class="page ">
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
										<div class="card card-stretch  mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark fs-3">Products</span>
													<span class="text-muted mt-2 fw-bold fs-6"><?= count($products) ?></span>
												</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-2 pb-0 mt-n3">
												<div class="table-responsive">
												  <table class="table ">
												    <thead>
												      <tr>
												        <th class="w-50px"></th>
												        <th>Name</th>
												        <th>Category</th>
												        <th>Quantity</th>
												        <th>Cost</th>
												        <th class="min-w-100px" >Time</th>
												      </tr>
												    </thead>
												    <tbody>
												<?php foreach ($products as $product): ?>
												      <tr>
												        <td>
												          <img class="w-100" src="<?= $product['image'] ?>"/>
												        </td>
												        <td>
												          <?= $product['name'] ?>
												        </td>
												        <td>
												          <?= $product['category'] ?>
												        </td>
												        <td>
												          <?= $product['quantity'] ?>
												        </td>
												        <td>
												          <?= $product['cost'] ?>
												        </td>
												        <td>
												          <?= $product['time'] ?>
												        </td>
												      </tr>
												<?php endforeach; ?>
												    </tbody>
												  </table>
												</div>
											</div>
										</div>
										<!--end::Table Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-8">
									<div class="col-xl-12">
										<!--begin::Stats Widget 1-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="fw-bolder text-dark fs-3">Product Sales </span>
													<span class="text-muted mt-2 fw-bold fs-6"><?= count($sales) ?> </span>
												</h3>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-12">
												<div class="table-responsive">
												  <table class="table ">
												    <thead>
												      <tr>
												        <th class="w-50px"></th>
												        <th class="fw-bolder ">Name</th>
												        <th class="fw-bolder ">Category</th>
												        <th class="fw-bolder ">Quantity</th>
												        <th class="fw-bolder ">Amount</th>
												      </tr>
												    </thead>
												    <tbody>
												<?php foreach ($sales as $sale): ?>
												      <tr>
												        <td>
												          <img class="w-100" src="<?= $sale['image'] ?>"/>
												        </td>
												        <td>
												          <?= $sale['name'] ?>
												        </td>
												        <td>
												          <?= $sale['category'] ?>
												        </td>
												        <td>
												          <?= $sale['quantity'] ?>
												        </td>
												        <td>
												          <?= $sale['amount'] ?>
												        </td>
												      </tr>
												<?php endforeach; ?>
												    </tbody>
												  </table>
												</div>
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Stats Widget 1-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-8">
									<!-- Customers -->
									<div class="col-xl-12">
										<!--begin::Table Widget 2-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark fs-3">Customers</span>
													<span class="text-muted mt-2 fw-bold fs-6"><?= count($customers) ?></span>
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
																		
																		<th class="p-0 w-50px"></th>
																	</tr>
																</thead>
																<tbody>
																  <?php foreach ($customers as $staff): ?>
																    <!-- html... -->
																	<tr>
																		<td class="px-0 py-3">
																			<div class="symbol symbol-55px mt-1 me-5">
																				<span class="symbol-label bg-light-primary align-items-end">
																					<i class="fas fa-user fs-3x"></i>
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
									<!-- STAFFS -->
									<div class="col-xl-12">
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
																		<th class="p-0 w-50px"></th>
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
		
		