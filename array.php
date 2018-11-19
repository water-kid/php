<?php
	// 数值数组 ： 带有数字ID键的数组
$arr=array("a","b","c");
	
	// 关联数组 ： 带有指定的键的数组，每个键关联一个值
$arr1=array("perter"=>"35","ben"=>"37","joe"=>"43");
	// 多维数组 ： 包含一个或多个数组的数组


//获取数组的长度
echo count($arr); 

//遍历数值数组
$arrLength=count($arr);
for($x=0;$x<$arrLength;$x++){
	echo $arr[$x];
	echo "<br/>";
}

// 遍历关联数组
foreach ($arr1 as $x => $x_value) {
	# code...
	echo $x."   age is  ".$x_value;
	echo "<br/>";
}


// 升序
sort($arr);
// 降序
rsort($arr);
// 根据关联数组的值，升序
asort($arr1);
// 根据关联数组的值，降序
arsort($arr1);
// 根据关联数组的键，升序
ksort($arr1);
// 根据关联数组的键，降序
krsort($arr1);
var_dump($arr);
var_dump($arr1);

?>