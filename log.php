<?php
$logs=[
    "hamza@gmail.com"=>"khouzima",
    "koldwacom"=>"nino",
    "youcode"=>"youcode"

];




session_start();
$_SESSION['username']=$_POST["uname"];
$_SESSION['password']=$_POST["pass"];
foreach($logs as $username=>$password){
    
     if($username == $_SESSION['username'] && $password == $_SESSION['password']){
      
       header('location: data.php');
       break;
     }
     else{

        header('location: index.php');

     }



}











?>