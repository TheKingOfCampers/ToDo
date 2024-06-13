<?php 
function getUsers() : array{

    $database = connect_db();

    $sql="SELECT * FROM user;";

    $query = $database->prepare($sql);
    $query->execute();
  
    
    return $query->fetchAll(PDO::FETCH_ASSOC);

    


}



?>