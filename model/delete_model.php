<?php
//pas encore fonctionnel
function deleteTask($id) : mixed {

    $database = connect_db();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = $_POST['id'];

        $sql = "DELETE FROM task  WHERE id =:id";

    $query = $database->prepare($sql);

    $query -> bindParam(':id', $id, PDO::PARAM_INT);
    $query ->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);


    return $data;


    }

   
 
}
function deleteUser($id) : bool {

    $database = connect_db();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $sql = "DELETE FROM user  WHERE id =:id";

        $query = $database->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();

        return $query->rowCount() > 0;
    }
    }
?>