<?php
header('Content-Type:text/plain');
  $allTheStates="Mississippi Alabama Texas Massachusetts Kansas";
  $statesArray= [];
  $states1=explode(' ',$allTheStates);
  $i=0;
  
  foreach($states1 as $state){
	if(preg_match('/xas$/',($state))){
	   $statesArray[$i]=($state);
	   $i=$i+1;
                   print "\n the states that ends in xas:" .$state;
       }
  }
  foreach($states1 as $state){
	if(preg_match('/^k.*s$/i', ($state))){
	  $statesArray[$i]=($state);
	  $i=$i+1;
                  echo "\n the states that begins with k and ends in s:" .$state;
	}
  }
  foreach($states1 as $state){
	if(preg_match('/^M.*s$/', ($state))){
	   $statesArray[$i]=($state);
	   $i=$i+1;
	   echo "\n the states that begins with kM and ends in s:" .$state;
	}
  }
  foreach($states1 as $state){
	if(preg_match('/a$/',($state))){
	   $statesArray[$i]=($state);
	   $i=$i+1;
	 echo "\n The states that ends in a:" .$state;
  }
  }
  
  foreach($statesArray as $element=>$value){
	print("\n". $value. "is the element" .$element);
}
?>
