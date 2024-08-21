<!-- 
$g1=89;
$g2=90;
$g3=99;
$g4=87;
$g5=89; -->

<?php
$grades=[89,90,99,87,89];
$total=0;
for($i=0;$i<5;$i++){
    $total+=$grades[$i];
}

echo "Percentage: ". $total/5;

?>