<?php
namespace MyProject{

## PHP魔术常量
## 不过很多常量都是由不同的扩展库定义的，只有在加载了这些扩展库时才会出现，或者动态加载后，或者在编译时已经包括进去了
## 有八个魔术常量，他们的值随着他们在代码中的位置改变而改变

// 解决乱码
header("Content-type:text/html;charset=utf-8");

## __LINE__  文件中的当前行号
echo "这是第".__LINE__."行";

## __FILE__  文件的完整路径和文件名,如果用在被包含文件中，则返回被包含的文件名
echo "该文件位于".__FILE__;

## __DIR__  文件 文件所在的目录，如果用在被包括的文件所在的目录，他等价于dirname(__FILE__)
echo "xxx".__DIR__."<br/>";

## __FUNCTION__ 函数名称，返回改函数被定义时的名字。。
function test(){
	echo "函数名为".__FUNCTION__."<br/>";
}
test();

## __CLASS__ 类的名称，返回该类被定义时的名字
class test{
	function _print(){
		echo "类名为".__CLASS__."<br/>";
		# __METHOD__  类的方法名  返回  xx类::xx方法。没有类返回方法名
		echo "函数名为".__METHOD__;  
		echo "函数名为".__FUNCTION__."<br/>";

	}
}
$t=new test();
$t->_print();
## __TRAIT__  trait的名字，？？？？
echo __TRAIT__;
}

namespace end{
	## __NAMESPACE__ 当前命名空间，此常量是在编译时定义的
	echo "命名空间：".__NAMESPACE__;

}


### 命名空间  namespace
#解决一下两类问题
#1，用户编写的代码与php内部的类/函数/常量  之间的名字冲突。
#2，为很长的标识符名称创建一个别名(简短的名称)，提高源代码的可读性


?>