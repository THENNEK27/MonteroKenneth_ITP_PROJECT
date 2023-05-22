<?php 
include "mysql.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bcpg.css">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Satisfy&display=swap" rel="stylesheet">
    <title>Boac</title>

</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                 <ul>
                    <li><a href="PROJECT.php">Home</a></li>
                     <li><a href="mogpog.php">Mogpog</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
        </div>
        <div class="search-bar">
                <form action="/adminfile/searchpage.php" method="POST">
                    <input type="text" name="search" placeholder="Search...">
                    <button type="submit" name ="submit-search">Search</button>
                </form>   
                
            </div>
        <div class="row">
            <div class="col">
                <h1>Welcome to Boac</h1>
                <p>The Capital of Marinduque</p>
            </div>
        </div>
        <div class="row-Tcontext">
            <div class="col-Tcontext">
                <h2>Boac Tourist Spots</h2>
                <p>Places where you can visit, enjoy and Relaxed</p>
            </div>
        </div>
        <!---Images for Tourist spots in boac-->
        <div class="col-img">
            <div class="card card1">
                <h5>Mt. Baliis</h5>
                <p1>Sea of Clouds</p1>
            </div>
        </div>
        <div class="col-img">
            <div class="card card2">
                <h5>Butterfly and Insects</h5>
            </div>
            
        </div>
        <div class="col-img">
            <div class="card card3">
                <h6>Marinduque Museum</h6>
                <p1>National Museum Marinduque-Romblon</p1>
            </div>
            
        </div>
        <div class="col-img">
            <div class="card card4">
                <h5>Boac Cathedral</h5>
                <p1>The Immaculate Conception Cathedral Parish</p1>
            </div>
            
        </div>
        <!--Images for Hotel&restaurant-->
        <div class="row-Hcontext">
            <div class="col-Tcontext">
                <h1>Hotel & Restaurant</h1>
                <p1>Places where you can enjoy and Relaxed</p1>
            </div>
        </div>
        <div class="col-img">
            <div class="Hcard Hcard1">
                <h5>Balar Hotel & Spa </h5>
                <p1>Experience the heart of the Philippines and make Balar Hotel and Spa your home away from home.</p1>
            </div>
            <div class="Hcard Hcard2">
                <h5>Boac Hotel</h5>
                <p1>The oldest hotel located in the heart of the town of Boac</p1>
            </div>
            <div class="Hcard Hcard3">
                <h5>Kusina sa Plaza</h5>
                <p1>The Home of Authentic Marinduque Cooking!</p1>
            </div>
            <div class="Hcard Hcard4">
                <h5>Good Chow Express</h5>
            </div>
        </div>

    </div>
    
</body>
</html>