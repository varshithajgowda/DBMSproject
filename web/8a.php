<form method="POST" action="8a.php">
<p>input value 1:<input type="text" name="val1"/></p>
<p>input value 2:<input type="text" name="val2"/></p>
<p>select Operation:<select name="op">
	<option value="+">Addition</option>
	<option value="-">Subtraction</option>
	<option value="*">Multiplication</option>
	<option value="/">Division</option>
	<option value="%">Remainder</option>
</select>
<input type="submit">
</form>
<?php
if(isset($_POST["val1"])&&isset($_POST["val2"]))
{
  $a=$_POST["val1"];
  $b=$_POST["val2"];
  $opr=$_POST["op"];
switch($opr)
{
   case'+':$c=$a+$b;
	   echo "sum=".$c;
	    break;
   case'-':$c=$a-$b;
	   echo "sub=".$c;
	    break;
   case'*':$c=$a*$b;
	   echo "mul=".$c;
	    break;
   case'/':$c=$a/$b;
	   echo "div=".$c;
	    break;
   case'%':$c=$a%$b;
	   echo "rem=".$c;
	    break;
}
}
?>



