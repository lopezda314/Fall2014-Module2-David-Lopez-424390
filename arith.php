<!DOCTYPE html>
<html>
<head>
<title>Arithmetic Calculations</title>
</head>

<body>
<?php
$first = (int) $_POST['firstnum'];
$second = (int) $_POST['secondnum'];
$operation = $_POST['operation'];
if ($operation == 'add'){
	$sum = $first + $second;
	echo($sum);
}
else if($operation == 'subtract'){
	$diff = $first - $second;
	echo($diff);
}
else if($operation == 'mult'){
	$prod = $first * $second;
	echo($prod);
}
else{
	$quot = $first / $second;
	echo($quot);
}

?>
</body>
</html>