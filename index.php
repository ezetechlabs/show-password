<!DOCTYPE html>
<html>
<head>
	<title>Show Password</title>
	<meta charset="UTF-8" />
</head>
<body>

	<h1>Afficher le mot de passe: Tuto</h1>

	<input type="password" id="password" /> <br />
	<label for="checkbox">
		<input type="checkbox" id="checkbox" />
		Afficher le mot de passe
	</label>
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var checkbox = $("#checkbox");
			var password = $("#password");

			checkbox.click(function(){
				/*if(checkbox.prop("checked")){
					password.attr("type", "text");
				} else {
					password.attr("type", "password");
				}*/

				checkbox.prop("checked") ? password.attr("type", "text") : password.attr("type", "password");
			});
		});
	</script>
</body>
</html>