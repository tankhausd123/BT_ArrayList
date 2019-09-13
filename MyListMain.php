<?php
include "MyList.php";
$array = [1,2,3,4,5,6,7,8,9];
$arr = new MyList($array);

var_dump( $arr->addLastArray(23));
var_dump($arr->addLastArray(30));



