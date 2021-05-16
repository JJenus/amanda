
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
								<div class="row g-0 g-xl-5 justify-content-center g-xxl-8">
									<div class="col-md-8">
									  <div class="card card-stretch mb-5 mb-xxl-8">
									    <div class="card-body">
									      <h4 class="card-title fs-1 mb-8">
									        Upload New Product
									      </h4>
									      <form class="needs-validation" id="product-form" action="<?= base_url ?>/dashboard/server-functions/" novalidate>
									        <input name="upload_product" class="d-none" value="true">
									        <div class="fv-row mb-6">
									          <label class="form-label fs-6 fw-bolder">Select image</label>
									          <div id="product-img-div" class="min-h-150px min-h-md-200px row border rounded align-items-center justify-content-center " align="center">
									            <div class="col-12 col-md-6  z-index-2 position-absolute">
									              <button type="button" class="btn file-select btn-active-light-primary ">
									                <i class="fas fa-plus fs-2x"></i>
									              </button>
									            </div>
									            <img id="product-image" class="w-100 d-none" src="<?= base_url ?>/assets/img/plus.png">
									          </div>
									          <input id="product-file" onchange="readURL(this)" type="file" name="img" class="d-none fs-3x">
									        </div>
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="role-select">Category</label>
									          <select name="category" required class="form-select" id="product-category">
									            <option  disabled>Select role</option>
									            <?php foreach ($categories as $cat): ?>
									              <option class="text-capitalize" value="<?= $cat ?>"><?= $cat ?></option>
									            <?php endforeach; ?>
									          </select>
									        </div>
									        
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="fullname">Name</label>
									          <input required class="form-control" id="name" name="name" type="text" placeholder="" >
									          <div class="invalid-feedback">
									            name is required. 
									          </div>
									        </div>
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="product-quantity">Available Quantity</label>
									          <input value="" id="email-add-staff" required class="form-control" name="quantity" type="number" placeholder="numbers only e.g. 23" >
									          <div class="invalid-feedback" id="product-quantity-feedback"></div>
									        </div>
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="price">Price per Quantity</label>
									          <input name="cost"  class="form-control"  type="text" placeholder="e.g 200" required>
									        </div>
									        <button id="btn-product" type="submit" class="btn btn-primary">
									          <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
									        </button>
									      </form>
									    </div>
									  </div>
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
		
		                                                                                                                                                       