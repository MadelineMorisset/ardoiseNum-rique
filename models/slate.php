<?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    session_start();

    // Récupérer et afficher les ardoises des clients
    function displaySlates() {
        include(__DIR__ . "/databaseConnection.php");
        $query = $mysqlClient ->prepare("SELECT * FROM ardoise");
        $query->execute();
        $slates = $query->fetchAll();
        ?>
        <section class="indexSlatesBox">
            <?php
                foreach ($slates as $slate) {
                    ?>  
                    <section class="slateLine">
                        <section class="slateOwner slateTitle"> <?= htmlspecialchars($slate['prenom_client']) . " " . htmlspecialchars($slate['nom_client']) ?> </section>
                        <section class="slateAmount slateText"> <?= htmlspecialchars($slate['montant_ardoise']) ?> </section>
                    </section> 
                    <?php
                }
            ?>
        </section>
        <?php
    }
?>