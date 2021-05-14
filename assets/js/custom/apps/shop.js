"use strict";

var KTAppShop = function () {
    // Private variables
    var _sidebar;
    var _addFormElement;
    var _addFormButtonElement;
    var _filterFormElement;
    var _filterFormButtonElement;

    var _showProductAddForm = function () {
        KTUtil.removeClass(_addFormElement, 'd-none'); // Show Form
        KTUtil.addClass(_filterFormElement, 'd-none');
        _sidebar.scrollTop = 0; // Scroll Top

        KTUtil.css(_addFormElement, 'animationDuration', '0.3s');
        KTUtil.animateClass(_addFormElement, 'animate__animated animate__slideInRight');
    }

    var _showProductsFilterForm = function () {
        KTUtil.removeClass(_filterFormElement, 'd-none'); // Show Form
        KTUtil.addClass(_addFormElement, 'd-none'); // Hide Form
        _sidebar.scrollTop = 0; // Scroll Top

        KTUtil.css(_filterFormElement, 'animationDuration', '0.3s');
        KTUtil.animateClass(_filterFormElement, 'animate__animated animate__slideInLeft');
    }
    
    
    var _products = [];
    var _cart = [
      {
        id: 1,
        image: '../assets/media/svg/avatars/035-boy-15.svg', 
        type: 'food', 
        quantity: 8,
        qty: 1,
        name: "Beans",
        cost: 300
      }, 
      {
        id: 2,
        image: '../assets/media/svg/avatars/035-boy-15.svg', 
        type: 'item', 
        quantity: 3,
        qty: 1,
        name: "Champaign",
        cost: 210
      }, 
      {
        id: 3,
        image: '../assets/media/svg/avatars/035-boy-15.svg', 
        type: 'snack', 
        quantity: 5,
        qty: 1,
        name: "Oreo",
        cost: 150
      } 
    ];
    
    var _loadProducts = function (array) {
      array.forEach(product => {    
        document.getElementById(product.type).innerHTML = `
        <div>
          <img src="${video.img}"/>
          <h4>${video.title}</h4>
          <p>${video.description}</p>
        </div>
      `;
      });
    }
    
    var _updateCart = function (array) {
      $('#cart').empty();
      console.log("_updateCart")
      array.forEach(product => {    
        document.getElementById('cart').innerHTML += `
        <div class="col-12 row  mb-4">
					<div class="d-flex col-6 align-items-center">
						<!--begin::Symbol-->
						<div class="symbol symbol-50px me-4">
							<span class="symbol-label bg-light-warning">
								<img src="${product.image}" class="h-75 align-self-end" alt="" />
							</span>
						</div>
						<!--end::Symbol-->
						<div class="d-flex flex-column">
							<a class="text-gray-600 text-hover-primary fw-bolder fs-6 mb-1">
							  ${product.name}
							</a>
							<a class="text-gray-600 text-sm text-hover-success fw-bolder fs-6 mb-1">
							   $${product.cost}
							</a>
							<button type="button" data-id="${product.id}" class="btn remove_from_cart text-danger btn-active-light-danger fw-bolder px-1 p-0">
							  remove
							</button> 
						</div>
					</div>
					<div class="d-flex col-6  flex-column align-items-end text-center">
						<span class="text-muted  fw-bold fs-7">Qty</span>
						<!--begin::Dialer-->
						<div align="right" style="max-width: 80%;" class="d-inline-block">
              <!--begin::Dialer-->
              <div class="input-group">
              
                  <!--begin::Decrease control-->
                  <button style="max-width: 35%;" data-id="${product.id}" id="decrease_qty_${product.id}" class="btn minus_quantity btn-icon btn-sm btn-outline btn-outline-secondary" type="button" data-kt-dialer-control="decrease">
                      <i class="bi bi-dash fs-1"></i>
                  </button>
                  <!--end::Decrease control-->
              
                  <!--begin::Input control-->
                  <input style="max-width: 30%;" data-qty="${product.quantity}" id="input_qty_${product.id}" type="text" class="form-control form-control-sm text-center" readonly placeholder="Quantity" value="${product.qty}" data-kt-dialer-control="input"/>
                  <!--end::Input control-->
              
                  <!--begin::Increase control-->
                  <button style="max-width: 35%;" data-id="${product.id}"  id="increase_qty_${product.id}"  class="btn add_quantity btn-sm add_quantity btn-icon btn-outline btn-outline-secondary" type="button" data-kt-dialer-control="increase">
                      <i class="bi bi-plus fs-1"></i>
                  </button>
                  <!--end::Increase control-->
              </div>
              <!--end::Dialer--> 
						</div>
            
					</div>
				</div> 
      `;
      
      });
    }
    
    var _alter_qty = function(id, n){
      for (var i = 0; i < _cart.length; i++) {
          if (_cart[i].id === id) {
            _cart[i].qty = n;
            break;
          }
      }
    }

    // Private funcions
    var _init = function () {
      
      $('body').on('click', '.add_quantity', function(){
        var id = $(this).data('id');
        var n = Number($("#input_qty_"+id).val()) 
        if (n < Number($("#input_qty_"+id).data('qty'))) {
          n +=1 ;
          $("#input_qty_"+id).val((n))
          _alter_qty(id, n)
        }
      })
      
      $('body').on('click', '.minus_quantity', function(){
        var id = $(this).data('id');
        var n = Number($("#input_qty_"+id).val()) 
        if (n > 1 ) {
          n -= 1;
          $("#input_qty_"+id).val((n))
          _alter_qty(id, n)
        }
      })
      $('body').on('click', '.remove_from_cart', function(){
        var id = Number($(this).data('id'));
        
        for (var i = 0; i < _cart.length; i++) {
          if (_cart[i].id === id) {
            console.log(i)
           _cart.splice(i, 1);
            _updateCart(_cart);
            break;
          }
        }
      })
      
      $("#clear_cart").click(function(){
        _cart = [];
        _updateCart(_cart)
      })
      
        /*/ Handle Buttons
        _addFormButtonElement.addEventListener('click', function(e) {
            e.preventDefault();

            _showProductAddForm();
        });

        _filterFormButtonElement.addEventListener('click', function(e) {
            e.preventDefault();

            _showProductsFilterForm();
        });*/
    }

    // Pricing Slider
    var _initPriceSlider = function () {
        // init slider
        var slider = document.querySelector('#kt_price_slider');

        if (typeof slider === 'undefined') {
            return;
        }

        if (!slider) {
            return;
        }

        noUiSlider.create(slider, {
            start: [20, 60],
            connect: true,
            range: {
                'min': 0,
                'max': 100
            }
        });
    }

    // Public methods
    return {
        init: function () {
            _sidebar = document.querySelector('#kt_sidebar');
            _addFormElement = document.querySelector('#kt_sidebar_shop_new_form');
            _addFormButtonElement = document.querySelector('#kt_sidebar_shop_new_form_btn');

            _filterFormElement = document.querySelector('#kt_sidebar_shop_filter_form');
            _filterFormButtonElement = document.querySelector('#kt_sidebar_shop_filter_form_btn');

            _initPriceSlider();
            _updateCart(_cart);

            _init();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    KTAppShop.init();
});
