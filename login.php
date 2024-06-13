<?php include("head.php"); ?>

    <main>
        <!-- Formulaire de connexion -->
        <h1 class="main-h1 titleConnection">CONNEXION</h1>
        <section class="signInContainer">
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