$(document).ready(function() {

	/* For Auto and Manual Options */
	
	$('.ezi_touch_option').change(function(){
		// alert('hi');
		var val= $(this).val();
		// alert(val);
		if(val=='auto'){
			$('.ezi_touch_all').find('.auto td').show();
			$('.ezi_touch_all').find('.manual td').hide();
		}
		else if(val=='manual'){
			$('.ezi_touch_all').find('.manual td').show();
			$('.ezi_touch_all').find('.auto td').hide();
		}
		else{
			$('.ezi_touch_all td').show();
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


}); /* End of Document */