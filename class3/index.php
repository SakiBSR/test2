<!--
<?php

$str = "How many Number Here";

$chk = getLength($str);
if($chk == true){
    echo "Even";
}else{
    echo "odd";
}

function getLength($name){
    if(strlen($name)%2 == 0){
        return true;
    }else{
        return false;
    }
}

?>
<br>
-->

<!--
<?php

$name = "Sakib";

function getStringValue($x){
    return $x;
}

echo "Welcome " . getStringValue($name) . "<br/>";

$a = 10;
$b = 30;

function add($a,$b){
    return $a+$b;
}

echo add($a,$b);

?>
-->

<!--Loop-->

<?php
for($i=0;$i<=10;$i++){
    echo $i . "<br>";
}
?>
<!--Assend Loop-->

<?php
$j = 1;
for($i=5; $i<=50; $i+=5){
    echo "5 * " . $j++ . " = ". $i . "<br>";
}
?>
<!--Reverese loop-->
<?php

for($i=20; $i>10; $i--){
    echo $i . "<br>";
}
?>
<?php
$k = 12;

do{
    echo "bye bye" . "<br>";
}while($k == 4)

?>

<?php

for($i=0;$i<10;$i++){
    for($j=0;$j<20;$j++){
        echo $i." ".$j."<br>";
    }
}

?>


<?php
for($i = 10; $i<= 20; $i++){
    for($j = 1; $j<=10; $j++){
        echo $i . " x ". $j . " = ". $i * $j. "<br>";
    }
    echo "<br>";
}
?>

<br>

<?php

$sum = 0;
for($i = 12; $i <= 25; $i++){
    $sum = $sum + $i;
}
echo $sum;



?>
<br>

<?php

function recurr($value){
    echo "Windows is Shutting Down!!.....$value<br>";
    if($value == 0){
        exit();
    }
    $value--;
    recurr($value);
}
recurr(10);

?>

<?php

function addSum($value,$sum){
    $sum = $value + $sum;
    if($value == 25){
        echo $sum;
        exit();
    }
    $value++;
    addSum($value,$sum);
}
addSum(12,0);

?>


<?php

$string = "Sakib,Akib,Benedward,Senti";
$arr = explode(' ',$string);
$shortest_arrey = array();

$length = 10000;
for ($i=0; $i < count($arr); $i++){
    $l = $starlen($arr[$i]);
    if($l <= $length){
        $length = $l;
        array_push($hortest_array, $arr[$i]);
    }
}
print_r($shortest_array);


?>

























