<?php
if($_POST){
	$names=$_POST['names'];
	$price = $_POST['price'];
	$nme =explode(',', $names);
	$x= count($nme);
	$prc = explode(',', $price);
	echo '<body> <table border="1"> <tr><th>item name</th><th>item price</th></tr>';
	for($i=0;$i<$x;$i++){
	 echo "<tr><td>{$nme[$i]}</td><td>{$prc[$i]}</td><tr>";}
echo "<tr>";
echo "</table>";
$total=0;
for($i=0;$i<$x;$i++){
	$total=$total+$prc[$i];
}
echo 'total amount is:'.$total;
$max=max($prc);
$key=array_search($max,$prc);
echo "<br/>";
echo 'costliest item is:' .$nme[$key];
$min= min($prc);
$key=array_search($min,$prc);
echo "<br/>";
echo 'cheapest item is:' .$nme[$key];
}
?>
<form method="post" action="item.php">
	<input type="submit" name="submit" value="back"/>
</form>
