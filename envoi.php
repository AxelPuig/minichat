<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Envoi du message...</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<meta http-equiv="refresh" content="0;URL=index.php">
	</head>

	<body class="container">
		<p>Veuillez patienter, envoi du message en cours...</p>

<?php

try {
	$bdd = new PDO('mysql:host=localhost;dbname=chat-php;charset=utf8', 'root', '');
}

catch (Exception $e) {
	die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['pseudo']) and isset($_POST['message'])) //******** On vérifie que les variables existent
	$bdd->exec("INSERT INTO messages (id, datetime, pseudo, message) VALUES (NULL, CURRENT_TIMESTAMP, '" . htmlspecialchars($_POST["pseudo"]) . "', '" . htmlspecialchars($_POST["message"]) . "')");
//********* On utilise htmlspecialchars pour protéger des méchants qui voudraient pirater le site :-)
?>

	</body>
</html>

