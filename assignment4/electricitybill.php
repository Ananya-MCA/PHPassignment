<html>  
<body>  
<form method="post">  
Enter the prevoius reading:  
<input type="number" name="num1">
Enter the current reading:
<input type="number" name="num2">
<input type="submit" name="submit" value="Submit">   
</form>
<?php
     if($_POST)  
 {   
     $prev = $_POST['num1']; 
     $current = $_POST['num2']; 
     $unit=$current-$prev; 
     $total=0;   
     if( $units <=100)
     {  
      $total=$units*3;
  }
  elseif ($units<=200){
    $total=(100*3)+($units-100)*4;
  } 
     elseif($units<=300) {
       $total=(100*3)+(100*4)+($units-200)*5;
     }
     elseif ($units>300){
      $total=(100*3)+(100*4)+(100*5)+($units-300)*6;
     }
     echo "previous reading:".$prev;
     echo "current reading:".$current;
   echo "units consumed:".$units;
   echo "the payable amount:".$total;
   }
   ?>   