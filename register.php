
<?php   
  include 'connection.php';  
  if(isset($_POST["login"]))  {
//    print_r($_POST);
//     exit;  

      $name = $_POST['name'];  
      $mobile = $_POST['mobileno']; 
      $email = $_POST['email']; 
      $password = $_POST['password'];  
      $confirm_password = $_POST['confirm_password']; 
  
      $sql="INSERT INTO `user` (`name`, `mobile_no`,`email`, `password`) VALUES ('".$name."', '".$mobile."', '".$email."','".$password."')";

       
      $result=mysqli_query($con,$sql);    
      if($result){   
        echo "successfully";
      } 
      else{   
        echo"error";
      } 
    }
?>
 
 <html> 
    <head> 
  <title>Register</title>  
  <link href="style.css">   
  <body><h1>Register page</h1>
    </head> 
</body>  
        <form action="" method="post" onclick="data()" >
           name:<input type="text" name="name" placeholder="Enter your name" required><br><br> 
           mobile number:<input type="number" name="mobileno" maxlength="10" minlength="10"  placeholder="Enter your mobile number" required><br><br>  
           email:<input type="email" name="email" placeholder="Enter your email" required><br><br>  
           password:<input type="text"name="password" placeholder="Enter your password" required><br><br>   
           confir password:<input type="text" name="confirm_password" placeholder="Enter your confirm password" required><br><br>   
         <input type="submit" name="login"> 
         <br>
         <br>
         <a href="index.php">Already Exist</a>
</form>  
 
</html>  