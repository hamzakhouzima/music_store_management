<?php
include('connexion.php');
session_start();

if(isset($_POST['submit_registration']))  register();






function register(){

    require "connexion.php";

    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    print_r($_POST)."<br>";

    $query="INSERT INTO user_infos(username, email, password) VALUES ( '$username','$email','$password')";
    $exe=mysqli_query($connect,$query);


}








?>