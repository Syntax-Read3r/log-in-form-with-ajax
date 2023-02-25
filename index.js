$(document).ready(function () {
	$("#login").on("click", function () {
		let email = $("#email").val();
		let password = $("#password").val();

		// create bridge to server
		if (email == "" || password == "") {
			alert("Please check your inputs");
		} else {
			$.ajax({
				url: "login.php",
				method: "POST", //iF not specified, it will be get methon
				data: {
					login: 1, //this is the key to be checked in the php code.
					emailPHP: email,
					passwordPHP: password,
				},
				success: function (res) {
					$("#response").html(res);

					if(res.indexOf('seccess') >= 0) {
						window.location = 'hidden.php';
					}
				},
				dataType: "text",
			});
		}
	});
});
