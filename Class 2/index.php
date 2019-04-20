<!-- <?php
	$name = "Sakib";
	echo $name;

	$name = "Mohim";
	echo "Cha Khaba? :".$name;
?> -->

<!--
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Class 2
		</title>
	</head>
	<body>
	<?php $name = "Test" ?>
		<h1 style="color:red;"><?php echo "Hi Sakib How are you?"; ?></h1>
	</body>
</html>-->




<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task1</title>
</head>
<body>
   <?php 
    $firstname = "Sakibur";
    $lastname = " Rahman"
    ?>
   
   
    <h1><?php echo $firstname .$lastname ?></h1>
</body>
</html>-->


<?php 
//$st = "sring";
//var_dump($st);
//
//$a = array('Hi' , 'Hello' , 'H r u');
//var_dump($a);


//Multidimantional

//$a = array(
//    array('hi' , 'how' , 'hello'),
//    array('valo' , 'lage' , 'na')    
//          );
//echo $a[0][0]."<br>";
//echo $a[1][1];

//Asscociate

        $a = array(
        'name' => 'My Name is Sakib',
        'age' => 23,
        'comment' => 'hello'
    );
echo $a['name'];
echo $a['age'];
echo $a['comment'];

$st = "We are here";
$ar = explode(" ", $st);
print_r ($ar[0]);
?>
<br/>
<?php 
$st = "Coders Trust Success Stories";
$arr =explode(" ", $st);
print_r ($arr);
$result= implode(" ", $arr);
echo $result;



?>
<br/>
<?php

$st1 = "Coders Trust Success Stories";
$arr = explode(" ", $st1);
print_r ($arr);
$join = implode(" ", $arr);
echo $join;


?>
<br/>
<?php 
define ("YOYO","Party Party");
echo YOYO;
define ("yoyo","Party Party",true);
echo YOYO;

?>
<br/>

<?php
$a = 20;
echo $a++;
echo "<br>";
echo $a;
?>
<br>
<?php
$a ="";
echo $a;

?>

<?php 
var_dump($_SERVER["SERVER_NAME"]);

?>

<?php
$st2 = "Sakibur Rahman";
$st3 = "Mainur Rahman";
$st4 = "Nur Rahman";

?>



