<?php   
  include 'connection.php';  
  if(isset($_POST["login"]))  {
    print_r($_POST);
    exit;
 
  }
       
  
?>

<html> 
    <head> 
  <title>form  page</title>    
  <link  href="register.php"> 
  <link href="style.css">
  <body><h1>login page</h1> 
    </head> 
</body> 
 <!-- <form  action="register.php" method="post">   -->
<form  action="" method="post"> 
           
         email:<input type="email" name="email" placeholder="Enter your email" required><br><br>
         password:<input type="text" name="password" placeholder="Enter your password" required><br><br> 
      
         <input type="submit" name="login"> 
         <br>  
         <br>  
         <button>exit</button> 
         <br> 
         <br>
         <a href="register.php"> Create New Account </a>    
</form>   
</html>  

