<?php

$mayvar = "hello world";

echo $mayvar;

echo "<br>";

echo strtoupper("$mayvar");

echo "<br>";

echo strtolower("$mayvar");

echo "<br>";

echo trim("$mayvar");

echo "<br>";

echo strlen(trim($mayvar));  

echo "<br>";

echo str_replace("world","hello",$mayvar);  

echo "<br>";

echo $mayvar;

echo "<br>";


// 0 index  other 5 word deleted//

echo substr($mayvar , 0 ,5);

echo "<br>";




$test1 ="sayan";
$test2 ="ghosh";

echo $test1 . $test2;

echo "<br>";

$test1 ="sayan";
$test2 ="ghosh";

echo $test1 . "ghosh";

echo "<br>";


$new1=["sayan","mainak","sanju","subham"];

// $new2 = array("sayan","mainak","sanju","subham");

print_r($new1) ;

echo "<br>";
echo "<br>";


$cars =["Name"=>"tata","model"=>"punch","year"=>"2024"];

echo $cars["Name"];



// name shorting//


$name =array("sayan","mainak","arnab","shubham");

print_r()

?>