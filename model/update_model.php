<?php 
require_once('./config.php');

function updateTask($id) : mixed {

    $database = connect_db();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['name'];
        $description = $_POST['description'];
        $status = $_POST['status'];
        $id = $_POST['id'];

    $sql = "UPDATE task SET name =:name, description =:description,  status = :status WHERE = :id";

    $query = $database->prepare($sql);
    $query -> bindParam(':name', $name, PDO::PARAM_STR);
    $query -> bindParam(':description', $description, PDO::PARAM_STR);
    $query -> bindParam(':status', $status, PDO::PARAM_STR);
    $query -> bindParam(':id', $id, PDO::PARAM_INT);
    $query ->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);


    return $data;


    }

   
 
}

function updateUser($id) : mixed {

    $database = connect_db();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = $_POST['id'];
        $role = htmlspecialchars($_POST['role'], ENT_QUOTES);
        $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
        $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
        $active = htmlspecialchars($_POST['active'], ENT_QUOTES);
        $password = htmlspecialchars($_POST['password'], ENT_QUOTES);
        $identifier = htmlspecialchars($_POST['identifier'], ENT_QUOTES);

        $sql = "UPDATE user SET role = :role, first_name = :first_name, last_name=:last_name, active=:active, password =:password, identifier=:identifier WHERE id=:id";

        $query = $database->prepare($sql);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $query->bindParam(':active', $active, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':identifier', $identifier, PDO::PARAM_STR);
        $query->bindParam(':id', $role, PDO::PARAM_INT);
        $query->execute();
        
        $data = $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }


}

