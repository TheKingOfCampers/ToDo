<?php
require('config.php');

$pdo = connect_db();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;

//Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM task ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();

// Fetch the records so we can display them in our template.
$tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

//determine if a button next page isq necessary
$num_tasks = $pdo->query('SELECT COUNT(*) FROM task')->fetchColumn();

?>

<!--templating-->

<div class="content read">

<!-- read tab task-->
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
    <div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_task): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

    <!-- read tab user-->
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
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_user): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>
