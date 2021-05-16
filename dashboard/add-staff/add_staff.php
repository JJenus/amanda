
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
									        Register New Staff
									      </h4>
									      <form class="needs-validation" id="form-add-staff" action="<?= base_url ?>/auth" novalidate>
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="role-select">Role</label>
									          <select name="role" required class="form-select" id="role-select">
									            <option  disabled>Select role</option>
									            <?php foreach ($roles as $role): ?>
									              <option class="text-capitalize" value="<?= $role ?>"><?= $role ?></option>
									            <?php endforeach; ?>
									          </select>
									        </div>
									        
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="fullname">name</label>
									          <input value="" required class="form-control" id="fullname" name="fullname" type="username" placeholder="Full name" >
									          <div class="invalid-feedback">
									            Full name is required 
									          </div>
									        </div>
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="email-add-staff">Email</label>
									          <input value="" id="email-add-staff" required class="form-control" name="email" type="email" placeholder="Email" >
									          <div class="invalid-feedback" id="email-add-staff-feedback">
									            
									          </div>
									        </div>
									        <div class="fv-row mb-5">
									          <label class="form-label fs-6 fw-bolder" for="password">Password</label>
									          <input value="" name="password"  class="form-control"  type="text" placeholder="* * *" required>
									        </div>
									        <button id="btn-add-staff" type="submit" class="btn btn-primary">
									          <span id="spinner-add-staff" class="spinner-grow d-none spinner-grow-sm"></span>
									          Submit
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
		
		                                                                                                                                                       