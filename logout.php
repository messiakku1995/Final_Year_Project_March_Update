<?php // This file is executed whenever the user wants to logout of the website.
session_start(); //Start a Web session.
include('dbconnection.php');	//include dbconnection.php to connect to the database.
session_destroy();	//Destroy the session and release all variables and functions.
header('location:index.php'); //After logging out the user is redirected to the Home Page.
?>