<?php

$code=0;
$diff=0;

$a=$_GET['a'];
$b=$_GET['b'];


if (is_null($a) or empty($a)) { 
$status="param A is missing";
$code=1; 
} else if (is_null($b) or empty($b)) { 
$status="param B is missing";
$code=2;
} else if (!is_numeric($a)) {
$status="param A is not a number";
$code=3;
} else if (!is_numeric($b)) {
$status="param B is not a number";
$code=4;
} else { $diff = $a - $b; $status="OK";}

header ('Content-type: application/json');
#echo ('{"Status":"'.$status.'" , "Code":'.$code.', "Result":'.$diff.'}');

echo json_encode(array('Status'=>$status,'Code'=>$code,'Result'=>$diff)), "\n";


?>
