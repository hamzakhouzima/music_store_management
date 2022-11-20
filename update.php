<?php
include 'connexion.php';



 $id=$_GET["updateid"];
 if(isset($_POST["update-product"])){
 $name       = $_POST['product_name'];
 $price      = $_POST['price'];
 $quantity   = $_POST['quantity'];
 $type       = $_POST['type'];

 }

 $request="UPDATE `products` SET `type`='$type',`name`='$name',`price`='$price',`quantity`='$qunatity'  where id=$id  ";

 $query = mysqli_query($connect,$request);


 
 header("location:index.php");







?>