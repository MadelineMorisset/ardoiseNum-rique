<?php
    include(__DIR__ . '/models/databaseConnection.php');

    if (isset($_POST['password_user']) && isset($_POST['confirm']) && !empty($_POST['password_user']) && !empty($_POST['confirm'])) {
        if ($_POST['password_user'] === $_POST['confirm']) {

            $id_user = $_GET['id_user'];
            $password_hashed = password_hash($_POST['password_user'], PASSWORD_DEFAULT);

            $query = $mysqlClient->prepare('UPDATE utilisateur SET password_user = :password_user WHERE id_user = :id_user');
            $query->execute([
                "password_user" => $password_hashed,
                "id_user" => $id_user,
            ]);

            echo "Mot de passe mis à jour avec succès.";
        } else {
            echo "Les mots de passe ne correspondent pas.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
?>
