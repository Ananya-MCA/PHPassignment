<?php
if(isset($_GET['operation'])){
	$x = $_GET['num1'];
	$y = $_GET['num2'];
	$op = $_GET['operation'];
switch ($op) {
	case 'add': $res = $x + $y;
	break;
	case 'sub': $res = $x - $y;
	break;
	case 'mul': $res = $x * $y;
	break;
	case 'div': $res = $x / $y;
	break;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>arithmatic operation</title>
</head>
 <body>
    
    <form action="<?= $_SERVER['PHP_SELF'] ?>"method="get">
	<div>
    <label for="num1">number 1</label> 
	<input type="number" name="num1" value="<?= $x ?>" id="num1">
	</div>
    <br>
    
    <div>
    <label for="num2">number 2</label> 
	<input type="number" name="num2" value="<?= $y ?>" id="num2">
    </div>
    <br>
    
    <div>
    <label for="result">Result</label2> 
	<input type="number"  id="result" value="<?= $res ?>" disabled>
	</div>
    <br>
	<div>
    
    <input type="submit" name="operation" value="add">
    <input type="submit" name="operation" value="sub">
    <input type="submit" name="operation" value="mul">
	<input type="submit"  name="operation" value="div">
	</div>
    </form>
    </body>
	</html>