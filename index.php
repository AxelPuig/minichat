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

			<!-- Récupération des messages -->
			<?php
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=chat-php;charset=utf8', 'root', '');
			}

			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}

			$reponse = $bdd->query('SELECT * FROM messages ORDER BY datetime DESC LIMIT 0,20');
			?>

			<!-- Affichagedes messages dans un tableau -->
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<td>Date et heure</td>
					<td>Pseudo</td>
					<td>Message</td>
				</thead>
				<tbody>
					<?php while($donnees = $reponse->fetch()){ ?>

					<tr>
						<td class="date"><?php echo $donnees['datetime']; ?></td>
						<td class="pseudo"><?php echo $donnees['pseudo']; ?></td>
						<td class="message"><?php echo $donnees['message'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

		</main>
	</body>
</html>
