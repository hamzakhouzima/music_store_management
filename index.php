<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post"  >
<input type="number" name="number1"/>
<input type="number" name="number2"/>

<input type="submit" name="submit"/>
</form>
<?php
if(isset($_POST['submit'])){

$number1=$_POST['number1'];
$number2=$_POST['number2'];
$sum = $number1 + $number2 ;

echo $sum;



}


?>
</body>
</html>