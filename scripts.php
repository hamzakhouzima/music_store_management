<?php
include('connexion.php');
session_start();

if(isset($_POST['submit_registration']))  register();

if(isset($_POST['submit_login']))  login();

if(isset($_POST['submit_form'])) add();

function register(){

    require "connexion.php";



if($_SERVER["REQUEST_METHOD"]  == "POST"){
    // $username=validate_registre_form($_POST["username"]);
    // $email=validate_registre_form($_POST["email"]);
    // $password=validate_registre_form($_POST["password"]);
      
  
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    // print_r($_POST)."<br>";

}


if (empty($_POST["username"]&&$_POST["email"]&&$_POST["password"]&&$_POST["cpassword"])){

    $_SESSION['message']="Fill the form !";
    
}
else{
    $query="INSERT INTO user_infos(username, email, password) VALUES ( '$username','$email','$password')";
    $exe=mysqli_query($connect,$query);
    header("location:login.php"); 
    return true;
        }

}

function login(){
 require 'connexion.php';

$email=$_POST["login_email"];
$password=$_POST["login_password"];

  $login_request="SELECT * FROM user_infos WHERE email= '$email' AND password='$password' ";
  $execute=mysqli_query($connect,$login_request);

  if ( mysqli_num_rows($execute)>0){
    
    $db_user=mysqli_fetch_assoc($execute);
   if($db_user['email']=== $email || $db_user['password']===$password ){


    $_SESSION['email']=$db_user['email'];
    $_SESSION['password']=$db_user['password'];
    header("location:index.php");
   }
   else{
    $_SESSION['log_message']="email or password don't match";


   }


    
    return true;
}
else{
    $_SESSION['login_message']="Fill the fields to login  !";
    // header("location:login.php"); 

        }

}





function validate_registre_form($input){

    if(!empty($_POST["username"] || $_POST["email"] || $_POST["password"] || $_POST["cpassword"] )){
       $input = htmlspecialchars($input);
       $input = trim($input);
       $input = stripslashes($input);
       return array( $input,true); 

       }
    

   }

function validate_login_form($input){

    if(!empty( $_POST["login_email"] || $_POST["login_password"]  )){
      $input = htmlspecialchars($input);
       $input = trim($input);
       $input = stripslashes($input);
       return array( $input,true); 

       }
    

   }



function add(){

  require "connexion.php";

    $product_name=$_POST["product_name"]; //bring data in post 
    $product_price=$_POST["product_price"];
    $quantity=$_POST["quantity"];
   if(isset($_POST)){

    header("location:index.php");

   } 




    $product_data="INSERT INTO `products`(  `name`, `price`, `quantity`) VALUES ('$product_name', $product_price,$quantity)  ";
    $execute=mysqli_query($connect,$product_data);




}


   




?>



<!-- function loginAdmin() {

global $conn;
//CODE HERE 
$email = $_POST['email'];
$password = $_POST['password'];

//Form validation
if(empty($email) || empty($password)){
    $_SESSION['message1'] = "Please fill all required fields!!";
    header('location: login.php');
}
else{

    //SQL SELECT
    $sql = "SELECT * FROM admins WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){

        $admin = mysqli_fetch_assoc($result);
        if ($admin['email'] === $email || $admin['password'] === $password) {

            $_SESSION['message'] = "Logged in!";
            header('location: login.php');

            //Create session to store 
            $_SESSION['name'] = $admin['name'];
            $_SESSION['email'] = $admin['email'];
            $_SESSION['id'] = $admin['id'];

            header('location: index.php');
        }
        else{
            $_SESSION['message1'] = "Incorect password!!";
            header('location: login.php');
        }
    }
    else{
        $_SESSION['message1'] = "Your email doesn't match with our records!";
        header('location: login.php');
    }
}
} -->
