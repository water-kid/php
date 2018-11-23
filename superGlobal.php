<?php
echo "sfsad";

## $GLOBALS是PHP的一个超级全局变量组，在一个PHP脚本的全部作用域中都可以访问
# $GLOBALS 是一个包含了全部变量的全局组合数组，变量的名字就是数组的键
$x=75;
$y=25;
function addition(){
	// global $x,$y;
	// echo $x+$y;
	echo "<br />";
	echo $GLOBALS["x"]+$GLOBALS["y"];
	echo "<br />";
}
addition();

## $_SERVER 是一个包含了诸如头信息(header)，路径(path),以及脚本位置(script locations)等等信息的数组，这个数组中的项目由Web服务器创建，不能保证每个服务器都提供全部项目，服务器可能会忽略一些，或者提供一些没有在这里列举出来的项目
#
// $_SERVER['PHP_SELF']  当前执行脚本的文件名
// 。。。。等等
echo $_SERVER['PHP_SELF'];
echo "<br />";
echo $_SERVER['SERVER_NAME'];
echo "<br />";
echo $_SERVER['HTTP_HOST'];
echo "<br />";
// echo $_SERVER['HTTP_REFERER'];  报错了
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br />";
echo $_SERVER['SCRIPT_NAME'];

## $_REQUEST 用于收集HTML表单提交的数据
## $_POST 被广泛引用于收集表单数据
## $_GET 被广泛用于收集表单数据
echo "<br />";

// echo $_GET['username'];
echo $_REQUEST['password'];
echo $_POST['username'];

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<input type="text" name="username">
	<input type="password" name="password">
	<input type="submit" name="" value="submit">
</form>