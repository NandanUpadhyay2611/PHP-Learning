<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        echo var_dump(1). "<br>";
        echo var_dump("Nandan")."<br>";
        echo var_dump(3.14)."<br>";  //float
        echo "Object Type: ";
        echo var_dump([1,2,3,4])."<br>";

        echo PHP_INT_SIZE ."<br>";

        echo "Max integer Value is ". PHP_INT_MAX ."<br>";

        $a="dd";

        if(is_int($a)){
            echo "Variable a is an integer ".$a;
        }
        else{
            echo "Variable a is not an integer ".$a;
        }

    ?>
</body>
</html>