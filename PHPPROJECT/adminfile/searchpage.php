<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="searchstyle.css">
    <title>DISCOVER</title>
</head>

<body>
    <h1 class="heading">DISCOVER</h1>
    <div class="container">
        <div class="navigation">
            <button class="navigation-button" onclick="location.href='/mogpog.php'">Mogpog Main Page</button>
            <button class="navigation-button" onclick="location.href='/boacpage.php'">Boac Main Page</button>
        </div>
        <div class="context-container">
            <form class="search-form" method="POST">
                <input type="search" name="search" placeholder="Search...">
                <button type="submit" name="submit-search">Search</button>
            </form>
            <?php
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($connection, $_POST['search']);
                $sql = "SELECT * FROM touristspot WHERE TITLE LIKE '%$search%' OR AUTHOR LIKE '%$search%'";

                $result = mysqli_query($connection, $sql);
                $queryResult = mysqli_num_rows($result);

                echo "<p class='result-count'>There are " . $queryResult . " results!</p>";

                if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='context-box'>
                            <h3 class='title'>" . $row['TITLE'] . "</h3>
                            <p class='author'>" . $row['AUTHOR'] . "</p>
                            <p class='context'>" . $row['CONTEXT'] . "</p>
                            <img src='img/" . $row['IMAGE'] . "' class='image' alt='Image'>
                        </div>";
                    }
                } else {
                    echo "<p class='no-results'>There are no results matching your search!</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
