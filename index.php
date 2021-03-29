<?php ?>

<h2>The Chair Collector</h2>

<?php

$db = new PDO('mysql:host=db; dbname=chairs', 'root', 'password');
$query = $db->prepare('SELECT * FROM `chaircollection`;');
$query->setFetchMode(PDO::FETCH_ASSOC);
$query->execute();

    echo '<ul>';
    foreach ($query as $chair) {
        echo '<li>The ' . $chair['chairname'] . ' was designed by ' . $chair['designer'] . ' in ' . $chair['designyear'] . '.</li>';
    }
    echo '</ul>';

