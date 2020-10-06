<?php
//Ann Tran
//Assigning variables 
$a = 10; 
$b = 5; 
$c = 0;
$arr = array(1,2,3,4);
$d = "Apple";

//regular if-else
if($a < $b){ 
	echo "if-else: $b is greater than $a \n\n";
}
else{
	echo "if-else: $a is greater than $b \n\n";
}

//multi condition if
if($a>$b && $a>$c){
	echo "if-multi: $a is greater than $b and $c\n\n";
}

//while loop
while($c <= $b){
	echo "While loop at c $c and b $b, until $c = $b \n";
	$c++;
}

//do-while loop, c <= a
do {
	echo "Do-while loop at c $c and a $a, until $c = $a \n";
	$c++;
}
while ($c <= $a);

//for loop, stop at i < b
for($i = 0; $i <= $b; $i++){
	echo "For i loop: $i \n";
}

//for each loop with in array: 1,2,3,4
foreach ($arr as &$value){
	echo "For each item of array: $value \n";
	$value = $value *2; 
	echo "After *2: $value \n";
}

//switch case
switch ($d){
case "Apple":
echo "Switch from $d to Apple\n";
case "Cherry":
echo "Switch from $d to Cherry\n"; 
break;
case "Durian":
echo "Switch from $d to Durian \n";
}

//break, stops at 8
while ($b < $a){
if ($b == 8){
echo "Break at b: $b \n";
break; 
}
echo "B: $b \n";
$b++;
}

//continue, if b < 9
while ($b <= 15){
if($b > 9){
echo "Continue at b: $b \n";
$b++; 
continue; 
}
echo "B: $b \n";
$b++;
}

$c = 0;
if($b > $c || $c > $a){
	echo"First clause is $b > $c which is true, therefore, it will run. Always care about first clause. Short circuit evaluation \n";
}
if($b < $c && $c > $a){
	echo"First clause is $b < $c which is false, therefore, it will not run. Always care about first clause. Short circuit evaluation \n";
}

?>
