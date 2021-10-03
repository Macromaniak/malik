jQuery(function(){

var code = '';

jQuery.getScript('http://www.geoplugin.net/javascript.gp', function() 
    {
        // var country = geoplugin_countryName();
        code = geoplugin_countryCode();
        console.log(code);
        // console.log("Your location is: " + country + ", " + zone + ", " + district);
        if(code)
		jQuery(".paypal-submit-block").find("input[name=currency_code]").val(code);
    });

jQuery(".submit_info_wrapper select").change(function(){
	alert(jQuery(this).val());
});

jQuery(".input_value").click(function(){
	jQuery(".donation_submit_box").find('input[type=text]').val(jQuery(this).val());
	jQuery(".paypal-submit-block").find("input[name=amount]").val(jQuery(this).val());
});

jQuery(jQuery(".donation_submit_box").find('input[type=text]')).change(function(){
	jQuery(".paypal-submit-block").find("input[name=amount]").val(jQuery(this).val());
})

})