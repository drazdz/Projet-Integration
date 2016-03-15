<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Latest compiled and minified FontAwesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Latest compiled and minified Socicon CSS -->
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet">
<!-- Link to CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/contact.css">

	<title>Formulaire</title>

</head>
<body>
	<h1>Mon premier formulaire</h1>
	<form action="receptionForm.php" method="POST">
		<input type="text" name="surname" placeholder="Name / Organization name" data-validation="alphanumeric required"></br>
		<input type="text" name="tel" placeholder="Telephone" data-validation="number required"></br>
		<input type="text" name="mail" placeholder="Email" data-validation="email required"></br>
		</br>
		<textarea id="message"></textarea></br>
		</br>
		<input type="text" id="captcha" name="captcha"></br>
		<input type="hidden" id="result" name="result"></br>
		
		<input type="submit">
	</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Jquery Form Validator -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script> $.validate(); </script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<!-- SCRIPT CAPTCHA -->
<script>
$(document).ready(function(){
	var int1 = Math.floor(Math.random() * 10);
	var int2 = Math.floor(Math.random() * 10);
	//$("input[name='captcha']").parent().append('<span></span>').text("(" + int1 + " + " + int2 + ") ?");
	
	$("<p>(" + int1 + " + " + int2 + ") ?</p>").insertAfter( "#message" );
	$("#result").val(int1+int2);
});
</script>
.container#main-ctn>.row>(.col-xs-4#col1)+(.col-xs-4#col2)
</body>
</html>



