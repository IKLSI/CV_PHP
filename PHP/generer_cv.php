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

					echo "<img src='{$informations['image']}' alt='image' width='100px' height='100px' id='image'><br>";
					echo "<i class='fas fa-phone-alt'></i>";
					echo "<span>$telephone_formate</span><br>";
					echo "<i class='fas fa-envelope'></i>";
					echo "<span>{$informations['email']}</span><br>";
					echo "<i class='fas fa-globe'></i>";
					echo "<span>{$informations['site']}</span><br>";
					echo "<i class='fas fa-map-marker-alt'></i>";
					echo "<span>{$informations['adresse']}</span><br>";

					echo "<h2>Formations</h2>";
					echo "<hr><br>";
					echo "<p>{$informations['formation']}</p>";
					echo "<h2>Loisirs</h2>";
					echo "<hr><br>";
					echo "<p>$loisir_formate</p>";
					echo "<h2>Langages</h2>";
					echo "<hr><br>";
					echo "<p>$langage_formate</p>";
				}
			?>
		</div>
		<div class="right-column">
			<?php
				echo "<h1 class='nom'>{$informations['nom']}</h1>";
				echo "<p class='poste'>{$informations['poste']}</p>";
				echo "<h2>Profil Personnel</h2>";
				echo "<hr><br>";
				echo "<p>{$informations['profil']}</p>";
				echo "<h2>Expérience</h2>";
				echo "<hr><br>";
				echo "<p>{$informations['experience']}</p>";

				echo "<div class='competences'>";
				echo "<div class='colonne-gauche'>";
				echo "<h2>Compétences</h2>";
				echo "<hr><br>";
				echo "<p>{$informations['competence']}</p>";
				echo "</div>";

				echo "<div class='colonne-droite'>";
				echo "<h2>Qualités</h2>";
				echo "<hr><br>";
				echo "<p>{$informations['qualite']}</p>";
				echo "</div>";
				echo "</div>";
			?>
		</div>
	</div>
</body>
</html>