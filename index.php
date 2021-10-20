<?php
session_start();
if(!empty($_SESSION["firstname"])) {
    require_once 'F:\git\xampp\WD\main\startpage.php';
} else {
    require_once 'F:\git\xampp\WD\main\login.php';
}
?>