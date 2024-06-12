?<?php

//Ajout User//
function createUser(): array
{
    $database = connect_db();

    
        $role = htmlspecialchars($_POST['role'], ENT_QUOTES);
        $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
        $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
        $active = isset($_POST['active']) ? 1 :0;
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $identifier = htmlspecialchars($_POST['identifier'], ENT_QUOTES);

        $SQL = "
            INSERT INTO user 
                (
                    role,
                    first_name,
                    last_name,
                    active,
                    password, 
                    identifier
                ) 
                VALUES  
                    (
                        :role,
                        :first_name,
                        :last_name,
                        :active,
                        :password,
                        :identifier
                    )";

        // PRÉPARATION DE LA REQUÊTE
        $query = $database->prepare($SQL);
        $query->bindParam(':role', $role,  PDO::PARAM_STR);
        $query->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $query->bindParam(':active', $active, PDO::PARAM_INT);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':identifier', $identifier, PDO::PARAM_STR);

        // EXÉCUTION DE LA REQUÊTE
        $query->execute();

        // RÉCUPÉRATION DES DONNÉES DE LA REQUÊTE
        return $query->fetchAll(PDO::FETCH_ASSOC);

        // RENVOIE LES DATAS FINALES
        
    
}
    //Ajout task//
    function createTask(): array
    {
        $database = connect_db();

        if ($_SERVER['REQUEST_METHOD'] == "post" && isset($_POST["add_task"])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $author = $_POST['author'];
            $status = $_POST['status'];
            $due_date = $_POST['due_date'];
            $receiver = $_POST['receiver'];

            $SQL = "
            INSERT INTO task 
                    (
                        id,
                        name,
                        description,
                        author,status,
                        due_date, 
                        receiver) 

                    VALUES  
                        (
                            '$id',
                            '$name',
                            '$description',
                            '$author',
                            '$status',
                            '$due_date',
                            '$receiver'
                            )";

            // PRÉPARATION DE LA REQUÊTE
            $query = $database->prepare($SQL);

            // EXÉCUTION DE LA REQUÊTE
            $query->execute();

            // RÉCUPÉRATION DES DONNÉES DE LA REQUÊTE
            $datas = $query->fetchAll(PDO::FETCH_ASSOC);

            // RENVOIE LES DATAS FINALES
            return $datas;
        }
    }


    // autre bout de fonction AddUser sécurisée


      

