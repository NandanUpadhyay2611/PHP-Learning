<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="radius" placeholder="Enter radius: ">
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $radius=$_POST['radius'];

        $area=3.14*$radius*$radius;
        echo "Area of circle: ". $area;
    }?>
</body>
</html>