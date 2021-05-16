<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/stockholm/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		
		
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= base_url() ?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?= base_url() ?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<?php if ($page === "home"): ?>
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= base_url() ?>/assets/js/custom/apps/shop.js"></script>
		<!--end::Page Custom Javascript-->
		<?php endif; ?>
		
		<?php if ($page === "dashboard"): ?>
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		
		<?php endif; ?>
		
		<?php if ($page === "auth"): ?>
		  <!--begin::Page Custom Javascript(used by this page)-->
		  <script src="../assets/js/custom/general/login.js"></script>
		  <!--end::Page Custom Javascript-->
		<?php endif; ?>
		
		<script>
		  (function () {
        'use strict'
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
      
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
      
              form.classList.add('was-validated')
            }, false)
          })
      })() 
		</script>  
		
		<?php if ($page === "new_staff"): ?>
		  <!-- code... -->
		  <script>
		    $(function (){
		      $("#form-add-staff").submit(function (e){
		        e.preventDefault();
		        
		        if($(this)[0].checkValidity()){
  		        $("#form-add-staff :input").prop("disabled", "disabled");
  		        $("#spinner-add-staff").toggleClass("d-none")
  		        console.log("submitting... ")
  		        var fmData = [] ;
  		        var key;
  		        var val;
  		        $("#form-add-staff :input:not(:button)").each(function (){
  		          key = $(this).attr('name') ;
  		          val = $(this).val()
  		          fmData.push({
  		            name: key, 
  		            value: val
  		          })
  		        })
  		        
  		        console.log(fmData)   
  		        $.ajax({
  		          url: $("#form-add-staff").attr('action'), 
  		          method: "POST",
  		          data: fmData,
  		          success: (res) => {
  		            console.log(res)
  		             
  		            $("#form-add-staff :input").prop("disabled", false);
  		            $("#spinner-add-staff").toggleClass("d-none")
  		            
  		            if(res.status){
    		            swal.fire({
  		                text: res.report,
  		                icon: "success",
  		                buttonsStyling: false,
  		                confirmButtonText: "Ok",
                      customClass: {
            						confirmButton: "btn fw-bold btn-light-primary"
            					}
    		            }).then(function() {
            						KTUtil.scrollTop();
            				});
            				$(this)[0].reset();
            				$("#form-add-staff").removeClass("was-validated")
  		            }
  		            else if (res.report == "invalidUser"){
  		              $("#form-add-staff").removeClass("was-validated")
  		              console.log('invalid')
  		              $("#email-add-staff-feedback").text('User with that email already exists')
  		              $("#email-add-staff").addClass('is-invalid');
  		            } 
  		          }, 
  		          error: (err)=>{
  		            console.log(err)
  		            $("#form-add-staff :input").prop("disabled", false);
  		            $("#spinner-add-staff").toggleClass("d-none")
  		          }, 
  		        })
		        } 
		      })
		    })  
		  </script>
		<?php endif; ?>
		
		<?php if ($page === "new_product"): ?>
		  <script >
		    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
    
                reader.onload = function (e) {
                  var str = "#product-image"
                  $(str).attr('src', e.target.result)
                  $(str).removeClass('d-none')
                  $('#product-img-div').removeClass("border-danger")
                };
    
                reader.readAsDataURL(input.files[0]);
                //$('#file'+imgIndex).val(input.files[0])
            }
        }
        
        $(function (){
          $('.file-select').click(function (){
            $('#product-file').click();
          })
          
          $("#product-form").submit(function (e){
            e.preventDefault()
            if (!$("#product-form")[0].checkValidity()) {
              if(!$('#product-file').val()){
                $('#product-img-div').addClass("border-danger")
              } 
              return ;
            }
            
            $("#btn-product").attr("data-kt-indicator", "on");
            var form = new FormData ($("#product-form")[0])
          
            $.ajax({
              url: "<?= base_url ?>/dashboard/server-functions/", 
              processData: false, 
              contentType: false, 
              method: "POST",
              data: form, 
              success: function(res){
                console.log(res);
              },
              error: (err)=>{
                console.log(err)
              } 
            }).always(()=>{
              $("#btn-product").attr("data-kt-indicator", null);
            })
          })
        })
		  </script>
		<?php endif; ?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
	
</html>