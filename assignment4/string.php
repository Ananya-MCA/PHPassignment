
<html>  
<body>  
<form method="post"> 
<input type="text" name="txt" placeholder="Enter the string"/>
	<input type="radio" name="string" value="reverse"/>Reverse
	<input type="radio" name="string" value="length"/>string length
	<input type="radio" name="string" value="substring"/>substring
	<input type="radio" name="string" value="upper"/>uppercase
		<input type="radio" name="string" value="lower"/>lowercase
			<input type="radio" name="string" value="words"/>number of words
	<input type="submit" name="submit" value="submit"/>
</form>
<?php
if($_POST){
	$string=$_POST['string'];
	$txt=$_POST['txt'];
	switch($string){
		case 'reverse':$rev=strrev($txt);
		echo 'the reversed string of' . $txt.  'is' .$rev;
break;
	case 'length':$len=strlen($txt);
		echo 'the lenght of the string'.$txt.'is'.$len;
break;
	case 'substring':$sub=substr($txt,5,13);
		echo 'the substring of the string'.$txt.'is'.$sub;
break;
	case 'upper':$ucase=strtoupper($txt);
		echo 'The string'.$txt.'in uppercase is:'.$ucase;
break;
	case 'lowercase':$low=strtolower($txt);
		echo 'the string'.$txt.'in lowercase is:'.$low;
break;
	case 'words':$w=str_word_count($txt);
		echo 'the number of words in the string'.$txt.'is'.$w;
break;
}
}
	?>
