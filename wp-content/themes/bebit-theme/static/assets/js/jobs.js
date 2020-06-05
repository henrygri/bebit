var url = window.location.href;
if (url.indexOf("#") >= 0) {
	var label = url.split('/').pop();
	var accordion = jQuery(label).closest('.card').find('.collapse');
	jQuery(accordion).collapse('show');
	setTimeout(function(){
			jQuery('html, body').animate({ scrollTop: jQuery(label).offset().top - 100}, 1000);
	},500);
	var card = jQuery(label).closest('.card');
	var position = jQuery(label).find('.position').text();
	if(!jQuery(card).hasClass('freelance')) {
		var list = jQuery(card).find('.select-candidatura').children('ul');
		jQuery(list).html('<li>'+position +'</li>');
		jQuery('form .select-candidatura ul li').on('click',function(){
			var form = jQuery(this).closest('form');
			var inputCandidatura = jQuery(form).find('input[name="candidatura"]');
			var selectCandidatura = jQuery(form).find('.select-candidatura');
			jQuery(inputCandidatura).val(jQuery(this).text());
			jQuery(selectCandidatura).hide();

		});
	}
}


jQuery('input[type="file"]').on('change',function(e){
		var fn = jQuery(this).val();
		var filename = fn.match(/[^\\/]*$/)[0];
		jQuery('.filename').text(filename);
});
