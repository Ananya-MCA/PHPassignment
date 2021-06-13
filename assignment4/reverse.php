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
     $number = $_POST['num']; 
     $s = $number; 
     $sum = 0; 
     $rev=0;
     $rem=0;   
     while( $number>1 )  
  {  
     $rem = $number % 10;
     $rev = $rev * 10 + $rem;
     $sum = $sum + $rem;
     $number = $number / 10;
  } 
     echo "sum of digit of a numbee is: $sum";
     echo "<br/>";
     echo "reverse of a number is $rev";
     echo "<br/>";
     if($s== $rev)  
  {  
     echo " Yes $s an palindrome Number ";  
  }  
     else  
  {  
     echo " $s is not palindrome Number ";  
  }  
 }  
?>
   </body>
   </html>     