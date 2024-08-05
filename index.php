<?php     
 <?php    
 include 'connect.php';
if(isset($_POST["login"])){    
 
      $name = $_POST['fname'];  
      $age = $_POST['age']; 
      $phone = $_POST['phon'];  
           
     $sql="INSERT INTO `student` (`name`, `age`, `phone`) VALUES ('".$name."', '".$age."', '".$phone."')";  
    
     $result=mysqli_query($con,$sql);  

     if($result){    
      echo "succesfully";
 }
 else{  
  echo"error";
 }  
}
  ?>       
        
    <html> 
    <head> 
  <title>form  page</title>    
  <link rel="stylesheet" href="form.css">
  <body><h1>studet id</h1>
    </head> 
</body> 
<!-- <form  action="test2.php" method="post">  -->
 <form  action="" method="post"> 
   
    name:<input type="text" name="fname"><br><br>  
         age:<input type="text" name="age"><br><br> 
        phone:<input type="text"name="phon"><br><br>
         <input type="submit" name="login"> 
</form>   
</body>    
</html>
