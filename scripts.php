<?php
include('connexion.php');
session_start();

if(isset($_POST['submit_registration']))  register();

if(isset($_POST['submit_login']))  login();

if(isset($_POST['submit_form'])) add();

if(isset($_POST['update-product'])) update();

if(isset($_POST["delete"])) deleteTask();

if(isset($_POST["logout"])) logout();



function register(){

    require "connexion.php";



if($_SERVER["REQUEST_METHOD"]  == "POST"){
   
  
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
 
   if($password!=$cpassword){
    $_SESSION["confirmation"]="confirmation isn't right";
       header("location:register.php");
     exit();
   }

}


if (empty($_POST["username"])||empty($_POST["email"])||empty($_POST["password"])||empty($_POST["cpassword"]) ){

    $_SESSION['message']="Fill the form !";
    header("location:register.php");
    exit();
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
    $_SESSION['username']=$db_user['username'];
    $_SESSION['password']=$db_user['password'];
    
    header("location:index.php");
   }
   else{
    $_SESSION['log_message']="email or password don't match";
    header("location:login.php");
    exit();
   }
}
else{
    $_SESSION['login_message']="Fill the fields to login  !";

        }

}




function logout(){


  session_destroy();
  $_SESSION = array();

header("location:login.php");

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

function statistics($number){

    require 'connexion.php';
    global $rowcount;
    global $capital;
   if($number==1) {
    $request ="SELECT * FROM products WHERE 1";

    $query=mysqli_query($connect,$request);
    $rowcount = mysqli_num_rows($query);

   }
//    elseif($number==2){
//     $sql = "SELECT COUNT(price) as capital FROM products";

//             $result = mysqli_query($connect, $sql);
//             $data   = mysqli_fetch_assoc($result);
//             echo $data['product'];

//    }
//    elseif($number==3){

// echo 'how';

//    }
    



}
// product_statistics();
// function capital(){
// require 'connexion.php';

    
// $sql="SELECT  SUM(price) FROM products";

// $result=mysqli_query($connect,$sql);

// $count= mysqli_fetch_assoc($result);




// }
// capital();



function add(){

  require "connexion.php";

    $product_name=$_POST["product_name"]; //bring data in post 
    $product_price=$_POST["price"];
    $quantity=$_POST["quantity"];
    $type=$_POST["type"];


    $product_data="INSERT INTO `products`( `type`, `name`, `price`, `quantity`) VALUES ('$type','$product_name', '$product_price','$quantity')  ";
    $execute=mysqli_query($connect,$product_data);

header("location:index.php");


}


function get_product(){

 require "connexion.php";

 
  $get_data="SELECT * FROM products";
  $sql = mysqli_query($connect, $get_data);
  return $sql;
}



   
function update(){


    require 'connexion.php';


    
        $id         =   $_POST['id'];
        $name       =   $_POST['product_name'];
        $price      =   $_POST['price'];
        $quantity   =   $_POST['quantity'];
        $type       =   $_POST['type'];
    
        $request="UPDATE `products` SET `type`='$type',`name`='$name',`price`='$price',`quantity`='$quantity'  where id=$id  ";
    
        $query = mysqli_query($connect,$request);
       
        
        header("location:index.php");


}


// capital();
// function updateProduct()
// {
//     //CODE HERE

    
//     require "connexion.php";
//     $id          = $_POST['id'];
//     $name       = $_POST['product_name'];
//     $price        = $_POST['price'];
//     $quantity    = $_POST['quantity'];
//     $type      = $_POST['type'];
//     // $date        = $_POST['date'];
//     // $description = $_POST['description'];

    

//     //SQL UPDATE
//     $sql = "UPDATE products SET type='$type',name='$name',price='$price',quantity='$quantity'  WHERE id = '$id'";
//     $query=mysqli_query($connect,$sql);

    
//         $_SESSION['message'] = "Task has been updated successfully !";
//         header('location: index.php');
   
// }


// function deleteTask()
// {
//     //CODE HERE
//     //SQL DELETE  
//     require "connexion.php";
//     $id = $_POST['id'];
   
//     $request="DELETE FROM products WHERE id=$id";

//     $query=mysqli_query($connect,$request);

//     if($query){
//         $_SESSION['message'] = "Task has been deleted successfully !";
//     header('location: index.php');
//     }
    

   
// }

?>
