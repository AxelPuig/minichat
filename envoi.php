<?php
session_start();
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Envoi du message...</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<meta http-equiv="refresh" content="0;URL=index.php">
		<style>.form-group, form{margin: 10px;}</style>
	</head>

	<body class="container">
		<p>Veuillez patienter, envoi du message en cours...</p>

<?php

try {
	/*          CONNEXION A LA BASE DE DONNEES (à modifier si erreur)
	===============================================================================*/
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
}

catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['pseudo']) and isset($_POST['message'])) // On vérifie que les variables existent
{
	// On enregistre la variable de session du pseudo
	$_SESSION['pseudo'] = $_POST['pseudo'];

	// On utilise htmlspecialchars et addslashes pour protéger des méchants qui voudraient pirater le site :-)
	$bdd->exec("INSERT INTO messages (id, datetime, pseudo, message) VALUES (NULL, CURRENT_TIMESTAMP, '" . addslashes(htmlspecialchars($_POST["pseudo"])) . "', '" . addslashes(htmlspecialchars($_POST["message"])) . "')");
}
?>

	</body>
</html>
