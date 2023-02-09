<!--

Created by: Zachary Post
Use: Home page for ZMAN-NEWS
10/19/2022

-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
     <title>Zman-News</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css?id=22" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->

	<?php
        require_once('database.php');
        global $db;
    ?>
	




	    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;"></div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"><a class="text-secondary" href="">COMING SOON</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">COMING SOON</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block" id="date">
					<script>
						const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
						const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
						const d = new Date();
						let day = days[d.getDay()];
						let month = months[d.getMonth()];
						let date = d.getDate();
						let year = d.getFullYear();
						const s = ', ';
						
						document.getElementById("date").innerHTML = day + s + month + ' ' + date + s + year;
						//document.getElementById("date").innerHTML = day;
						//Monday, January 01, 2045
					</script>
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <!--<a href="" class="navbar-brand d-none d-lg-block"> -->
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">ZMAN</span>NEWS</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">ZMAN</span>NEWS</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                   <!-- <a href="category.html" class="nav-item nav-link">Categories</a> -->
                    <a href="#" class="nav-item nav-link">COMING SOON</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">COMING SOON</a>
                            <a href="#" class="dropdown-item">COMING SOON</a>
                            <a href="#" class="dropdown-item">COMING SOON</a>
                        </div>
                    </div>
                    <!--<a href="contact.html" class="nav-item nav-link">Contact</a>-->
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
					<!-- NEWS PIECE -->
					
					
					
					
					<!-- piece one -->
					

					<?php #$increment_open = file_get_contents("article_increment.data");
                        $query = 'SELECT MAX(id) FROM articles';
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $increment = $statement->fetchColumn();
                        $statement->closeCursor();
                        #$increment_open = 20;
                        $increment_open = $increment - 6;
                        #$times = 1;
                    ?>

                    <?php for($time=0;$time!=7;$time++): ?>

                    <?php
                        
                        #$increment_open = 8;
                        $query = sprintf('SELECT img FROM articles WHERE id=%d',$increment_open);
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $image = $statement->fetchAll();
                        $statement->closeCursor();

                        #$query = sprintf('SELECT title FROM articles WHERE id=%b',$increment);
                        $query = sprintf('SELECT title FROM articles WHERE id=%d',$increment_open);
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $title = $statement->fetchAll();
                        $statement->closeCursor();

                        $query = sprintf('SELECT author FROM articles WHERE id=%d',$increment_open);
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $author = $statement->fetchAll();
                        $statement->closeCursor();
                        
                    ?>
					
                        <div class="d-flex">
                    <img src="
                                    <?php foreach ($image as $img): ?>
                                            <?php echo $img['img']; ?>
                                    <?php endforeach;?>
                    " style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                    <a class="h2 m-0 text-white font-weight-bold" href="single.php?varname=<?php echo $increment_open ?>">
                                <?php foreach ($title as $ti): ?>
                                            <?php echo $ti['title']; ?>
                                    <?php endforeach;?>
                                </a>
                                </div>
                    </div>
						<?php $increment_open -= 1; ?>
						<?php endfor;?>				






                    </div>
                </div>
            </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
					<!-- NEWS PIECE -->
					
					
					
					
					<!-- piece one -->
					

					<?php #$increment_open = file_get_contents("article_increment.data");
                        $query = 'SELECT MAX(id) FROM articles';
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $increment_open = $statement->fetchColumn();
                        $statement->closeCursor();
                        #$increment_open = 20;
                    ?>

                    <?php for($time=0;$time!=5;$time++): ?>

                    <?php
                        
                        #$increment_open = 8;
                        $query = sprintf('SELECT img FROM articles WHERE id=%d',$increment_open);
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $image = $statement->fetchAll();
                        $statement->closeCursor();

                        #$query = sprintf('SELECT title FROM articles WHERE id=%b',$increment);
                        $query = sprintf('SELECT title FROM articles WHERE id=%d',$increment_open);
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $title = $statement->fetchAll();
                        $statement->closeCursor();

                        $query = sprintf('SELECT author FROM articles WHERE id=%d',$increment_open);
                        $statement = $db->prepare($query);
                        $statement->execute();
                        $author = $statement->fetchAll();
                        $statement->closeCursor();
                        
                    ?>
					
                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="
                            <?php foreach ($image as $img): ?>
                                            <?php echo $img['img']; ?>
                                    <?php endforeach;?>
                            " style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <h5>Written by: <b> 
                                    <?php foreach ($author as $auth): ?>
                                            <?php echo $auth['author']; ?>
                                    <?php endforeach;?>
                                    </b>
                                    </h5>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="single.php?varname=<?php echo $increment_open ?>">
                                <?php foreach ($title as $ti): ?>
                                            <?php echo $ti['title']; ?>
                                    <?php endforeach;?>
                                </a>
                            </div>
                        </div>
						
						<?php $increment_open -= 1; ?>
						<?php endfor;?>				









                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">More</h3>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="img/article-maker.png" style="object-fit: cover;">
                        <a href="article-maker.php" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Make your own article!
                        </a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="https://www.partnerdemand.com/sites/partnerdemand/files/styles/pd_newsletter_article_styling/public/Rolodex%20files.jpg?itok=NHPuiF5-" style="object-fit: cover;">
                        <a href="archives.php" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Archives
                        </a>
                    </div>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="https://media.sketchfab.com/models/223dd9d625504f56b71e63eaff52d1fe/thumbnails/98dda7dde04a452abc236ee41222ae1c/d0e3ba1696d647ecb3ee6590d5297457.jpeg" style="object-fit: cover;">
                        <a href="index.php" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Home
                        </a>
                    </div>
                    <!--
                    <div class="position-relative overflow-hidden" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="img/cat-500x80-4.jpg" style="object-fit: cover;">
                        <a href="" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                            Sports
                        </a>
                    </div>
                                -->
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">ZMAN</span>NEWS</h1>
                <p>Where the facts don't lie</p>
                <div class="d-flex justify-content-start mt-4">
                   <!-- <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a> -->
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                   <!-- <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.youtube.com/channel/UCf-6hldKq9ivLlA1i9gzyow"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="index.php"><i class="fa fa-angle-right text-dark mr-2"></i>Home</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                   <!-- <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
					-->
                    <a class="text-secondary" href="mailto:MannschaftZP@gmail.com"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="mailto:MannschaftZP@gmail.com">Zachary Post</a>. All Rights Reserved. 
			
			<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
			Template by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>