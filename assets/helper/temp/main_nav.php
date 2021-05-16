
<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-center">
								<?php if ($page !== "home" ): ?>
  								<!--begin::Mega Menu Toggler-->
  								<button class="btn btn-icon btn-accent me-2 me-lg-6" id="kt_mega_menu_toggle" data-bs-toggle="modal" data-bs-target="#kt_mega_menu_modal">
  									<!--begin::Svg Icon | path: icons/stockholm/Text/Article.svg-->
  									<span class="svg-icon svg-icon-1">
  										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
  											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
  												<rect x="0" y="0" width="24" height="24" />
  												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
  												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
  											</g>
  										</svg>
  									</span>
  									<!--end::Svg Icon-->
  								</button>
  								<!--end::Mega Menu Toggler-->
								<?php endif; ?>
								
  							<!--begin::Logo-->
								<a href="<?= base_url() ?>/app">
								  <strong><h1 class="m-0 fs-2x  fw-bolder"><?= APP_NAME ?></h1></strong>
									<img class="d-none" alt="Logo" src="<?= base_url() ?>/assets/media/logos/logo-default.svg" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Right-->
							<div class="d-flex align-items-center d-flex-row justify-content-around">
								<!--begin::logout-->
								<?php if (!check()): ?>
  								<!--begin::login-->
  								<div class="col-3">
  								<a href="<?= base_url() ?>/login" class="btn  btn-icon btn-sm btn-active-light-primary ms-1 ms-lg-6" >
  									<i class="fas fs-2x fa-sign-in-alt"></i>
  									<span class="d-none d-md-inline-block"> Login</span>
  								</a>
  								</div>
  								<!--end::login -->
								<?php else: ?>
								  <!-- html... -->
								  <div class="col-3">
  								<a href="<?= base_url() ?>/logout" class="btn btn-icon btn-sm btn-active-light-danger ms-3 ms-lg-6" >
  									<i class="fas fs-2x fa-power-off mr-4"></i>
  									<span class="d-md-inline-block d-none pl-4"> Logout</span>
  								</a>
  								</div>
								<!--end::logout-->
								<?php endif; ?>
								
							<?php if ($page === "home" ): ?>
							  <!-- code... -->
								<!--begin::Aside Toggler-->
								<!--end::Aside Toggler-->
								<!--begin::Sidebar Toggler-->
								<div class="col-3">
								<button class="btn  btn-icon btn-sm btn-active-light-primary d-lg-none ms-4 ms-lg-6" id="kt_sidebar_toggler">
									<!--begin::Svg Icon | path: icons/stockholm/Text/Menu.svg-->
								  <span class="fas fa-shopping-cart fs-2"></span>
								  <!--begin::Dropdown-->
								  <sub class="">
									<span style="font-size: 1.3em;" class="badge mt-3 fw-bolder badge-circle badge-light-danger">5</span>
								  </sub>
									<!--begin::Menu-->
									<!--end::Svg Icon-->
								</button>
								</div>
								<!--end::Sidebar Toggler-->
							<?php endif; ?>
							</div>
							<!--end::Right-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->