<?php 

//pas encore fonctionnel
function updateTask($id) : mixed {

    $database = connect_db();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
        $status = htmlspecialchars($_POST['status'], ENT_QUOTES);
        $id = htmlspecialchars($_POST['id'], ENT_QUOTES);

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

function updateUser($id) : bool {

    $database = connect_db();
   

        $role = htmlspecialchars($_POST['role'], ENT_QUOTES,'UTF-8');
        $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES,'UTF-8');
        $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES,'UTF-8');
        
       

        $sql = "UPDATE user SET role = :role, first_name = :first_name, last_name = :last_name WHERE id=:id";

        $query = $database->prepare($sql);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        $query->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
       // $query->bindParam(':active', $active, PDO::PARAM_INT);
       // $query->bindParam(':password', $password, PDO::PARAM_STR);
       // $query->bindParam(':identifier', $identifier, PDO::PARAM_STR);
        $query->bindParam(':id', $id, PDO::PARAM_INT);

       return $query->execute();

    


}

