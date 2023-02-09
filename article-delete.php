<!--

Created by: Zachary Post
Use: Deletes/Voids article
11/1/2022

-->


<!DOCTYPE html>
<html lang="en">
<head>
<title>Z Vending Machine</title>
<meta charset="utf-8">
<style>
</style>
</head>
<body>
<?php
        require_once('database.php');
        global $db;
        $password = filter_input(INPUT_GET, 'pass');
        $art = filter_input(INPUT_GET, 'number');
    ?>
<?php

        if ($password == "alexander65") {
                $query = sprintf('UPDATE articles SET img ="img/banned.png" WHERE id=%d',$art);
                $statement = $db->prepare($query);
                $statement->execute();
                $statement->closeCursor();

                $query = sprintf('UPDATE articles SET title ="" WHERE id=%d',$art);
                $statement = $db->prepare($query);
                $statement->execute();
                $statement->closeCursor();

                $query = sprintf('UPDATE articles SET author ="ARTICLE VOIDED" WHERE id=%d',$art);
                $statement = $db->prepare($query);
                $statement->execute();
                $statement->closeCursor();

                $query = sprintf('UPDATE articles SET article ="" WHERE id=%d',$art);
                $statement = $db->prepare($query);
                $statement->execute();
                $statement->closeCursor();
                header("location:index.php");
        }
        else {
                header("location:index.php");
        }
?>