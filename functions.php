<?php

/** create a function and set fetch mode to connect to chair database */

function connectdb()

{
    $db = new PDO('mysql:host=db; dbname=chairs', 'root', 'password');
    $db ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/** create a function to display each chair and all their details from the database */

function displayChairs($query): string
{
    $result = '';
    foreach ($query as $chair) {
        '<div class="chairtitle">';
        $result .='<h3>' . $chair['chairname'] . '</h3>';
        '<div class="chairinfo">';
        $result .= '<span>Designer: ' . $chair['designer'] . '</span><br/>';
        $result .= '<span>Year: ' . $chair['designyear'] . '</span><br/>';
    }
    return $result;
}