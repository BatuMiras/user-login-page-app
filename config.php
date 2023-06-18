<?php
session_start();
$_SESSION["welcome"] = "Welcome to the website!";


$base_url = "http://localhost/user-login-app/";
$message = "";

try {
  $dbh = new PDO('mysql:host=127.0.0.1;dbname=login_page_db', "root", "");
} catch ( PDOException $e ){
  die("Connection error: " . $e->getMessage());
}