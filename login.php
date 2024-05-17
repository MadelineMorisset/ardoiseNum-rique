<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/23c1a897ea.js" crossorigin="anonymous"></script>
    <!-- JavaScript -->
    <script src="script.js"></script>
    <title>Ardoise Numérique</title>
</head>

<body>
    <?php include("header.php"); ?>

    <main>
        <!-- Formulaire de connexion -->
        <section class="signInContainer">
            <h1 class="title titleConnection">CONNEXION</h1>

            <form action="signup.php" method="post" class="formConnection">
                <section class="identification">
                    <section class="pseudo">
                        <label for="pseudo" class="title label">Pseudonyme (*) :</label>
                        <input type="text" name="pseudo" required class="inputCreateAccount">
                    </section>

                    <section class="password">
                        <label for="mdp" class="title label">Mot de passe (*) :</label>
                        <input type="password" name="mdp" required class="inputCreateAccount">
                    </section>
                </section>

                <section class="connection">
                    <button type="submit" class="title button115px35px">Se connecter</button>
                </section>

                <section class="returnLinks">
                    <a href="adminIndex.php" class="text toConnectionPageLink">
                        <i class="fa-regular fa-circle-left"></i>
                        Accueil
                    </a>
                </section>
            </form>
        </section>
    </main>
</body>

</html>