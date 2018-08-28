
<?php

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
            <li class="nav-item">
                <a class="nav-link" href="index.php">Fortnite Stats <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Top 100 players</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="myStats.php">My stats</a>
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

<!--"totals": {-->
<!--"kills": 75151,-->
<!--"wins": 3857,-->
<!--"matchesplayed": 10418,-->
<!--"minutesplayed": 50091,-->
<!--"hoursplayed": 835,-->
<!--"score": 3968247,-->
<!--"winrate": 37.02,-->
<!--"kd": 11.45,-->
<!--"lastupdate": 1535396497-->
<!---->

<div class="container" style="padding-top: 2em">

    <div class="row">
        <div class="col" style="border: 1px solid purple">
            <h1>YoungLuck</h1>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <li class="numberTable">80</li>
                        <li class="typeTable">Kills</li>
                        </th>
                        <th>

                            <li class="numberTable">54</li>
                            <li class="typeTable">Wins</li>

                            </th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

<div class="row">
    <div class="col-lg-4">
        <div class="mainContent">
        <div class="mainHeader">
            Solo
        </div>
            <div class="mainBody">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Wins</th>
                        <td scope="row">80</td>

                    </tr>


                    <tr>
                        <th scope="row">Kills</th>
                        <td>200</td>

                    </tr>
                    <tr>
                        <th scope="row">K/D</th>
                        <td>1.8</td>

                    </tr>
                    <tr>
                        <th scope="row">Matches</th>
                        <td>500</td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="mainContent">
        <div class="mainHeader">
            Duo
        </div>
            <div class="mainBody">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Wins</th>
                        <td scope="row">80</td>

                    </tr>


                    <tr>
                        <th scope="row">Kills</th>
                        <td>200</td>

                    </tr>
                    <tr>
                        <th scope="row">K/D</th>
                        <td>1.8</td>

                    </tr>
                    <tr>
                        <th scope="row">Matches</th>
                        <td>500</td>

                    </tr>
                    </tbody>
                </table>
            </div>
    </div>
    </div>

    <div class="col-lg-4">
        <div class="mainContent">
        <div class="mainHeader">
            Squad
        </div>
            <div class="mainBody">
                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Wins</th>
                        <td scope="row">80</td>

                    </tr>


                    <tr>
                        <th scope="row">Kills</th>
                        <td>200</td>

                    </tr>
                    <tr>
                        <th scope="row">K/D</th>
                        <td>1.8</td>

                    </tr>
                    <tr>
                        <th scope="row">Matches</th>
                        <td>500</td>

                    </tr>
                    </tbody>
                </table>
            </div>
    </div>

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

