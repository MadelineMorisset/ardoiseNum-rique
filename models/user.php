<?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    session_start();

    // Récupérer et afficher les données de l'utilisateur connecté
    function showMyAccount() {
        include(__DIR__ . '/../models/databaseConnection.php'); 

        try {
            if (!isset($_SESSION["id_user"])) {
                throw new Exception("Utilisateur non connecté.");
            }
    
            $query = $mysqlClient->prepare("
                SELECT *
                FROM utilisateur
                WHERE utilisateur.id_user = :id_user
            ");
    
            $query->execute([
                "id_user" => $_SESSION["id_user"],
            ]);
    
            $user = $query->fetch(PDO::FETCH_ASSOC);
    
            return $user;
    
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
?>