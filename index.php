<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        session_start();
	require_once('dbconfig/config.php');

        // put your code here
        require './index.html'; 
        ?>
    
<html>
    <head>
        <meta charset="UTF-8">
        <title>STUDENT HUB</title>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="app.css">
     
    </head>
    <body>
       
 <div class="container">
            <div class="col-lg-12">
                <div id="content">
                    <h1>STUDENT HUB</h1>
                
                <hr>
                <form action="search.php" method="post">
                <div class="input-group">
                    <input name="search" type="text" class='form-control' placeholder="search for...">
                    <span class="input-group-btn">
                        <button name="submit" class="btn btn-success" type="submit">GO!</button>
                    </span>
                    
                </div>
                </form>
                <hr>
                  <div class="hm-button">
                    <a href="#" class="btn btn-lg btn-primary">Visit home page Click here</a>
                </div>
                
               
                </div>    
            </div>    
        </div>       
     
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
     <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

     
    </body>
</html>
