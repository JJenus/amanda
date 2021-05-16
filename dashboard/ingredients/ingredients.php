
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
									    
									    <div id="create-ing" class="card-body">
									      <h4 class="card-title fs-1 mb-8">
									        Add New Ingredients
									      </h4>
									      <form class="needs-validation d-md-flex justify-content-between align-items-end " id="form-ingredients" action="<?= base_url ?>/auth" novalidate>
									        <input class="d-none" type="text" name="upload_ingredient" value="true">
									        <div class="d-flex justify-content-between col-md-10" >
  									        <div class="fv-row mb-5 col-7 col-md-8">
  									          <label class="form-label fs-6 fw-bolder" for="rawmat-name">Ingredient</label>
  									          <input id="rawmat-name" required class="form-control" name="ingredient" type="text" placeholder="" >
  									          <div class="invalid-feedback" id="rawmat-name-feedback"></div>
  									        </div>
  									        <div class="fv-row mb-5 col-4 col-md-3">
  									          <label class="form-label fs-6 fw-bolder" for="rawmat-qty">Quantity</label>
  									          <input name="rawmat-qty"  class="form-control ml-3"  type="text" placeholder="e.g 50kg" required>
  									        </div>
									        </div>
									        
									        <div align="right" class="mb-5" >
									          <button id="btn-ingredients" type="submit" class="btn btn-primary">
  									          <span class="indicator-label">
                                Submit
                              </span>
                              <span class="indicator-progress">
                                  Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                              </span>
  									        </button> 
									        </div>
									      </form>
									    </div>
									    
									    <div id="edit-ing" class="card-body d-none">
									      <h4 class="card-title d-flex justify-content-between align-items-end fs-1 mb-8">
									        <span>
									          Edit Ingredient  
									        </span>
									        <button onclick="toggleEdit()" class="btn btn-light-primary">
									          <i class="fas fa-arrow-left"></i>
									           back
									        </button>
									      </h4>
									      <form class="needs-validation d-md-flex justify-content-between align-items-end " id="edit-ingredient" action="<?= base_url ?>/auth" novalidate>
									        <input class="d-none" type="text" name="update_ingredient" value="true">
									        <input id="edit-ing-id" class="d-none" type="text" name="id" >
									        <div class="d-flex justify-content-between col-md-10" >
  									        <div class="fv-row mb-5 col-7 col-md-8">
  									          <label class="form-label fs-6 fw-bolder" for="edit-name">Ingredient</label>
  									          <input id="edit-ing-name" required class="form-control" name="ingredient" type="text" placeholder="" >
  									          <div class="invalid-feedback" id="edit-name-feedback"></div>
  									        </div>
  									        <div class="fv-row mb-5 col-4 col-md-3">
  									          <label class="form-label fs-6 fw-bolder" for="edit-qty">Quantity</label>
  									          <input id="edit-ing-qty" name="qty"  class="form-control ml-3"  type="text" placeholder="e.g 50kg" required>
  									        </div>
									        </div>
									        
									        <div align="right" class="mb-5" >
									          <button id="btn-edit-ingredient" type="submit" class="btn btn-primary">
  									          <span class="indicator-label">
                                Submit
                              </span>
                              <span class="indicator-progress">
                                  Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                              </span>
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
									        <tbody id="tbody">
									          <?php foreach ($ingredients as $val): ?>

    								          <tr>
    								            <td class="" id="ing_<?= $val['id'] ?>"><?= $val['id'] ?></td>
    								            <td class="" id="ing_name_<?= $val['id'] ?>"><?= $val['name'] ?></td>
    								            <td class="" id="ing_qty_<?= $val['id'] ?>"><?= $val['quantity'] ?> </td>
    								            <td class="">
    								              <button onclick="editIngredient('<?= $val['id'] ?>')" class="btn btn-link btn-sm p-1 btn-color-info btn-active-color-primary me-5 mb-2">
    								                <i class="fas fa-pen"></i>
    								              </button>
    								            </td>
    								          </tr>
									          <?php endforeach; ?>
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
		
		                                                                                                                                                       