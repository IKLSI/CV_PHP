<!DOCTYPE html>
<html lang="FR">
<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>CV généré</title>

	<link rel="stylesheet" href="../CSS/generateur.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
	<div class="container">
		<div class="left-column">
			<?php
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$informations = [
						'image' => htmlspecialchars($_POST['image']),
						'nom' => htmlspecialchars($_POST["name"]),
						'telephone' => htmlspecialchars($_POST["telephone"]),
						'email' => htmlspecialchars($_POST["email"]),
						'site' => htmlspecialchars($_POST["site"]),
						'adresse' => htmlspecialchars($_POST["adresse"]),
						'formation' => htmlspecialchars($_POST["formation"]),
						'langage' => htmlspecialchars($_POST["langage"]),
						'loisir' => htmlspecialchars($_POST["loisir"]),
						'poste' => htmlspecialchars($_POST["poste"]),
						'profil' => htmlspecialchars($_POST["profil"]),
						'experience' => htmlspecialchars($_POST["experience"]),
						'competence' => $_POST["competence"],
						'qualite' => $_POST["qualite"]
					];

					$loisir_formate = str_replace(' ', '<br><br> ', $informations['loisir']);
					$langage_formate = str_replace(' ', '<br><br> ', $informations['langage']);
					$telephone_formate = implode('.', str_split($informations['telephone'], 2));

					echo "<img src='{$informations['image']}' alt='image' width='100px' height='100px' id='image'><br>
					<i class='fas fa-phone-alt'></i>
					<span>$telephone_formate</span><br>
					<i class='fas fa-envelope'></i>
					<span>{$informations['email']}</span><br>
					<i class='fas fa-globe'></i>
					<span>{$informations['site']}</span><br>
					<i class='fas fa-map-marker-alt'></i>
					<span>{$informations['adresse']}</span><br>

					<h2>Formations</h2>
					<hr><br>
					<p>{$informations['formation']}</p>
					<h2>Loisirs</h2>
					<hr><br>
					<p>$loisir_formate</p>
					<h2>Langages</h2>
					<hr><br>
					<p>$langage_formate</p>
					</div>
					<div class='right-column'>
					<h1 class='nom'>{$informations['nom']}</h1>
					<p class='poste'>{$informations['poste']}</p>
					<h2>Profil Personnel</h2>
					<hr><br>
					<p>{$informations['profil']}</p>
					<h2>Expérience</h2>
					<hr><br>
					<p>{$informations['experience']}</p>
					<div class='competences'>
					<div class='colonne-gauche'>
					<h2>Compétences</h2>
					<hr><br>
					<p>{$informations['competence']}</p>
					</div>
					<div class='colonne-droite'>
					<h2>Qualités</h2>
					<hr><br>
					<p>{$informations['qualite']}</p>
					</div>
					</div>";
				}
			?>
		</div>
	</div>
</body>
</html>