<?php
  $dbHost = "db4free.net:3306"; 
  $dbUsername = "cspfinal2";
  $dbPassword = "cspfinal2";
  $dbName = "user_data";
  $dbOptions = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 

// four variables to connect to database
$host = "localhost";
$username = "root";
$password = "usbw";
$data_base_in_use = "test";

// create database connection
      $mysqli = new mysqli($host, $username, $password, $data_base_in_use);

?>