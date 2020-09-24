<?php
//ANN TRAN
//assign
$str = "This is a string";
$int = 2; 
$flo = 3.14; 
$boo = true;
$fboo = false; 
$floT = "1.23456";
$arr = array("a","b","c");
$dict = array("a"=>"1","b"=>"2","c"=>"3");

//Print and test
echo $str, "\n\n";
echo "Integer: ", $int, "\n\n";
echo "Float: ", $flo, "\n\n";
echo "Boolean for true: ", $boo, "\n\n";
echo "Boolean for false: ", $fboo, "\n\n";
for($i = 0; $i < sizeof($arr); ++$i){
	echo "Item of array ", $i, "\t", $arr[$i], "\n\n";
}
foreach($dict as $key=>$val) {
    echo "Items of dictionary: ", "$key=>$val", "\n\n";
}

//Experiment 
echo "Int + Float: ", $int+$flo, "\n\n"; //Become a float! 

array_push($arr,$int);
echo "After adding variable int into the array \n"; 
for($i = 0; $i < sizeof($arr); ++$i){
	echo "Item of array ", $i, "\t", $arr[$i], "\n\n";
} //An array can carry different type of data 

$floCon = floatval($int); 
echo "After convert from interger to float \t";
echo sprintf("%.2f", $floCon);
echo "\nFrom string to float: ", floatval($floT), "\n\n"; 
echo "From string to string to int: ", intval($floT), "\n\n";
echo "From float to string: ", strval($flo), "\n\n"; 
echo "From int to string: ", strval($int), "\n\n";
//can convert from str-int, float-int, int-float, str-float, int-str, float-str

$x = "5" + 6; 
echo $x, "\n\n"; 

$a = 10; 
$b = "2"; 
echo $a+$b;
?>
