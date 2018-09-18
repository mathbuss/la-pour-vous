<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main_style.css" />
    <title>NOM DU SITE</title>
</head>

<body>
    <main>

	<?php 
	include("header.php");
	?>
		<section class="confirm_message">
			<article>
				<?php
				if (isset($_POST['name']) AND isset($_POST['firstname']) AND isset($_POST['email']) AND isset($_POST['message']))
				{
					echo 'Merci '.htmlspecialchars ($_POST['firstname']).', votre demande a bien été prise en compte, vous serez recontacté ultérieument.';
					echo "</br>";
			
					echo 'A bientôt !';
				
			
				}

				else
				{
					echo "<p>Une erreur s'est produite, veuillez rééssayer dans un moment.</p>";
				}

				echo "<PRE>";
				echo "<br />";
				echo "</PRE>";

			?>
			</article>
			<a class= "link" href="homepage.php">Retour à l'accueil</a>

			<!--
			<?php 
			echo "<PRE>";
			echo "Bonjour ";
			echo htmlspecialchars ($_POST['firstname']);
			echo "</br>";
			echo strip_tags($_POST['message']);
			print_r($_POST);
			echo "</PRE>"
			?>
			-->

		</section>
		
			
		
		

	</main>
</body>
</html>





