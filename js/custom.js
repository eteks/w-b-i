$(document).ready(function() {

	/* For Auto and Manual Options */
	
	$('.ezi_touch_option').change(function(){
		// alert('hi');
		var val= $(this).val();
		// alert(val);
		if(val=='auto'){
			$('.ezi_touch_all').find('.auto td').show();
			$('.ezi_touch_all').find('.manual td').hide();
			evenrowsColor();
		}
		else if(val=='manual'){
			$('.ezi_touch_all').find('.manual td').show();
			$('.ezi_touch_all').find('.auto td').hide();
			oddrowsColor();
		}
		else{
			$('.ezi_touch_all td').show();
			oddrowsColor();
			evenrowsColor();
		}
	});

	
	$('.ezi_mgmnt_option').change(function(){
		// alert('hi');
		var val= $(this).val();
		// alert(val);
		if(val=='auto'){
			$('.ezi_mgmnt_all').find('.auto td').show();
			$('.ezi_mgmnt_all').find('.manual td').hide();
		}
		else if(val=='manual'){
			$('.ezi_mgmnt_all').find('.manual td').show();
			$('.ezi_mgmnt_all').find('.auto td').hide();
		}
		else{
			$('.ezi_mgmnt_all td').show();
		}
	});

	function oddrowsColor(){
 		// $("tr:even", table).removeClass("odd");
 		 // alert('hi');
		 $('tr:odd').css('background-color','#fff !important');
		 $('tr:even').css('background-color', '#d9edf7 !important');

		 

 	}	
 	function evenrowsColor(){
 		// alert('hi');
 		$('tr:even').css('background-color', '#d9edf7 !important');
 		$('tr:odd').css('background-color','#fff !important');
 	}


}); /* End of Document */

// window.jQuery(document).ready(function(){
   //     window.jQuery("tr:odd" ).css("background-color","#fff !important" );
   //     window.jQuery("tr:even").css("background-color","#d9edf7 !important");
    // });