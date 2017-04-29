$(document).ready(function() {

	/* For Auto and Manual Options */
	
	$('.ezi_touch_option').change(function(){
		// alert('hi');
		var val= $(this).val();
		// alert(val);
		if(val=='auto'){
			$('.ezi_touch_all').find('.auto td').show();
			$('.ezi_touch_all').find('.manual td').hide();
			rowsauto();
		}
		else if(val=='manual'){
			$('.ezi_touch_all').find('.manual td').show();
			$('.ezi_touch_all').find('.auto td').hide();
			rowsColor();
		}
		else{
			$('.ezi_touch_all td').show();
			rowsColor();
			
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

	function rowsColor(){
 		alert('hi');
		 // $('tr:odd').css('background-color','#fff !important');
		 // $('tr:even').css('background-color', '#d9edf7 !important');
		$(".ezi_touch_all").find("tr:visible:odd").addClass("even").removeClass("odd");
		$(".ezi_touch_all").find("tr:visible:even").addClass("odd").removeClass("even");
    }	
 	

}); /* End of Document */


