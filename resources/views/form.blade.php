<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
	<meta charset="utf-8">
</head>
<body>
<form action ={{"/customer2"}} method="post">
{{csrf_field()}}

	<input type="text" name="prenom" value="">
	<button type="submit" name="">envoyer</button>

</form>

</body>
</html>