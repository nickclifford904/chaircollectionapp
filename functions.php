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
    if (empty($query))
    {
        return "This database is empty!";
    }
    $result = '';
    foreach ($query as $chair) {
        $result .= '<div class="chairtitle">';
        $result .= '<h3>' . $chair['chairname'] . '</h3></div>';
        $result .= '<div class="chairinfo">';
        $result .= '<img src="' . $chair['imagelink'] . '" height="250" /><br>';
        $result .= '<span>Designer: ' . $chair['designer'] . '</span><br/>';
        $result .= '<span>Year: ' . $chair['designyear'] . '</span><br/></div>';
    }
    return $result;
}