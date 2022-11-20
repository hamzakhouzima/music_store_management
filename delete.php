<?php
require 'connexion.php';



 $id=$_GET["deleteid"];



 $request="DELETE FROM products WHERE id='$id'";

 $sql = mysqli_query($connect,$request);
 header("location:index.php");







?>