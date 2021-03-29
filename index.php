<?php
$db = new PDO('mysql:host=db; dbname=chairs', 'root', 'password');
$query = $db->prepare('SELECT * FROM `chaircollection`;');

$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();

echo '<ul>';
foreach ($query as $chair) {
    echo '<li>' . $chair['chairname'] . '</li>';
}
echo '</ul>';