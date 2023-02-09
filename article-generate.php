<!--

Created by: Zachary Post
Use: Article generator for ZMAN-NEWS
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
    ?>
<?php
	#gets values from previous page form
	$img = filter_input(INPUT_GET, 'img');
	$title = filter_input(INPUT_GET, 'title');
	$article = filter_input(INPUT_GET, 'article');
    $author = filter_input(INPUT_GET, 'author');
    
    if($img == null || $title == null || $article == null || $author == null) {
        header("location:error.php");
    } else {


     
 
    
    
    #$increment_open = file_get_contents("article_increment.data");
    #$increment = $increment_open + 1;
    #$increment_update = fopen("article_increment.data", "w") or die("Unable to open increment_update");
    #fwrite($increment_update,$increment);
	#fclose($increment_update);
	



	$artile_length1 = wordwrap($article, 80, "\n", true);
	$artile_length = nl2br(strip_tags($artile_length1));
	$article_bob = 0;
	$the_article = sprintf('<p>%s</p>',$artile_length);




        $query = 'INSERT INTO articles
            (img, title, news, author)
        VALUES
            (:img, :title, :the_article, :author)';
        $statement = $db->prepare($query);
        #$statement->bindValue(':increment', $increment);
        $statement->bindValue(':img', $img);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':the_article', $the_article);
        $statement->bindValue(':author', $author);
        $statement->execute();
        $statement->closeCursor();
        header("location:index.php");
    }
?>