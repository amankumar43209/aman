<?php
    session_start();
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> admin login</title>
    <link rel="stylesheet" type = "text/css" href="style2.css">
</head>
<body>
   
    
    <form action="#" method="POST" autocomplete="off">
        <h1>ADMIN LOGIN</h1>


        <label for="email">Email</label>
    <input type="email" name="email" id="email"  placeholder="email" required >
<br>
<br>
        <label for="password">password</label>
    <input type="password"  name="password" placeholder="password" required >
         <a href="registration.php">Registration</a>
<br>

<br>
    <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>

<?php
  

  
if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    
    // Include file which makes the
    // Database Connection.
    include 'connection.php';   
  
    $username = $_POST["email"]; 
    $password = $_POST["password"]; 
   
          
  
    $sql ="SELECT * FROM sms where  email = '$username'&& password ='$password'  ";
  
    $result = mysqli_query($data, $sql);
  
    $num = mysqli_num_rows($result); 
  
    if($num == 1) {

            $_SESSION['user'] = $username;
            header('location:home.php');
    }  else{
        echo'password not matched';
    }
 
  
}
        
    
?>
