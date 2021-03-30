<?php require 'functions.php'?>

<h1>The Chair Collector</h1>

<?php

$db = connectdb();
$query = $db->prepare('SELECT * FROM `chaircollection`;');
$query->execute();


$result = displayChairs($query);
echo $result;
