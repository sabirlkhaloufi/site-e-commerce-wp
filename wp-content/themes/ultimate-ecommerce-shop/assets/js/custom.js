jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay:       500,                            
		animation:   {opacity:'show',height:'show'},  
		speed:       'fast'                        
	});
});

function ultimate_ecommerce_shop_resmenu_open() {
	window.ultimate_ecommerce_shop_mobileMenu=true;
	jQuery(".sidebar").addClass('menubar');
}
function ultimate_ecommerce_shop_resmenu_close() {
	window.ultimate_ecommerce_shop_mobileMenu=false;
	jQuery(".sidebar").removeClass('menubar');
}

jQuery(document).ready(function () {

	window.ultimate_ecommerce_shop_currentfocus=null;
  	ultimate_ecommerce_shop_checkfocusdElement();
	var ultimate_ecommerce_shop_body = document.querySelector('body');
	ultimate_ecommerce_shop_body.addEventListener('keyup', ultimate_ecommerce_shop_check_tab_press);
	var ultimate_ecommerce_shop_gotoHome = false;
	var ultimate_ecommerce_shop_gotoClose = false;
	window.ultimate_ecommerce_shop_mobileMenu=false;
 	function ultimate_ecommerce_shop_checkfocusdElement(){
	 	if(window.ultimate_ecommerce_shop_currentfocus=document.activeElement.className){
		 	window.ultimate_ecommerce_shop_currentfocus=document.activeElement.className;
	 	}
 	}
	function ultimate_ecommerce_shop_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
			if (e.keyCode == 9) {
				if(window.ultimate_ecommerce_shop_mobileMenu){
					if (!e.shiftKey) {
						if(ultimate_ecommerce_shop_gotoHome) {
							jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).focus();
						}
					}
					if (jQuery("a.closebtn.responsive-menu").is(":focus")) {
						ultimate_ecommerce_shop_gotoHome = true;
					} else {
						ultimate_ecommerce_shop_gotoHome = false;
					}

			}else{

					if(window.ultimate_ecommerce_shop_currentfocus=="resToggle"){
						jQuery( "" ).focus();
					}
				}
			}
		}
		if (e.shiftKey && e.keyCode == 9) {
			if(window.innerWidth < 999){
				if(window.ultimate_ecommerce_shop_currentfocus=="header-search"){
					jQuery(".resToggle").focus();
				}else{
					if(window.ultimate_ecommerce_shop_mobileMenu){
						if(ultimate_ecommerce_shop_gotoClose){
							jQuery("a.closebtn.responsive-menu").focus();
						}
						if (jQuery( ".main-menu-navigation ul:first li:first a:first-child" ).is(":focus")) {
							ultimate_ecommerce_shop_gotoClose = true;
						} else {
							ultimate_ecommerce_shop_gotoClose = false;
					}
				
				}else{

					if(window.ultimate_ecommerce_shop_mobileMenu){
					}
				}

				}
			}
		}
	 	ultimate_ecommerce_shop_checkfocusdElement();
	}

});

(function( $ ) {

	jQuery(document).ready(function() {
		jQuery(".drp_dwn_ecommerce").click(function(){
		    jQuery(".cat_box").toggle();
		});
	});

})( jQuery );

(function( $ ) {

	$(window).scroll(function(){
		var sticky = $('.sticky-menubox'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('fixed-menubox');
		else sticky.removeClass('fixed-menubox');
	});

	/**** Hidden search box ***/
	jQuery('document').ready(function($){
		$('.search-box span i').click(function(){
	        $(".serach_outer").slideDown(700);
	    });

	    $('.closepop i').click(function(){
	        $(".serach_outer").slideUp(700);
	    });
	});

})( jQuery );