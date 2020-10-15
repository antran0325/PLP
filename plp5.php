<?php 

#ANN TRAN 
#MULTIPLICATION 
function multiply($a, $b) {
$c = $a * $b; 
echo "$a x $b = $c \n"; 
return $c; 
}

#EXPOPNENTIAL 
#a^b
function expo($a, $b){
if($b == 1){
return $a; 
}
elseif ($b == 0){
return 0; 
}
else{
$c = $a * expo($a, $b-1);
return $c;
}
}

#find the beginning and last letter of a word 
function beginEndFind(string $word){
$first = $word[0];
$end = substr($word, -1);
return array('first' => $first, 'end' => $end);
}

#a+1 pass by value
function addOne ($a){
echo "a before adding 1 in the addOne function: $a\n";
$a++;
echo "a in addOne: $a\n";
}

#a+1 pass by reference
function addOneRef (&$a){
echo "a before adding 1 in the addOneRef function: $a\n";
$a++;
echo "a in addOneRef: $a\n";
}

#TEST MULTIPLICATION
$a = 3; 
$b = 4; 
$multi = multiply($a, $b);


#test exponential
$power = expo($a, $b);
echo "$a^$b= $power \n";

#Test Split string
$startEnd = beginEndFind("Ann");
echo 'First letter: ' . $startEnd['first']. "\n"; 
echo 'Last letter: ' . $startEnd['end']. "\n"; 

#Test a+1 
echo "a in main before pass to addOne: $a\n"; 
addOne($a); 
echo "a in main: $a\n"; 
#pass by value as default

#Test a+1 reference 
echo "a in main before pass to addOneRef: $a\n"; 
addOneRef($a); 
echo "a in main: $a\n"; 
#pass by reference with & in parameter
?>
