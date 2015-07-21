<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Titre de la page</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	</head>

	<body>
		<main class="container">
			<h1>Mini chat PHP</h1>
			<form method="post" class="form-inline text-center" action="envoi.php">
				<legend>Envoyez un message</legend>
				<div class="form-group form-group-sm">
					<label for="pseudo">Pseudo : </label>
					<input id="pseudo" type="text" class="form-control" placeholder="Entrez votre pseudo">
				</div><br>
				<div class="form-group form-group-sm">
					<label for="message">Message : </label>
					<input id="message" type="text" class="form-control" placeholder="Entrez un message">
				</div><br>
				<div class="form-group form-group-sm">
					<button class="pull-right btn btn-default" type="submit">Envoyer !</button>
				</div>
			</form>
		</main>
	</body>
</html>
