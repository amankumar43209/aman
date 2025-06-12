


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
   
    
    <form action="#" method="POST">
        <h1> ADMIN REGISTERATION</h1>


        <label for="Username">Username</label>
    <input type="text" name="username" id="username"  placeholder="Username" required >

        <label for="password">password</label>
    <input type="password"  name="password" placeholder="password" required >

  <label for="email">email</label>
    <input type="email"  name="email" placeholder="email" required >
     <a href="login.php">Login</a>
<br>
    <input type="submit" value= "Submit" name="registration">
<br>

    </form>
 

</body>
</html>

<?php


    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Include file which makes the
    // Database Connection.
    include 'connection.php';   
  
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 
    $email = $_POST["email"];
          
  
    $sql = "insert into sms value ('$username', '$password','$email')";
  
    $result = mysqli_query($data,$sql);

  
  if($result){
        echo 'Data insearted into database';
   }
       else{
       echo 'Failed';
      }
  }
?>