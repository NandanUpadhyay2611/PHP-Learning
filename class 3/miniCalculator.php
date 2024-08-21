<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
    body{ background-color:beige}
    </style>
</head>
<body>
    <h1>MINI CALCULATOR</h1>
    <form action="" method="post">Enter first no. <input type="number" name="num1">
    Enter second no. <input type="number" name="num2">
    <button type="submit" name="operation" value="add">+</button>
    <button type="submit" name="operation" value="sub">-</button>
    <button type="submit" name="operation" value="res">Result</button>
</form>

<?php
    if(isset($_POST['operation'])){
      $num1=$_POST['num1'];
      $num2=$_POST['num2'];
      $operation=$_POST['operation'];

      if($operation=="add"){
        $res=$num1+$num2;
        echo "Sum is: ". $res;
      }
     
    }?>
</body>
</html>