<?php
    session_start();

    include(__DIR__ . '/models/databaseConnection.php');

    if (!isset($_POST['login_user']) || empty($_POST['login_user']) || !isset($_POST['password_user']) || empty($_POST['password_user'])) {
        die("<strong>Le login et le mot de passe sont nécessaires pour se connecter à l'espace Administrateur.</strong>");
    }

    $pseudo = filter_input(INPUT_POST, 'login_user');
    $password = filter_input(INPUT_POST, 'password_user');

    try {
        $query = $mysqlClient->prepare('SELECT * FROM utilisateur WHERE login_user = :login_user LIMIT 1');
        $query->execute([
            "login_user" => $pseudo,
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["password_user"])) {
            $_SESSION['id_user'] = $user['id_user'];
            header("Location: ./views/user/loginPage.php");
            exit();
        } else {
            die("Utilisateur ou mot de passe incorrect.");
        }
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
?>