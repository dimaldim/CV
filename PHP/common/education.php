<?php
/**
 * Retrieving Education information from DB
 */
$stmt = $dbCon->query("
SELECT e.name, e.description, e.logo, e.p_id, u.id FROM education e, person u WHERE e.p_id = u.id"
);
?>
<div class="col-12 animated jackInTheBox" id="education">
    <h2 class="heading"><i class="fas fa-university"></i> Education</h2>
    <?php
    while ($row = $stmt->fetch()) {

        ?>
        <div class="media">
            <div class="media-left">
                <a href="#">
                    <img class="media-object edu-logo"
                         src="./images/<?php echo $row['logo']; ?>"
                         alt="Softuni Logo">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><?php echo $row['name']; ?></h4>
                <?php echo $row['description']; ?>
            </div>
        </div>
    <?php } ?>
</div>