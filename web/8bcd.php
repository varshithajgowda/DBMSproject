<html>
<head>
<title>lab8 progrm</title>
</head>
<body>
<?php
 $a=array(array(1,2,3),array(4,5,6),array(7,8,9));
 $b=array(array(7,8,9),array(10,11,12),array(13,15,16));
 $m=sizeof($a);
 $n=sizeof($a[0]);
 $p=sizeof($b);
 $q=sizeof($b[0]);
 echo "the order of matrix A is:".$m ." X ". $n."</br>";
 echo "the order of matrix B is:".$p ." X ". $q."</br>";
 echo "the input matrix A is:"."</br>";
  for($i=0;$i<$m;$i++)
   {
     for($j=0;$j<$n;$j++)
         echo $a[$i] [$j]." ";
         echo "</br>";
   }
 echo "the input matrix B is:"."</br>";
  for($i=0;$i<$p;$i++)
   {
     for($j=0;$j<$q;$j++)
         echo $b[$i] [$j]." ";
         echo "</br>";
   }
 echo "the transpose of matrix A is:"."</br>";
   for($i=0;$i<$n;$i++)
    {
      for($j=0;$j<$m;$j++)
          echo $a[$j][$i]." ";
          echo "</br>";
   }
 echo "the transpose of matrix B is:"."</br>";
   for($i=0;$i<$q;$i++)
    {
      for($j=0;$j<$p;$j++)
          echo $b[$j][$i]." ";
          echo "</br>";
   }
 echo "the product of two matrices is:"."</br>";
     if($n!=$p)
      {
        echo "Multiplication is not possible</br>";
        exit();
       }
  $d=array();
   for($i=0;$i<$m;$i++)
    {
      for($j=0;$j<$q;$j++)
       {
         $d[$i][$j]=0;
           for($k=0;$k<$n;$k++)
             $d[$i][$j]=$d[$i][$j]+$a[$i][$k]*$b[$k][$j];
        }
   }
 echo "the product of 2 matrices is:"."</br>";
   for($i=0;$i<$m;$i++)
    {
      for($j=0;$j<$q;$j++)
          echo $d[$i][$j]." ";
          echo "</br>";
    }
$c=array();
 for($i=0;$i<$m;$i++)
     for($j=0;$j<$n;$j++)
        $c[$i][$j]=$a[$i][$j]+$b[$i][$j];

echo "the sum of matrices is</br>";
  for($i=0;$i<$m;$i++)
   {
     for($j=0;$j<$n;$j++)
         echo $c[$i][$j]." ";
         echo "</br>";
   }
