<?php

function addfirstTask()
{

    if ($_SERVER['REQUEST_METHOD']  == "POST") {

        $database = connect_db();
        $nom = $_POST['nameTask'];
        $description = $_POST['descriptionTask'];
        $echeance = $_POST['dateTask'];
        $donneur_ordre = $_POST['serviceTask'];
        $destinataire = $_POST['destinataireTask'];    
        $sql = "INSERT INTO `Tache` ( `nom`,`description`,`echeance`,`donneur_ordre`,`destinataire`) 
        VALUES (:nom,:description,:echeance,:donneur_ordre,:destinataire)";
        $query = $database->prepare($sql);
        $query->bindParam(':nom', $nom, PDO::PARAM_STR);
        $query->bindParam(':description', $description,PDO::PARAM_STR);
        $query->bindParam(':echeance', $echeance,PDO::PARAM_STR);
        $query->bindParam(':donneur_ordre', $donneur_ordre,PDO::PARAM_STR);
        $query->bindParam(':destinataire', $destinataire,PDO::PARAM_STR);
        $query->execute();
        $lastID = $database->lastInsertId();

        $database = connect_db();
        $role = $_POST['roleUser'];
        $email = $_POST['emailUser'];
        $motdepasse = $_POST['mdpUser'];
        $actif = $_POST['boolUser'];
        $sql2 = "INSERT INTO `Utilisateur` (`role`,`email`,`motdepasse`,`actif`,`id_tache`) 
        VALUES (:role,:email,:motdepasse,:actif,:id_tache)";
        $query = $database->prepare($sql2);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':motdepasse', $motdepasse, PDO::PARAM_STR);
        $query->bindParam(':actif', $actif, PDO::PARAM_STR);
        $query->bindParam(':id_tache', $lastID, PDO::PARAM_INT);
        $query->execute();
    }
}
