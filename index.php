<?php require 'functions.php'?>

    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>title</title>
    </head>
    <body>

    <h1>The Chair Collector</h1>

<?php

$db = connectdb();
$query = $db->prepare('SELECT `chairname`, `designer`, `designyear`, `imagelink` FROM `chaircollection`;');
$query->execute();
?>
    <h2>Please add more chairs to the collection!</h2>
    <div class="chairinputform">
    <form method="post" action="index.php">
        <div>Chair name : <input type="text" name="chairname" size="50" placeholder="Enter the name of the chair" /></div>
        <div>Designer's name : <input type="text" name="designer" size="50" placeholder="Enter the name of the designer" /></div>
        <div>Year : <input type="number" name="designyear" size="40" placeholder="Enter the year of the design" /></div>
        <div>Wikimedia Image Link : <input type="text" name="imagelink" size="40" placeholder="Copy and paste Wikimedia Image Link" /></div>
        <input name="submit" type="submit" value="Submit" />
    </form></div>
    </body>
    </html>

<?php



$result = displayChairs($query);
echo $result;
