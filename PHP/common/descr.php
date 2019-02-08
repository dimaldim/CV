<?php
/**
 * Retrieving person information from DB
 */
$stmt = $dbCon->query('SELECT name,description FROM person');
$row = $stmt->fetch();

$fullName = $row['name'];
$description = $row['description'];
?>
<div class="card-img-top d-flex align-items-center bg-light">
    <div>
        <img class="img-thumbnail rounded" src="./images/me.png" alt="Dimitar Dimitrov">
    </div>
    <p class="col p-1 m-5">
        My name is <?php echo $fullName; ?>. <?php echo $description; ?>
    </p>
</div>