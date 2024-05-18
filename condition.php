<?php
//if & if...else
$money = false;
    if($money)
    {
        echo "Go trip";
    }
    else
    {
        echo "Sleep";
    }
    echo"<br>";

//nested condition

$age = 20;
if($age){
    if($age > 18){
        echo"You can marry!!!!";
    }else{echo"You can't marry!!!!";}
}

//switch

$color = "yellow";
switch($color){
    case"red":
        echo"Your favorite color is red!!!";
    case"green":
        echo"Your favorite color is green!!!";
    case"blue":
        echo"Your favorite color is blue!!!";
    default:
        echo"Your favorite color is red, green, nor blue!!!"; 
}
