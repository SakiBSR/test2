<?php

// $name = $_GET['username'];
// echo "Wlcome " . $name;


$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$num1 = $_POST['phone'];
$num2 = $_POST['fax'];

echo "Welcome " .$fname." ".$lname;
function multiply($num1,$num2){
    echo "<br>" . "Addition is : " . ($num1*$num2);
}
multiply($num1,$num2);
?>