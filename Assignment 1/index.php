<?php

//Even Number

    echo "Find even numbers between 1 to 20" . "<br>";
    for ($i = 1;$i <=20;$i++){
        if ($i%2==0){
            echo $i. "<br>";
        }
    }

//Multiply


echo "Mutiplication from 22 and 40" . "<br>" . "<br>";

$j=1;
for ($i = 22; $i<=220; $i+=22){
        echo  "22 x " . $j++ . " = " . $i. "<br>";
    }
    echo "<br>";

$j=1;
for ($i = 40; $i<=400; $i+=40){
        echo  "40 x " . $j++ . " = " . $i. "<br>";
    }
    echo "<br>";

//Reverse Number

echo "Take a number and print it reversely till 0." . "<br>" . "<br>";

for ($i = 20; $i >= 0; $i--){
    echo $i . "<br>";
}

// Sum and Substruct

echo "<br>";

echo "Sum" . "<br>" . "<br>";

function SumNum($value1, $value2){
    return $value1 +$value2;
}
echo " Sum : " . SumNum (10,11) . "<br>";

//Substruct

echo "Substruct" . "<br>" . "<br>";

function NumSub($value1, $value2){
    return $value1 - $value2;
}
echo " Sub : " . NumSub(10,11);

?>
