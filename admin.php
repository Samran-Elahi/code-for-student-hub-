<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//require './index.html';
session_start();
require_once './dbconfig/config.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title> STUDENT HUB</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

     
      <form action ="upload.php" method="POST" enctype="multipart/form-data">
          
        
          <input type="file" name="file">
          
          <button type="submit" name="submit">UPLOAD_FILE</button>
          
          
          
          </form>
    <form action ="upload.php" method="POST" enctype="multipart/form-data">
        <input type ="file" name="file">
        <button type="submit">UPLOAD_IMAGE</button>
    </form>

    

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</body>
</html>