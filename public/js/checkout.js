var stripe = Stripe('pk_test_VlniCaimwxuTj8DYDPT7L0eW');

var $form = $('#checkout-form');

$form.submit(function(event) {
	$('#charge-error').addClass('hidden');
	$form.find('button').prop('disabled', true);
	stripe.createToken('bank_account', {
	 number: $('#card-number').val(),
	 cvc: $('#card-cvc').val(),
	 exp_month: $('#card-expiry-month').val(),
	 exp_year: $('#card-expiry-year').val(),
	 card_name: $('#card-name').val(),
	 name: $('#name').val()
	}, stripeResponseHandler);
	return false;

function stripeResponseHandler(status, response) {
	if (response.error) {
		$('#charge-error').removeClass('hidden');
		$('#charge-error').text(response.error.message);
		$form.find('button').prop('disabled', false);
	} else {
		var token = response.id;
		echo token;
		$form.append($('<input type="hidden" name="stripeToken" />').val(token));

		//submit the form:
		$form.get(0).submit();
	}
}