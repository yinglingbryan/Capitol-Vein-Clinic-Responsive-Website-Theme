/*
 *	reCAPTCHA Scripts
 */

var captchaForm, captchaButton, newCaptchaButton;
var captchaLoaded = function() {

	console.log("captcha loaded!");

	captchaButton = $(".formify-field-input input[type='submit']").first();
	//newCaptchaButton = captchaButton.clone().appendTo(captchaButton.parent()).css("display","none");
	captchaButton = captchaButton[0];
	captchaForm = $(captchaButton).closest("form")[0];

	grecaptcha.render(captchaButton, {
			'sitekey' : '6LfEBVkUAAAAAMLrh0Z5JBnm3ulhwhbzdgi0VzpW',
            'callback' : captchaFormSubmitted
          	});
	};

var captchaFormSubmitted = function() {
		//submit the form
		console.log("submit the form now");
		console.log(captchaButton);
		captchaForm.submit();
		//newCaptchaButton.click();
	};


