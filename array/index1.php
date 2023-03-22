<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", "; //$cars[1] . " and " . $cars[2] . ".";
echo "I like " . $cars[1] . "," ;
echo "I like " . $cars[2] . "," ;

//array using loop

$cars = array("Volvo", "BMW", "Toyota","hondai");
$arrlength = count($cars);

 for($x = 0; $x < $arrlength; $x++) {
   echo $cars[$x];
   echo "<br>";
 }



// $cars =["Volvo", "BMW", "Toyota","hondai"];
// $arrlength = count($cars);
// $i=123;
// while ($i <= $arrlength)
// {
//   echo $cars[$i];
//   $i++;
// }
?>