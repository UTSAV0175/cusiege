<?php
session_start();
if((!isset($_SESSION['username'])))
	{
		header("location:index");
	}
	?>

<html>
   <head>
 <link rel='icon' href='icon/favicon.ico' type='image/x-icon'>
   <title>Rules</title>
   <link rel='stylesheet' href='Assets/css/1.css'>
     
     <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link rel='icon' href='icon/favicon.ico' type='image/x-icon'>
