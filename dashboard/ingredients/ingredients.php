
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
									<div class="col-lg-8">
									  <div class="card card-stretch mb-5 mb-xxl-8">
									    <div class="card-body">
									      <h4 class="card-title fs-1 mb-8">
									        Add New Ingredients
									      </h4>
									      <form class="needs-validation d-md-flex justify-content-between align-items-end " id="form-add-staff" action="<?= base_url ?>/auth" novalidate>
									        <div class="d-flex justify-content-between col-md-10" >
  									        <div class="fv-row mb-5 col-7 col-md-8">
  									          <label class="form-label fs-6 fw-bolder" for="rawmat-name">Ingredient</label>
  									          <input id="rawmat-name" required class="form-control" name="ingredient" type="text" placeholder="Email" >
  									          <div class="invalid-feedback" id="rawmat-name-feedback"></div>
  									        </div>
  									        <div class="fv-row mb-5 col-4 col-md-3">
  									          <label class="form-label fs-6 fw-bolder" for="password">Quantity</label>
  									          <input name="rawmat-amount"  class="form-control ml-3"  type="text" placeholder="e.g 50kg" required>
  									        </div>
									        </div>
									        
									        <div align="right" class="mb-5" >
									          <button id="btn-add-staff" type="submit" class="btn btn-primary">
  									          <span id="spinner-add-staff" class="spinner-grow d-none spinner-grow-sm"></span>
  									          Submit
  									        </button> 
									        </div>
									      </form>
									    </div>
									  </div>
									</div>
								</div>
								<!--end::Row-->
								
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 justify-content-center g-xxl-8">
									<div class="col-lg-8">
									  <div class="card card-stretch mb-5 mb-xxl-8">
									    <div class="card-body">
									      <h4 class="card-title fs-1 mb-8">
									        Raw Ingredients
									      </h4>
									      
									      <table class="table w-100 table-responsive">
									        <thead>
									          <tr>
									            <th>#</th>
									            <th>Ingredient</th>
									            <th>Quantity</th>
									            <th></th>
									          </tr>
									        </thead>
									        <tbody>
									          <tr>
									            <td class="">1</td>
									            <td class="">Salt</td>
									            <td class="">5g</td>
									            <td class="">
									              <a href="#" class="btn btn-link btn-sm p-1 btn-color-info btn-active-color-primary me-5 mb-2">
									                <i class="fas fa-pen"></i>
									              </a>
									            </td>
									          </tr>
									        </tbody>
									      </table>
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
		
		                                                                                                                                                       