<?php include(__DIR__ . '/../views/head.php'); ?>

    <main>
        <!-- Formulaire de Création d'ardoise -->
        <section class="createSlate">
            <h1 class="title titleSlate">CRÉER ARDOISE</h1>

            <form action="index.php" method="post" class="formSlate">
                <section class="newSlate">
                    <section class="firstNameClient">
                        <label for="firstName" class="title label">Prénom (*)</label>
                        <input type="text" name="firstName" required class="inputCreateAccount">
                    </section>

                    <section class="lastNameClient">
                        <label for="lastName" class="title label">Nom (*)</label>
                        <input type="text" name="lastName" required class="inputCreateAccount">
                    </section>

                    <section class="sumSlate">
                        <label for="sumSlate" class="title label">Montant (*)</label>
                        <input type="text" name="sumSlate" required class="inputCreateAccount">
                    </section>

                    <section class="validation">
                        <button type="submit" class="title button115px35px">Valider</button>
                    </section>

                    <section class="returnLinks">
                        <a href="adminIndex.php" class="text toConnectionPageLink">
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