<?php
header("Content-type:text/html;charset=utf-8");

class Site{
	var $url;
	var $title;
	function __construct(){
		echo "构造";
		$this->url="cj";
	}
	function __destruct(){
		echo "销毁";
		$this->url;
	}

	function setUrl($par){
		$this->url=$par;
	}
	# PHP_EOL 换行符 end of life
	function getUrl(){
		echo $this->url.PHP_EOL;
	}
}
$site=new Site();
$site->getUrl();
$site->setUrl("new url");
$site->getUrl();


class Child_Site extends Site{
	# 如果用var 定义，则被视为共有
	var $category;
	public $public="public";
	protected $protected="";
	private $private="";
	function setCate($par){
		$this->category=$par;
	}
	function getCate(){
		echo	$this->category;
	}
	function getUrl(){
		echo "sb";
	}
}

$child=new Child_Site();
$child->getUrl();

interface iTemplate{
	public function setVariable($name,$var);
	public function getHtml($template);
}

class Template implements iTemplate{
	# 常量定义不需要$符号
	const constant="常量";
	private $var=array();
	public function setVariable($name,$var){
		$this->var[$name]=$var;
	}
	public function getHtml($template){
		echo $template;
	}
}

abstract class AbstractClass{
	abstract protected function getValue();
	public function printOut(){
		print $this->getValue();
	}
}



class Foo{
	public static $a="a";
}
$foo=new Foo();
print Foo::$a;
?>
