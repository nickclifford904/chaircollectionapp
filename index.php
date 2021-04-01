<?php require 'functions.php'?>

    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>The Chair Collector</title>
    </head>
    <body>

    <h1>The Chair Collector</h1>

<?php

$db = connectdb();
insertChair($db);
deleteChair($db);
$query = $db->prepare('SELECT `id`, `chairname`, `designer`, `designyear`, `imagelink`, `deleted` FROM `chaircollection` WHERE NOT `deleted` = "1"');
$query->execute();
$data = $query->fetchAll();
?>

    <h2>Please add more chairs to the collection!</h2>
    <div class="chairinputform">
        <form method="post" action="index.php">
            <div>Chair name : <input type="text" name="chairname" size="50" placeholder="Enter the name of the chair" /></div>
            <div>Designer's name : <input type="text" name="designer" size="50" placeholder="Enter the name of the designer" /></div>
            <div>Year : <input type="number" name="designyear" size="40" placeholder="Enter the year of the design" /></div>
            <div>Wikimedia Image Link : <input type="text" name="imagelink" size="40" placeholder="Copy and paste Wikimedia Image Link" /></div>
            <div>All four fields must be completed to add a new chair to the collection.</div>
            <input name="submit" type="submit" value="Submit" />
        </form></div>

<?php


$result = displayChairs($data);
echo $result;
?>

  </body>
    </html>