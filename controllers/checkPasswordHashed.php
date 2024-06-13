<?php
    include(__DIR__ . '/models/databaseConnection.php');

    $query = $mysqlClient->query('SELECT id_user, password_user FROM utilisateur');
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($users as $user) {
        $password_hashed = password_hash($user['password_user'], PASSWORD_DEFAULT);

        $updateQuery = $mysqlClient->prepare('UPDATE utilisateur SET password_user = :password_user WHERE id_user = :id_user');
        $updateQuery->execute([
            "password_user" => $password_hashed,
            "id_user" => $user['id_user'],
        ]);

        echo "Mot de passe de l'utilisateur " . $user['login_user'] . "à été mit à jour.<br>";
    }
?>
