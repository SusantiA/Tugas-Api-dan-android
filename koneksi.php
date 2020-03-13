<?php
define('HOST','localhost');
define('USER','root');
define('PASS','123456');
define('DB','praktek_mobile');

$con = mysql_connect(HOST, USER, PASS, DB) or die('Unable to Connect');