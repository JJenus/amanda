

<div class="modal bg-white fade" tabindex="-1" id="buy_modal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">

            <div class="modal-body">
                <div class="row h-100 align-items-center justify-content-center">
                  <div class="col-md-5 align-items-center p-5 p-md-8 rounded shadow-sm">
                    <div class="d-flex justify-content-between mb-10">
                      <h5 class="modal-title fw-bolder fs-2x">Make Payment</h5>
                      <!--begin::Close-->
                      <div id="close_payment_form" class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                          <span class="fas fa-times fs-2x"></span>
                      </div> 
                    </div>
                    <form novalidate id="payment_form" class="needs-validation " action="<?= base_url ?>/payment/" method="post" accept-charset="utf-8">
                      <div class="fv-row mb-5">
                        <label class="form-label fw-bolder" for="pay_amount">Amount</label>
                        <input class="form-control form-control-lg text-center" type="text" name="" disabled required id="pay_amount" />
                      </div>
                      
                      <div class="mb-5 fv-row ">
                        <label class="form-label fw-bolder" for="card_number">Card number</label>
                        <input required class="form-control form-control-lg " type="text" name="" id="card_number" />
                      </div>
                      
                      <div class="row mb-5 justify-content-between">
                        <div class="col-6 fv-row">
                          <label class="form-label fw-bolder" for="card_exp">Exp</label>
                          <input required class="form-control form-control-lg " type="text" name="" id="card_exp" />
                        </div>
                        <div class="col-6">
                          <label class="form-label fw-bolder" for="card_cvv">CVV</label>
                          <input required class="form-control form-control-lg " type="text" name="" id="card_cvv" />
                        </div>
                      </div>
                      <div class="w-100 mb-8">
                        <button id="pay_btn" type="submit" class="btn btn-primary w-100 ">
                          <span class="indicator-label">
                            Pay
                          </span>
                          <span class="indicator-progress">
                              Processing... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                          </span>
                        </button> 
                      </div>
                    </form>
                    <?php if (!check()): ?>
                      <div>
                        Not logged in? <a target="_blank" href="<?= base_url ?>/login">Login here</a>
                      </div>
                    <?php endif; ?>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
						<!--begin::toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<div class="container d-flex flex-stack flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-1">
									<!--begin::Title-->
									<h3 class="text-dark fw-bolder my-1">Our products</h3>
									<!--end::Title-->
								</div>
								<!--end::Info-->
								<!--begin::Nav-->
								<div class="d-flex d-none align-items-center flex-nowrap text-nowrap overflow-auto py-1">
									<a href="./category/food" class="btn btn-active-accent fw-bolder">Food</a>
									<a href="./category/snacks" class="btn btn-active-accent fw-bolder ms-3">Snacks</a>
									<a href="./category/items" class="btn btn-active-accent active fw-bolder ms-3">Items</a>
								</div>
								<!--end::Nav-->
							</div>
						</div>
						<!--end::toolbar-->
						<!--begin::Content-->
						<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card">
									<div class="card-body">
										<!--begin::Engage Widget 1-->
										<div class="card mb-12">
											<div class="card-body card-rounded p-0 d-flex bg-light-primary">
												<div class="d-flex flex-column flex-lg-row-auto p-10 p-md-20">
													<h1 class="fw-bolder text-dark">Search as Your Taste Leads</h1>
													<div class="fs-3 mb-8">Available with amazing prices</div>
													<!--begin::Form-->
													<form class="d-flex flex-center py-2 px-6 bg-white rounded">
														<!--begin::Svg Icon | path: icons/stockholm/General/Search.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-primary">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
														<input type="text" class="form-control border-0 fw-bold ps-2 w-xxl-350px" placeholder="Search Goods" />
													</form>
													<!--end::Form-->
												</div>
												<div class="d-none d-md-flex flex-row-fluid mw-400px ml-auto bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover" style="background-image: url(<?= base_url() ?>/assets/media/svg/illustrations/progress.svg);"></div>
											</div>
										</div>
										<!--end::Engage Widget 1-->
										
										<!--begin::Section-->
										<div class="mb-10">
											<!--begin::Heading-->
											<div class="d-flex justify-content-between align-items-center mb-7">
												<h2 class="fw-bolder text-dark fs-2 mb-0">Pastries</h2>
												<a href="#" class="btn d-none btn-light-primary btn-sm fw-bolder">View All</a>
											</div>
											<!--end::Heading-->
											<!--begin::Products-->
											<div class="row g-5 g-xxl-8">
												<?php foreach ($pastries as $pastry): ?>
											  
  												<!--begin::Product-->
  												<div class="col-md-4 col-xxl-4 col-lg-6">
  													<!--begin::Card-->
  													<div class="card shadow-none">
  														<div class="card-body p-0">
  															<!--begin::Image-->
  															<div class="overlay rounded overflow-hidden">
  																<div class="overlay-wrapper rounded bg-light text-center">
  																	<img src="<?= $pastry['image'] ?>" alt="pastry" class="mw-100 w-200px" />
  																</div>
  																<div class="overlay-layer">
  																	<a  class="btn d-none fw-bolder btn-sm btn-primary me-2">Quick View</a>
  																	<a data-product="<?= htmlspecialchars(json_encode($pastry), ENT_QUOTES, 'UTF-8') ?>" class="add_to_cart btn fw-bolder btn-sm btn-light-primary">Buy</a>
  																</div>
  															</div>
  															<!--end::Image-->
  															<!--begin::Details-->
  															<div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
  																<a href="product.html" class="fs-4 fw-bolder text-gray-800 text-hover-primary mb-1">
  																  <?= $pastry['name'] ?>
  																</a>
  																<span class="fs-6"><?= CURRENCY.$pastry['cost'] ?></span>
  															</div>
  															<!--end::Details-->
  														</div>
  													</div>
  													<!--end::Card-->
  												</div>
  												<!--end::Product-->
												
											  <?php endforeach; ?> 
											</div>
											<!--end::Products-->
										</div>
										<!--end::Section-->
										
										<!--begin::Section-->
										<div class="mb-10">
											<!--begin::Heading-->
											<div class="d-flex justify-content-between align-items-center mb-7">
												<h2 class="fw-bolder text-dark fs-2 mb-0">Drinks</h2>
												<a href="#" class="btn d-none btn-light-primary btn-sm fw-bolder">View All</a>
											</div>
											<!--end::Heading-->
											<!--begin::Products-->
											<div class="row g-5 g-xxl-8">
											  <?php foreach ($drinks as $drink): ?>
											  
  												<!--begin::Product-->
  												<div class="col-md-4 col-xxl-4 col-lg-6">
  													<!--begin::Card-->
  													<div class="card shadow-none">
  														<div class="card-body p-0">
  															<!--begin::Image-->
  															<div class="overlay rounded overflow-hidden">
  																<div class="overlay-wrapper rounded bg-light text-center">
  																	<img src="<?= $drink['image'] ?>" alt="drink" class="mw-100 w-200px" />
  																</div>
  																<div class="overlay-layer">
  																	<a  class="btn d-none fw-bolder btn-sm btn-primary me-2">Quick View</a>
  																	<a data-product="<?= htmlspecialchars(json_encode($drink), ENT_QUOTES, 'UTF-8') ?>" class="add_to_cart btn fw-bolder btn-sm btn-light-primary">Buy</a>
  																</div>
  															</div>
  															<!--end::Image-->
  															<!--begin::Details-->
  															<div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
  																<a href="product.html" class="fs-4 fw-bolder text-gray-800 text-hover-primary mb-1">
  																  <?= $drink['name'] ?>
  																</a>
  																<span class="fs-6"><?= CURRENCY.$drink['cost'] ?></span>
  															</div>
  															<!--end::Details-->
  														</div>
  													</div>
  													<!--end::Card-->
  												</div>
  												<!--end::Product-->
												
											  <?php endforeach; ?>
											</div>
											<!--end::Products-->
										</div>
										<!--end::Section-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Main-->
					<?php include HELPERPATH.'temp/footer.php' ?>
				</div>
				<!--end::Wrapper-->
				<!--begin::Sidebar-->
				<div id="kt_sidebar" class="sidebar bg-white" data-kt-drawer="true" data-kt-drawer-name="sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '350px': '300px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggler">
					<!--begin::Sidebar Content-->
					<div class="d-flex flex-column sidebar-body">
						<div id="kt_sidebar_content" class="py-10 px-7 mb-12 px-lg-12">
							<div class="hover-scroll-y me-lg-n7 pe-lg-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-offset="0px" data-kt-scroll-wrappers="#kt_sidebar_content">
								
								<!--begin::Products Filter Form-->
								<div id="kt_sidebar_shop_filter_form">
									<!--begin::Heading-->
									<div class="d-flex flex-column text-center bg-light rounded py-8 px-5 mb-10">
										<h3 class="fs-2 fw-bolder mb-2">Cart</h3>
										<span class="text-muted fs-6 fw-bolder">Modify cart and click buy to proceed. </span>
									</div>
									<!--end::Heading-->
									<!--begin::Form-->
									<form id="cart" class="form row justify-content-between align-items-end" method="post">
										<!--begin:User-->
													
										<!--end:User-->
									</form>
									<!--end::Form-->
								</div>
								<!--end::Products Filter Form-->
							</div>
						  
						  <div class="d-flex justify-content-between p-3 border-top border-bottom mb-5">
								<span class="fw-bolder pe-8 me-2">Total</span>
								<span class="me-2 fw-bolder pe-8" id="cart-total-cost">0.00</span>
							</div>
						  
						  <div class="d-flex justify-content-between pb-5">
								<button id="clear_cart" class="btn btn-light-danger fw-bolder px-8">Clear Cart</button>
								<button data-bs-toggle="modal" data-bs-target="#buy_modal" type="reset" class="btn btn-primary fw-bolder me-2 px-8">
								  Buy
								 </button>
							</div>
						</div>
					</div>
					<!--end::Sidebar Content-->
				</div>
				<!--end::Sidebar-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->