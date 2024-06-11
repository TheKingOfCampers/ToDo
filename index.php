<?php

require("config.php");

////delete task
$id=0;

if(!empty($_GET['id'])){

    $id=$_REQUEST['id'];

}

if(!empty($_POST)){

    $id= $_POST['id'];

    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $sql = "DELETE FROM task  WHERE id = ?";

        $query = $pdo->prepare($sql);

        $query->execute(array($id));



}
////delete task
$id=0;

if(!empty($_GET['id'])){

    $id=$_REQUEST['id'];

}

if(!empty($_POST)){

    $id= $_POST['id'];

    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     $sql = "DELETE FROM user WHERE id = ?";

        $query = $pdo->prepare($sql);

        $query->execute(array($id));



}

?>
<!-- array task -->
<table>
        <thead>
            <tr>
                <td></td>
                <td>id</td>
                <td>name</td>
                <td>description</td>
                <td>author</td>
                <td>status</td>
                <td>due date</td>
                <td>receiver</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['name']?></td>
                <td><?=$contact['description']?></td>
                <td><?=$contact['author']?></td>
                <td><?=$contact['status']?></td>
                <td><?=$contact['due_date']?></td>
                <td><?=$contact['receiver']?></td>

                <td class="actions">
                    <a href="update.php?id=<?=$task['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$task['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- array user -->
    <table>
        <thead>
            <tr>
                <td></td>
                <td>id</td>
                <td>role</td>
                <td>first name</td>
                <td>last name</td>
                <td>active</td>
                <td>password</td>
                <td>identifier</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?=$contact['id']?></td>
                <td><?=$contact['role']?></td>
                <td><?=$contact['first_name']?></td>
                <td><?=$contact['last_name']?></td>
                <td><?=$contact['active']?></td>
                <td><?=$contact['password']?></td>
                <td><?=$contact['identifier']?></td>

                <td class="actions">
                    <a href="update.php?id=<?=$user['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$user['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>