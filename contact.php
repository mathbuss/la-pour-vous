<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main_style.css" />
    <title>Là Pour Vous CONTACT</title>
</head>

<body>
    <main>
        <?php 
        include("header.php") 
        ?>
        <form method="post" readonly action="traitement.php">
            <fieldset>
                <legend>Vos coordonnées</legend>
                <br>
                <label for="nom">Votre nom </label>
                <br>
                <input type="text" name="nom" id="nom" autofocus required />
                <br>
                <label for="prenom">Votre prénom </label>
                <br>
                <input type="text" name="prenom" id="prenom" required />
                <br>
                <label for="email">Votre e-mail </label>
                <br>
                <input type="email" name="email" id="email" required />
                <br>
                <label for="message" class="textarea_title">Votre message</label>
                <br>
                <textarea rows="5" cols="100" type="message" name="message" id="message" required>
                </textarea>
                <br>
                <input type="submit" class="submit_button">
            </fieldset>
        </form>
        <footer class="footer_contact">
            <a href="#">Plan du site</a>
            <a href="homepage.html">Retour à l'accueil</a>
            <p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/instagram.jpg" alt="Instagram" /></p>
        </footer>
    </main>
</body>

</html>