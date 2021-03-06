<?php
session_start();
?>
<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Minichat PHP</title>
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
					<input name="pseudo" id="pseudo" type="text" class="form-control" placeholder="Entrez votre pseudo" maxlength="20" value="<?php if(isset($_SESSION['pseudo'])) echo $_SESSION['pseudo']; ?>">
				</div><br>
				<div class="form-group form-group-sm">
					<label for="message">Message : </label>
					<input name="message" id="message " type="text" class="form-control" autofocus required placeholder="Entrez un message" maxlength="500">
				</div><br>
				<div class="form-group form-group-sm">
					<button class="pull-right btn btn-default" type="submit">Envoyer !</button>
				</div>
			</form>

			<!-- Récupération des messages -->
			<?php
			try {
				/*          CONNEXION A LA BASE DE DONNEES (à modifier si erreur)
				===============================================================================*/
				$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
			}

			catch (Exception $e)
			{
				?>
					<div class="alert alert-danger">
						<p>Il semble y avoir une <strong>erreur</strong>, vérifions l'importation de la base de données.</p>
						<ol>
							<li>Allez dans PHPMyAdmin</li>
							<li>Avez vous une base de données (tout à gauche) appelée <strong>minichat</strong> ? Sinon, créez-la. Enfin, cliquez dessus.</li>
							<li>Cliquez sur le bouton importer (onglet en haut), et s'électionnez <strong>message.sql</strong>, dans le dossier de ce chat</li>
							<li>Ce dossier minichat doit être présent dans le répertoire de WAMPP/XAMPP/LAMPP (www/ ou htdocs/ selon l'OS)</li>
							<li>Allez sur <strong><a href="http://localhost/minichat/index.php">localhost/minichat/index.php</a></strong> pour accéder au chat. Si vous ne voyez rien, c'est que vous n'avez pas placé le dossier au bon endroit ou que vous n'avez pas démarré WAMPP/...</li>
							<li>Ça ne fonctionne toujours pas ? Allez vérifier les informations dans index.php et envoi.php, là où j'ai écrit CONNEXION A LA BASE DE DONNEES</li>
						</ol>
					</div>
				<?php
				die('Erreur : ' . $e->getMessage());

			}

			// *********** On récupère la date en différentes parties (jour, mois ... et l'heure) ainsi que le pseudo et le message
			// *********** On trie dans l'ordre inverse des dates, avec une limite de 20 messages.
			$reponse = $bdd->query("SELECT DATE_FORMAT(datetime, '%d/%m/%Y %H:%i:%s') AS date, pseudo, message FROM messages ORDER BY datetime DESC LIMIT 0,20");
			?>

			<!-- Affichage des messages dans un tableau -->
			<table class="table table-bordered table-hover">
				<thead>
					<td>Date et heure</td>
					<td>Pseudo</td>
					<td>Message</td>
				</thead>
				<tbody>
					<?php while($donnees = $reponse->fetch()){ ?>

					<tr class="<?php if(isset($_SESSION['pseudo'])) if($donnees['pseudo'] == $_SESSION['pseudo']) echo "active" ?>"> <!-- Mise en valeur si le message est de nous avec la classe active -->
						<td class="date"><?php echo $donnees['date']; ?></td>
						<td class="pseudo"><?php echo $donnees['pseudo']; ?></td>
						<td class="message"><?php echo $donnees['message'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

		</main>
	</body>
</html>
