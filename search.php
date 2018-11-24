<?php
session_start();
	require_once('dbconfig/config.php');

        // put your code here
        require './index.html'; 
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css.css">
      
    </head>  
    
    <body>
        
   <?php
                if(isset($_POST['submit'])){
                     $search=$_POST['search'];
                     $query="SELECT * FROM applog.books WHERE book_isbn='$search' or book_title='$search' or book_isbn='$search' ";
                     $search_query= mysqli_query($con, $query);
                     mysqli_query($con, $query);
                
                 if(!$search_query){
                     die('Query failed'. mysqli_error($con));
                     
                 }            
                 $count= mysqli_num_rows($search_query);
                 if($count==0){
                     //echo "<h1> NO Result </h1>";
                 }else{
                     
                     
                     while($row1= mysqli_fetch_assoc($search_query)){
                         $book_isbn=$row1['book_isbn'];
                         $book_title=$row1['book_title'];
                         $book_author=$row1['book_author'];
                         $book_image=$row1['book_image'];
                     }
                 }
                }
                
                ?>
        
        
        
        
    </body>
        
    
</html>

   