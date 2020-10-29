<?php
#ANN TRAN
$x = 0;
echo "x outside: $x \n";
for($i = 0; $i <= 5; $i++){
	$x = 1;
	$x = 1+$x;
	echo "x: $x at i loop: $i \n";
	
}
echo "x after the loop: $x\n";

function x() {
$x = 3;
echo "x inside function: $x\n";
return $x; 
}
x();
function y() {
global $y;
$y = 5;
echo "y inside function: $y\n";
return $y; 
}
print($x."\n");
y();
print($y."\n");

$a = array("c","a","t");
$b = array("d","o","g");
$a = $b;
$b[1] = 'u';

for($i = 0; $i < sizeof($a); ++$i){
	echo "Item of A ", $i, "\t", $a[$i], "\n";
}

for($i = 0; $i < sizeof($b); ++$i){
	echo "Item of B ", $i, "\t", $b[$i], "\n";
}

?>


