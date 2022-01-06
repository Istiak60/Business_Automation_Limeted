var form = $("#my-form");
form.validate({
	errorPlacement: function errorPlacement(error, element) { element.before(error); },
	rules: {
		confirm: {
			equalTo: "#password"
		}
	}
});
form.children("div").steps({
	headerTag: "h3",
	bodyTag: "section",
	transitionEffect: "slideLeft",
	onStepChanging: function (event, currentIndex, newIndex) {
		form.validate().settings.ignore = ":disabled,:hidden";
		return form.valid();
	},
	onFinishing: function (event, currentIndex) {
		form.validate().settings.ignore = ":disabled";
		return form.valid();
	},
	onFinished: function (event, currentIndex) {
		event.preventDefault();
		console.log('test');
		form.submit();
	},
	//change button
	onStepChanged: (event, currentIndex) => {
		if (currentIndex === 4) {
			console.log('test');
			$('#my-form').find('a[href="#finish"]').remove();
			$('#my-form .actions li:last-child')
				.append('<button onclick="window.location.href="list.php"" type="submit" id="submit" class="btn btn-primary">Submit</button>');


		}
	}
});

