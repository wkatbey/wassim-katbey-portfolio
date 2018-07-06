<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Wassim Katbey">
  <title> 
  	<?php 
  	if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/mainpage.php') 
      echo 'Wassim Katbey';
    else if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/resume.php')
      echo 'Wassim Katbey - Resume & References';
    else if ($_SERVER['REQUEST_URI'] == '/wassim-katbey-portfolio/codingport.php')
      echo 'Wassim Katbey - Coding Portfolio'; 
  	?>
  </title>
  <link rel="stylesheet" href="css/navbar_style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/hero_header.css">
</head>