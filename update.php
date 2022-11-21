<?php
include 'connexion.php';



 
 if(isset($_POST["update-product"])){
    $id         =   $_POST['id'];
    $name       =   $_POST['product_name'];
    $price      =   $_POST['price'];
    $quantity   =   $_POST['quantity'];
    $type       =   $_POST['type'];

    $request="UPDATE `products` SET `type`='$type',`name`='$name',`price`='$price',`quantity`='$quantity'  where id=$id  ";

    $query = mysqli_query($connect,$request);
   
   
    
    header("location:index.php");

 }









?>