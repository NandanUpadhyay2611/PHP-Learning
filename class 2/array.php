<?php
$x=["Zen","Maruti","Fiat"];
echo $x[0];
echo "<br>";
echo $x[1];
echo "<br>";
echo $x[2];
echo "<br>";

$nums=[1,2,3,4,22,1,0];
$mini=PHP_INT_MAX;
$maxi=PHP_INT_MIN;
for($i=0;$i<(sizeof($x));$i++){
    if($nums[$i]>$maxi){
            $maxi=$nums[$i];
    }
    else if($nums[$i]<$mini) $mini=$nums[$i];
}

echo "Max element in the array Nums: ".$maxi."<br>";
echo "Min element in the array Nums: ".$mini."<br>";
?>