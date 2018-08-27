<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 26-08-18
 * Time: 19:16
 */

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Fortnite Stats</title>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="img/fortnite.png" width="40" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Fortnite Stats <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Top 100 players</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">My stats</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Social Media
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Twitter</a>
                    <a class="dropdown-item" href="#">Reddit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Twitch</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Find Epic User" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 zoekSpeler" type="submit">Search</button>
        </form>
    </div>
</nav>

<div class="mainBlock">
<img src="img/featured-fortnite-brite-gunner kopie.jpg" class="img-fluid" alt="Responsive image" width="100%">

    <div class="bottom-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="background-color: #ff0; border: none; color: black" ><i class="fas fa-play"></i> Watch Trailer</button></div>
    <!--           Btn voor Trailer-->

</div>

<div class="container" style="padding-top: 2em">


    <div class="row">



        <div class="col-md-8">
            <h2>Top 10 Players</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Kills</th>
                    <th scope="col">Wins</th>
                    <th scope="col">K/D</th>
                    <th scope="col">Matches</th>
                    <th scope="col">Platform</th>
                </tr>
                </thead>
                <tbody>

                <?php

include_once 'php/Autoloader.php';

//Define the class
$api = new FortniteClient;

//Set your API key
$api->setKey('db88360db1d6b89f13383dc4a7ae3695');


$data = $api->leaderboard->kills();



foreach($data->entries as $values) {
    echo '<tr>';
    echo '<th scope="row">' . $values->rank . '</th>';
    echo '<td>' . $values->username . '</td>';
    echo '<td>' . $values->kills . '</td>';
    echo '<td>' . $values->wins . '</td>';
    echo '<td>' . $values->kd . '</td>';
    echo '<td>' . $values->matches . '</td>';

    if ($values-> platform == "ps4"){
        echo '<td> <i class="fab fa-playstation"></i>';
    } else{
        echo '<td> <i class="fab fa-windows"></i></td>';
    }
    echo '</tr>';





} ?>

                </tbody>
            </table>


        </div>

        <div class="col-md-4" id="twitterFeed">
            <a class="twitter-timeline" href="https://twitter.com/FortniteBR?ref_src=twsrc%5Etfw">Tweets by FortniteBR</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>

    </div>

</div>

<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <iframe width="100%" height="566" src="https://www.youtube.com/embed/2gUtfBmw86Y?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
