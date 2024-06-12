?<?php

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

    //Ajout User//
    function createUser(): array
    {
        $database = connect_db();

        if ($_SERVER['REQUEST_METHOD'] == "post" && isset($_POST["add_user"])) {
            $id = $_POST['id'];
            $role = $_POST['role'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $active = $_POST['active'];
            $password = $_POST['password'];
            $identifier = $_POST['identifier'];

            $SQL = "
                INSERT INTO task 
                    (
                        id,
                        role,
                        first_name,
                        last_name,
                        active,
                        password, 
                        identifier
                    ) 
                    VALUES  
                        (
                            '$id',
                            '$role',
                            '$first_name',
                            '$last_name',
                            '$active',
                            '$password',
                            '$identifier'
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


        //************************************************* */
        $sql = 'INSERT INTO user(role,first_name,last_name,active,password,identifier) 
            VALUES (:role, :first_name, :last_name, :active, :password, :identifier)
        ';
    
        $statement = getDatabase()->prepare($sql);
        $statement->bindParam(':role', $role,  PDO::PARAM_STR);
        $statement->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $statement->bindParam(':last_name', $last_name, PDO::PARAM_INT);
        $statement->bindParam(':active', $active, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_INT);
        $statement->bindParam(':identifier', $identifier, PDO::PARAM_INT);

        $statement->execute();
        // debug(getDatabase()->lastInsertId());
        // die();
        $statement->closeCursor();
    //************************************************* */


    // autre bout de fonction AddTask sécurisée
    $sql = 'INSERT INTO task (name,description,author,status,due_date,receiver)
            VALUE (:name,:description,:author,:status,:due_date,:receiver)
    ';
    
        $statement= getDatabase()->prepare ($sql);
        $statement->bindParam(':name', $name, PDO::PARAM_STR);
        $statement->bindParam(':description',$description, PDO::PARAM_STR);
        $statement->bindParam(':author', $author, PDO::PARAM_STR);
        $statement->bindParam(':status',$status, PDD::PARAM_STR);
        $statement->bindParam('due_date',$due_date, PDO::PARAM_STR);
        $statement->bindParam('receiver', $receiver, PDO::PARAM_STR);
        
        $statement->execute();
        $statement->closeCursor();


        //************************************************* */

    ?>

