<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 27-08-18
 * Time: 21:22
 */

include_once 'php/Autoloader.php';

//Define the class
$api = new FortniteClient;

//Set your API key
$api->setKey('db88360db1d6b89f13383dc4a7ae3695');


echo $api->user("Hileas");

