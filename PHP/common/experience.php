<?php
/**
 * Retrieving experience information from DB
 */
$stmt = $dbCon->query(
    'SELECT e.p_id, e.title, e.from, e.till, e.description, u.id FROM experience e, person u 
               WHERE e.p_id = u.id ORDER by e.id DESC'
);
?>
<h2 class="heading"><i class="fas fa-briefcase"></i> Experience</h2>
<ul>
    <?php while ($row = $stmt->fetch()) { ?>
        <li><?php echo $row['from']; ?> - <?php echo $row['till']; ?> - <?php echo $row['title']; ?>
            - <?php echo $row['description']; ?>
        </li>
    <?php } ?>
</ul>