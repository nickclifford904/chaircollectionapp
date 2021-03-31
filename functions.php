<?php

/** create a function and set fetch mode to connect to chair database */

function connectdb()

{
    $db = new PDO('mysql:host=db; dbname=chairs', 'root', 'password');
    $db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/** create a function to display each chair and all their details from the database */

function displayChairs(array $query): string
{
    if (empty($query))
    {
        return "This database is empty!";
    }
    $result = '';
    foreach ($query as $chair) {
        $result .= '<div class="chairtitle">';
        $result .= '<h3>' . $chair['chairname'] . '</h3></div>';
        $result .= '<div class="chairinfo">';
        $result .= '<img src="' . $chair['imagelink'] . '" height="250"  alt="A lovely chair" /><br>';
        $result .= '<span>Designer: ' . $chair['designer'] . '</span><br>';
        $result .= '<span>Year: ' . $chair['designyear'] . '</span><br></div>';
        $result .= '<form method="post" action="index.php"><input name="delete" type="submit" value="Remove this chair from the collection" /><input type="hidden" name="id" value="' . $chair['id'] . '" /></form>';
    }
    return $result;
}

/** create a function to insert the POST form data into the database
 * @param PDO $db

 */

function insertChair(PDO $db){

    if(isset($_POST['submit'])
        && (!empty($_POST['chairname'])) && (!empty($_POST['designer'])) && (!empty($_POST['designyear'])) && (!empty($_POST['imagelink'])))
    {
        $chairname = $_POST['chairname'];
        $designer = $_POST['designer'];
        $designyear = $_POST['designyear'];
        $imagelink = $_POST['imagelink'];

        // $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $insertchair = $db->prepare("INSERT INTO `chaircollection` (`chairname`, `designer`, `designyear`, `imagelink`, `deleted`) VALUE (:chairname, :designer, :designyear, :imagelink, 0)");
    $insertchair->bindParam(':chairname', $chairname);
    $insertchair->bindParam(':designer', $designer);
    $insertchair->bindParam(':designyear', $designyear);
    $insertchair->bindParam(':imagelink', $imagelink);
    $insertchair->execute();
    }

}

/** create a function to "safe delete" a record from the db by changing a field from 0 to 1
 * @param PDO $db
 *
 */

function deleteChair(PDO $db){
    if(isset($_POST['delete']))
    {
        $chairid = $_POST['id'];
        $deletechair = $db->prepare("UPDATE `chaircollection` SET `deleted` = 1 WHERE `id` = :chairid");
        $deletechair->bindParam(':chairid', $chairid);
        $deletechair->execute();
    }
}