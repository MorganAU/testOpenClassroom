<!DOCTYPE html>
<html>
<head>
	<title>Titre</title>
</head>
<body>
	<h1>Ceci est un fichier HTML</h1>
	<?php 
		echo 'Ceci est du code php';
	?>

	<form action="form.php" method="post">
		<input type="text" name="texte" placeholder="Saisissez votre texte ici" />
		<input type="submit" name="envoyer" value="Envoyer" />
	</form>

</body>
</html>