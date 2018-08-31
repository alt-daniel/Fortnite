
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
<div class="imageBg">

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: rgba(255,255,255,0.7)!important;">
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


<div class="container" style="padding-top: 2em; padding-bottom: 1em"">

    <div class="row" style="margin-bottom: 3em; padding-right: 15px; padding-left: 15px">

        <div class="col score">
            <div class="mainTitle">
            <h1 style="text-align: center; padding: 1em 0 1em 0;">YoungLuck</h1>
                <i class="fab fa-windows windowsIcon"></i>
            </div>
            <div class="mainTitlePlatform" style="float: right">

            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col" style="width: 15%">
                            <li class="numberTable">80</li>
                            <li class="typeTable">Kills</li>
                        </th>

                        <th scope="col" style="width: 15%">
                            <li class="numberTable">54</li>
                            <li class="typeTable">Wins</li>
                        </th>

                        <th scope="col" style="width: 15%">
                            <li class="numberTable">300</li>
                            <li class="typeTable">Matches Played</li>
                        </th>

                        <th scope="col" style="width: 15%">
                            <li class="numberTable">1.8</li>
                            <li class="typeTable">K/D</li>
                        </th>

                        <th scope="col" style="width: 15%">
                            <li class="numberTable">30</li>
                            <li class="typeTable">% Winrate</li>
                        </th>

                        <th scope="col" style="width: 15%">
                            <li class="numberTable">10000</li>
                            <li class="typeTable">Score</li>
                        </th>

                    </tr>
                </tbody>
            </table>
        </div>


    </div>

<div class="row">
    <img src="img/lama.png" id="lamaImg">
    <div class="col-lg-4">
        <div class="mainContent">
        <div class="mainHeader">
            Solo
        </div>
            <div class="mainBody score">
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
                        <th scope="row">Winrate</th>
                        <td>500</td>

                    </tr>

                    <tr>
                        <th scope="row">Matches</th>
                        <td>500</td>

                    </tr>

                    <tr>
                        <th scope="row">Score</th>
                        <td>500</td>

                    </tr>
                    </tbody>
                </table>

                <hr style="border: 0.5px solid white;">

                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Top 1</th>
                        <td scope="row">80</td>

                    </tr>


                    <tr>
                        <th scope="row">Top 10</th>
                        <td>200</td>

                    </tr>
                    <tr>
                        <th scope="row">top 25</th>
                        <td>1.8</td>

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
            <div class="mainBody score">
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
                        <th scope="row">Winrate</th>
                        <td>500</td>

                    </tr>

                    <tr>
                        <th scope="row">Matches</th>
                        <td>500</td>

                    </tr>



                    <tr>
                        <th scope="row">Score</th>
                        <td>500</td>

                    </tr>
                    </tbody>
                </table>
                <hr style="border: 0.5px solid white;">

                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Top 1</th>
                        <td scope="row">80</td>

                    </tr>


                    <tr>
                        <th scope="row">Top 3</th>
                        <td>200</td>

                    </tr>
                    <tr>
                        <th scope="row">Top 6</th>
                        <td>1.8</td>

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
            <div class="mainBody score">
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
                        <th scope="row">Winrate</th>
                        <td>500</td>

                    </tr>
                    <tr>
                        <th scope="row">Matches</th>
                        <td>500</td>

                    </tr>

                    <tr>
                        <th scope="row">Score</th>
                        <td>500</td>

                    </tr>
                    </tbody>
                </table>
                <hr style="border: 0.5px solid white;">

                <table class="table">
                    <tbody>
                    <tr>
                        <th scope="row">Top 1</th>
                        <td scope="row">80</td>

                    </tr>


                    <tr>
                        <th scope="row">Top 5</th>
                        <td>200</td>

                    </tr>
                    <tr>
                        <th scope="row">Top 12</th>
                        <td>1.8</td>

                    </tr>

                    </tbody>
                </table>
            </div>
    </div>

    </div>

</div>

<div class="row" style="margin-bottom: 3em; padding-right: 15px; padding-left: 15px; margin-top: 2em">
    <div class="col score">
        <h1 style="padding-top: 0.5em">Conclusion</h1>
        <hr style="border: 0.5px solid white">
        <p>Youngluck has a positive K/D! It </p>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

