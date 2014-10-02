$( document ).ready(function() {
	$('#registrationform-gmail').keyup(function() {
		$('#registrationform-email').val($('#registrationform-gmail').val() + '@gmail.com');
	})
});