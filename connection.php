<?php

$host =  "localhost";
$user = "root";
$password = "";
$db = "studentms";


$data = mysqli_connect($host , $user , $password , $db);
if($data){
    echo "done connection";
}
else {
    echo "not connected" .mysqli_connect_error();
}

 ?>




