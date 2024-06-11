<?php

require_once('./config.php');

////delete task


if(!empty($_GET['id'])){

    $id=$_REQUEST['id'];

}

if(!empty($_POST)){

    $id= $_POST['id'];
    $pdo=connect_db();

        $sql = "DELETE FROM task  WHERE id =:id";

        $query = $pdo->prepare($sql);
        $query->bindParam('id',$id,PDO::PARAM_INT);


        $query->execute();
        $data= $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;




}
////delete user

if(!empty($_GET['id'])){

    $id=$_REQUEST['id'];

}

if(!empty($_POST)){

    $id= $_POST['id'];
    $pdo=connect_db();

        $sql = "DELETE FROM user  WHERE id =:id";

        $query = $pdo->prepare($sql);
        $query->bindParam('id',$id,PDO::PARAM_INT);


        $query->execute();
        $data= $query->fetchAll(PDO::FETCH_ASSOC);

        return $data;
        



}

?>