/**
 * Created by skyre_000 on 7/29/2015.
 */

$(document).ready(function() {
	$("#sshKeyLoginForm").validate({
		errorClass: "label-danger",
		errorLabelContainer: "#outputArea",
		wrapper: "p",
		rules: {
			username: {
				required: true
			},
			password: {
				required: true
			}
		},

		messages: {
			username: "Please enter your username",
			password: "Please enter your password"
		},

		submitHandler: function(form) {
			$(form).ajaxSubmit( {
				type: "POST",
				url: $(form).attr("action"),
				headers: {
					"X-XSRF-TOKEN": Cookies.get("XSRF-TOKEN")
				},
				success: function(ajaxOutput) {
					$("#outputArea").css("display", "");
					$("#outputArea").html(ajaxOutput);

					if($(".alert-success").length >= 1) {
						window.location.replace("sshkey-editor.php");
					}
				}
			});
		}
	});
});