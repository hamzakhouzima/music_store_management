<?php
include('connexion.php');
session_start();

if(isset($_POST['submit_registration']))  register();

if(isset($_POST['submit_login']))  login();



function register(){

    require "connexion.php";

$username=$email=$password="";


if($_SERVER["REQUEST_METHOD"]  == "POST"){
    $username=validate_registre_form($_POST["username"]);
    $email=validate_registre_form($_POST["email"]);
    $password=validate_registre_form($_POST["password"]);
      
  
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    // print_r($_POST)."<br>";

}


if (validate_registre_form([1])){


    $query="INSERT INTO user_infos(username, email, password) VALUES ( '$username','$email','$password')";
    $exe=mysqli_query($connect,$query);
    header("location:login.php"); 
    return true;
}
else{
    $_SESSION['message']="Fill the form !";
        }

}

function login(){
 require 'connexion.php';

$email=$_POST["login_email"];
$password=$_POST["login_password"];

  $login_request="SELECT COUNT(email) FROM user_infos WHERE email= '$email' AND password='$password' ";

  $execute=mysqli_query($connect,$login_request);
  $db_array=mysqli_fetch_assoc($execute);
  if (validate_login_form([1])){


    $exe=mysqli_query($connect,$query);
    header("location:index.php"); 
    return true;
}
else{
    $_SESSION['login_message']="Fill the fields to login  !";
    // header("location:login.php"); 

        }

}





function validate_registre_form($input){

    if(!empty($_POST["username"] && $_POST["email"] && $_POST["password"] && $_POST["cpassword"] )){
       $input = htmlspecialchars($input);
       $input = trim($input);
       $input = stripslashes($input);
       return array( $input,true); 

       }
    

   }

function validate_login_form($input){

    if(!empty( $_POST["login_email"] && $_POST["login_password"]  )){
       $input = htmlspecialchars($input);
       $input = trim($input);
       $input = stripslashes($input);
       return array( $input,true); 

       }
    

   }





?>