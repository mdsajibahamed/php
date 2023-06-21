<?php
require "./import.php";
// use function App\area as AppArea;

function area($a,$b,$c ){
  echo "$a  $b $c";
  echo "<br>";
}
 $a = area( "Bangladesh ," ,"Dhaka ,","Mirpur");
 $a = area( "BARISHAL ", null , null);
//  $c = AppArea("");

echo "<br>";
echo "<br>";  


// second founction 

 function sum($a ,$b){
    echo"Result  = $a +$a   = ". ($a+$a);
    echo "<br>";

    echo"Result = $a -$b = " . $a -$b;
 }
 sum ("30","20");

