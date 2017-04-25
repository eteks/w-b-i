$(document).ready(function() {

	$('.ezi_touch_option').change(function(){
		// alert('hi');
		var val= $(this).val();
		// alert(val);
		if(val=='auto'){
			$('.auto td').show();
			$('.manual td').hide();
		}
		else if(val=='manual'){
			$('.manual td').show();
			$('.auto td').hide();
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
			$('.auto td').show();
			$('.manual td').hide();
		}
		else if(val=='manual'){
			$('.manual td').show();
			$('.auto td').hide();
		}
		else{
			$('.ezi_mgmnt_all td').show();
		}
	});

});