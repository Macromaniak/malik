<?php
/* Template Name: Stripe Payment */
get_header();
echo '<div class="payment-form-wrap" style="width:40%;margin: 150px auto;">' .do_shortcode('[wp_stripe_donation]'). '</div>';
?>
<div id="data-div" style="display: none;" name="<?php echo $_POST['payee-name']; ?>" email="<?php echo $_POST['payee-email']; ?>" amount="<?php echo $_POST['amount']; ?>" cause="<?php echo $_POST['cause_id']; ?>" cause_title="<?php echo $_POST['cause_title']; ?>"></div>
<?php
get_footer();
?>

<script type="text/javascript">
	jQuery(function(){
		console.log('name'+ jQuery("#data-div").attr('name'));
		console.log('email'+ jQuery("#data-div").attr('email'));
		console.log('amount'+ jQuery("#data-div").attr('amount'));
		console.log('cause'+ jQuery("#data-div").attr('cause'));
		console.log('title'+ jQuery("#data-div").attr('cause_title'));

		var cause = jQuery("#data-div").attr('cause');
		var amount = jQuery("#data-div").attr('amount');
		var email = jQuery("#data-div").attr('email');
		var name = jQuery("#data-div").attr('name');
		var title = jQuery("#data-div").attr('cause_title');

		if(cause == 'general')
		{
			jQuery("#wpsd_donation_for").find("option").html('Malik');
			jQuery("#wpsd_donation_for").find("option").attr("value",'malik');
		}
		else
		{
			jQuery("#wpsd_donation_for").find("option").attr('value', cause);
			jQuery("#wpsd_donation_for").find("option").html(title);
		}

		jQuery("#wpsd_donator_name").val(name);

		jQuery("#wpsd_donator_email").val(email);

		jQuery("#wpsd_donate_other_amount").val(amount);


	})
</script>