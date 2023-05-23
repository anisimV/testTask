<?php 
//вар 1
$arr = array("0"=>"Anisim", "1"=>"Verbanov", "2"=>"29");

for($i=count($arr)-1; $i>=0; $i--){
    $arr[] = $arr[$i];
    unset($arr[$i]);
}
print_r($arr);

// вар 2

$arr = array("name" => "Anisim", "surname" => "Verbanov", "age" => "29");
$arr_key=array_keys($arr);
$temp=[];
for($i=count($arr_key)-1; $i>=0; $i--){
    $key = $arr_key[$i];
    $temp[$key] = $arr[$key];
}
$arr=$temp;
print_r($arr);
