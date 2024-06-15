<?php 
function getUsers() : array{

    $database = connect_db();

    $sql="SELECT * FROM user";

    $query = $database->prepare($sql);
    $query->execute();
  
    
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function getUserById($id) : array{
    $database = connect_db();

    $sql="SELECT * FROM user WHERE id =:id";
    $query = $database->prepare($sql);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
   
    return $data;
}

?>