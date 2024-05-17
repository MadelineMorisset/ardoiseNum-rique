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
        <section class="createSlate">
            <h1 class="title titleSlate">CRÉER ARDOISE</h1>

            <form action="signup.php" method="post" class="formSlate">
                <section class="newSlate">
                    <section class="firstNameClient">
                        <label for="firstName" class="title fontSize13px label">Prénom (*)</label>
                        <input type="text" name="firstName" required class="inputCreateAccount">
                    </section>

                    <section class="lastNameClient">
                        <label for="lastName" class="title fontSize13px label">Nom (*)</label>
                        <input type="text" name="lastName" required class="inputCreateAccount">
                    </section>

                    <section class="sumSlate">
                        <label for="sumSlate" class="title fontSize13px label">Montant (*)</label>
                        <input type="text" name="sumSlate" required class="inputCreateAccount">
                    </section>

                    <section class="validation">
                        <button type="submit" class="title fontSize13px button115px35px">Valider</button>
                    </section>

                    <section class="returnLinks">
                        <a href="adminIndex.php" class="text fontSize14px toConnectionPageLink">
                            <i class="fa-regular fa-circle-left"></i>
                            Accueil
                        </a>
                    </section>
                </section>
            </form>
        </section>
    </main>
</body>

</html>