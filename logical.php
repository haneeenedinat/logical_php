<?php

echo "<h1>Task1</h1>";
$year=2013;
if($year%4==0){
  echo "This year is a leap year";
}
else{
    echo "This year is not a leap year";
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task2</h1>";
$tem=27;
if($tem > 20){
  echo "it is summertime";
}
else{
    echo "it is wintertime";
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task3</h1>";
$num1=2;
$num2=2;
if($num1 == $num2){
  echo ($num1+$num2)*3;
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task4</h1>";
$num1=10;
$num2=10;

if($num1+$num2===30){
    echo ($num1+$num2);
}

else{
    echo 'false';
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task5</h1>";
$num1=20;
if($num1 > 0){
    echo $num1*3;
}

else{
    echo 'false';
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task6</h1>";
$bill=60;
$billnew;
if($bill <= 50){
   $billnew=$bill*2.5;
}

elseif ($bill > 50 && $bill <= 100){
   $billnew=$bill*5;
}

elseif ($bill > 100 && $bill <= 250){
    $billnew=$bill*6.20;
}

else{
     $billnew=$bill*7.50;;
}

echo $billnew;
echo "<br>";
echo "---------------------------------------------------------------------------------------";


echo "<h1>Task7</h1>";
$opar='*';
$num1=10;
$num2=2;
switch ($opar){
    case '+':
     echo $num1+$num2;
     break;
    case '-':
     echo $num1-$num2;
     break;    
    case '*':
      echo $num1*$num2;
      break; 
    case '/':
      echo $num1/$num2;
      break; 
    default:
    echo "error"  ;
}
echo "<br>";
echo "---------------------------------------------------------------------------------------";

echo "<h1>Task8</h1>";
$age=30;
if($age >= 18 ){
    echo 'is  eligible to vote';
}

else{
    echo 'is no eligible to vote';
}

echo "<br>";
echo "---------------------------------------------------------------------------------------";



echo "<h1>Task9</h1>";
$whether=-60;
if($whether > 0 ){
    echo 'positive';
}

elseif($whether < 0){
    echo 'negative';
}

elseif($whether ==0){
    echo 'zero';

}

echo "<br>";
echo "---------------------------------------------------------------------------------------";



echo "<h1>Task10</h1>";
$marks = [60,86,95,63,55,74,79,62,50];
$sum=0;
for($i=0; $i < count($marks) ;$i++){
    $sum=$sum+$marks[$i];
}

$avg=$sum/count($marks);
echo $avg;
echo "<br>";

if($avg <= 100 && $avg >= 90){
    echo 'A';
}

elseif($avg < 90 && $avg >= 80){
   echo 'B';
}

elseif($avg < 80 && $avg >= 70){
    echo 'C';
 }

 elseif($avg < 70 && $avg >= 50){
    echo 'D';
 }

 else{
     echo 'F';
 }
echo "<br>";
echo "---------------------------------------------------------------------------------------";

?>