<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "groom-room";

// Create connection
$cr = new mysqli($servername, $username, $password, $db);

// Check connection
if ($cr->connect_error) {
  die("Connection failed: " . $cr->connect_error);
}
