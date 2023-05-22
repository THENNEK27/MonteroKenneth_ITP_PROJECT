<?php 
include "mysql.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mgpg.css">
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Satisfy&display=swap" rel="stylesheet">
    <title>Mogpog</title>

</head>
<body>
    <div class="container">
        <div class="navbar">
            <nav>
                 <ul>
                    <li><a href="PROJECT.php">Home</a></li>
                     <li><a href="boacpage.php">Boac</a></li>
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
                <h1>Welcome to Mogpog</h1>
                <p>The Home of Original Morions</p>
            </div>
        </div>
        <!--touristSpot-->
        <div class="row-Tcontext">
            <div class="col-Tcontext">
                <h1>Mogpog Tourist Spots</h1>
                <p>Places where you can visit, enjoy and Relaxed</p>
            </div>
        </div>
        <div class="col-img">
            <div class="card card1">
                <h5>Luzon Datum</h5>
                <p1>Hearth of the Philippines</p1>
            </div>
        </div>
        <div class="col-img">
            <div class="card card2">
            <h5>Natangco</h5>
            </div>
        </div>
        <div class="col-img">
            <div class="card card3">
            <h5>Paadjao Falls</h5>
            </div>
        </div>
        <div class="col-img">
            <div class="card card4">
            <h5>Biglang Awa</h5>
            <p1>Patroness of Marinduque</p1>
            </div>
        </div>
        <!--Hotel &restaurant-->
        <div class="row-Hcontext">
            <div class="col-Tcontext">
                <h1>Hotel & Restaurant</h1>
                <p>Places where you can enjoy and Relaxed</p>
            </div>
        </div>
        <div class="col-img">
            <div class="Hcard Hcard1">
                <h6>Guisan Cove</h6>
                <p1>A place where you can enjoy your own leisure time and the freedom to commune with nature.</p1>
            </div>
            <div class="Hcard Hcard2">
                <h6>Family Beach Resorts</h6>
                <p1>Needed escapade? Family Beach Resort offers aircon rooms Function Halls and open cottages.</p1>
            </div>
            <div class="Hcard Hcard3">
                <h5>Villa Negro</h5>
                <p2>Authentic Italian Restaurant - Café' & Wine Bar</p2>
            </div>
            <div class="Hcard Hcard4">
                <h5>Doña Aurora Café </h5>
                <p1>Doña Aurora Café is named after the street in Market Site, Mogpog Poblacion where it is located. "</p1>
            </div>
        </div>
    </div>
    
</body>
</html>