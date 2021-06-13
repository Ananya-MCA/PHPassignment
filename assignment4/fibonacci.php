<html>  
<body>  
 <form method="post">  
 Enter the Number:  
  <input type="number" name="num" value="<?= $s ?>">
  <input type="submit" value="Submit">   
  </form>
  <?php
  if($_POST)
 {
 $num = $_POST['num'];
 $i=3;
 $n1=0;
 $n2=1;
 $last=$n2;
 echo "fibbonacci series first $num numbers";
 echo $n1 .' '.$n2.' ';
 while($i<=$num)
 {
 	$n3=$n1+$n2;
 	echo $n3.' ';
 	$n1= $n2;
 	$n2=$n3;
 	$i=$i+1;
 }
    $count =0;
    $num =2;
    $n2=1;
    $n3=2;
    echo "prime number in the given fibonacci numbers are";
    while($count < $last)
{
    $div_count=0;
    while($num == $n3){
    if($last>2){
	for($i=1;$i<=$num;$i++){
    if(($num%i)==0){
	$div_count++;
}
}
    if($div_count<3){
	echo $num." ";
}
}
    $n1 = $n2;
    $n2 = $n3;
    $n3 = $n1 + $n2;
}
   $num = $num+1;
   $count = $count+1;	
}
}
?>