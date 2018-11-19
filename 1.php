<?
$x=5;
$z="hello";
function myTest(){
	static $m="not del";//当一个函数完成时，他的所有变量通常都会被删除，有时你希望某个局部变量不要被删除 ，使用static 关键字
	echo $m;
	$m=$m."a";
	// global $x;  //全局变量 在局部调用时用 global声明
 // 	$y=10;
	// echo "$y<br/>";
	// echo $y.$x;
	// echo $GLOBALS['x'];
	// $GLOBALS['x']="cj"; //将所有全局变量存储在一个名为$GLOBALS[index]的数组中 index保存变量的名称，可以在函数内部访问，也可以直接用来更新全局变量
}
myTest();
myTest();
myTest();
myTest();
$e="<h2>2222</h2>";
echo $e;
/**
 * 为什么使用定界符：
 * 		如果用传统的输出方法--按字符串输出的话，肯定有大量的转义字符来对字符串中的引号等特殊字符进行转义，以免出现语法错误。出现定界符
 * 定界符的作用
	1.按照原样，包括换行格式什么的，输出在其内部的东西
	2.在PHP定界符中任何特殊字符都不需要转义
	3.定界符中的PHP变量会被正常的用其值来替换
**/
$f=<<<EOF
sdfa
EOF;
echo $f;
// echo $y;

echo "<br/>$x";

/*
PHP5 数据类型
String
Integer
Float 
Boolean
Array
Object 
Null
 */ 

var_dump($x);
$cars=array("a","b","cc");
var_dump($cars);

define("greeting", "123",true);
echo greeting,Greeting;
echo Greeting;
echo 'greeting',"greeting";
?>