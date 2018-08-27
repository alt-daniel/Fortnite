<?php

include_once  'Autoloader.php';

//Define the class
$api = new FortniteClient;

//Set your API key
$api->setKey('db88360db1d6b89f13383dc4a7ae3695');


$data = $api->leaderboard->kills();

$counter = 1;

foreach($data->entries as $values) {
    echo '<li>' . $counter. '</li>';
   echo '<li>' . $values->username . '</li>';
//    echo $values->kills;
   echo '<li>' . $values->wins . '</li>';
//    echo $values->matches;
//    echo $values->minutes;
//    echo $values->score;
//    echo $values->kd;
//    echo $values->platform;
//    echo $values->rank;

    $counter++;
}