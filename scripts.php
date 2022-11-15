<?php
include('connexion.php');
session_start();

if(isset($_POST['submit_registration']))  register();





function register(){

    require "connexion.php";

$username=$email=$password="";


if($_SERVER["REQUEST_METHOD"]  == "POST"){
    $username=validate_form($_POST["username"]);
    $email=validate_form($_POST["email"]);
    $password=validate_form($_POST["password"]);
      
    
    
    
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    // print_r($_POST)."<br>";



}



  
if (validate_form([1])){


    $query="INSERT INTO user_infos(username, email, password) VALUES ( '$username','$email','$password')";
    $exe=mysqli_query($connect,$query);
    header("location:login.php");
    return true;
}
else{
   
   echo 'fill the form';


}

}

function validate_form($input){

    if(!empty($_POST["username"] && $_POST["email"] && $_POST["password"] && $_POST["cpassword"] )){
       $input = htmlspecialchars($input);
       $input = trim($input);
       $input = stripslashes($input);
       return array( $input,true);   
       }

   }





?>