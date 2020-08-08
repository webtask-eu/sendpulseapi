<?php

use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

require("sendpulse-rest-api-php-master/src/ApiInterface.php");
require("sendpulse-rest-api-php-master/src/ApiClient.php");
require("sendpulse-rest-api-php-master/src/Storage/TokenStorageInterface.php");
require("sendpulse-rest-api-php-master/src/Storage/FileStorage.php");
require("sendpulse-rest-api-php-master/src/Storage/SessionStorage.php");
require("sendpulse-rest-api-php-master/src/Storage/MemcachedStorage.php");
require("sendpulse-rest-api-php-master/src/Storage/MemcacheStorage.php");


if (isset($_POST['id'])) {$id = $_POST['id']; }
if (isset($_POST['emails'])) {$emails = $_POST['emails'];}
if (isset($_POST['confirmation'])) {$confirmation = $_POST['confirmation'];}
if (isset($_POST['sender_email'])) {$sender_email = $_POST['sender_email'];}


$wlfields = 'id='.$id.'&emails='.$emails.'&confirmation='.$confirmation.'&sender_email='.$sender_email;


define('API_USER_ID', '08d1660741263a17d15df16f3aa8fc2d');
define('API_SECRET', '5c06a200471d07671bb21673261c52c1'); 
define('PATH_TO_ATTACH_FILE', __FILE__);
$SPApiClient = new ApiClient(API_USER_ID, API_SECRET, new FileStorage());
$SPApiClient->addEmails($id,  array($emails));


 ?>
