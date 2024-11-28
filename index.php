<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Web Solution</title>
</head>
<body>
    <?php
    $link = new mysqli("localhost", "root");

    if(!$link){exit('<p>Error link</p>');}
    //else {echo ("Ok link<br>");}

    $db = $link->select_db("simpleweb");

    if(!$link){exit('<p>Error db</p>');}
    //else {echo ("Ok db<br>");}

    $query = "SELECT * FROM customers";

    $resalt = $link->query($query);

if ($myrow)
</body>