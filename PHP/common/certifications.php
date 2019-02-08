<?php
/**
 * Retrieving certifications information from DB
 */
$stmt = $dbCon->query('
SELECT c.p_id,c.title,c.description,c.logo,c.url, p.id FROM certifications c, person p WHERE c.p_id = p.id ORDER BY c.id DESC');
while ($row = $stmt->fetch()) {
    ?>
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object edu-logo"
                     src="./images/<?php echo $row['logo']; ?>"
                     alt="">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="<?php echo $row['url']; ?>" target="_blank"><?php echo $row['title']; ?></a></h4>
            <?php echo $row['description']; ?>
        </div>
    </div>
<?php } ?>