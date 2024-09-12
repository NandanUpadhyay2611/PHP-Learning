<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Name: ">
        <input type="number" name="age" placeholder="Enter age: ">
        <input type="email" name="email" placeholder="Enter email: ">
        <button type="submit" name="submit">Submit</button>

    </form>

    <?php
    if(isset($_POST["submit"])){
        
        $name=($_POST["name"]);
        $age=($_POST["age"]);
        $email=($_POST["email"]);

        echo "<h1>your Name is $name, your age is $age</h1>";
    }
    ?>

</body>
</html>