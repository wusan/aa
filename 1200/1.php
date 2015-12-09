<?php
	date_default_timezone_set('PRC');//设置时间
?>
<?php
	//echo phpinfo();//输出php配置信息
	//print_r($_ENV);//系统环境变量
	echo "<br>";
	echo date('Y-m-d H:i:s');//输出时间。可用于 用户登录 注册时间。
	echo __FILE__;//打印当前文件的路径和文件名
?>
<?php
	//数字遇到字符串。类型转换
	$a=10;
	$b="字符串";
	$e=$a+$b;
	$f=$b+$a;
	echo "<br>";
	echo "自动转换:".$e."<p>";
	echo "先str后num:".$f."<p>";
	echo "强制转换:".(string)$e."<p>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<pre>
1.date(format);
	format参数：
		Y:4位完整年份
		w：星期中的第几题，数字表示，返回值为0-6
		t:月份的天数
		s:秒数,00-59
		m:月份，值为01-12
		L:是否是闰年，闰年返回1，否则为0
		i：分钟，值00-59
		G:24小时格式,0-23
		d：月份的第几天.01-31
2.可变变量：动态改变一个变量名称。工作原理：该变量的名称由另外一个变量的值决定。在变量前多加一个"$"符号。	
3.使用转义字符输出特殊字符。如\n \f \r \t等。
4.常量:不可改变的值。
  define()函数定义常量；constant()动态获取常量值，defined()判断一个常量是否已定义。
  get_defined_constants()函数获取所有当前已经定义的常量。
  define(name,val[,大小写是否敏感 true不敏感]);
</pre>
<?php
$str_name="yc";
$yc="deng";//可变变量
echo "普通变量：".$str_name."可变变量".$$str_name."<p>";
echo "\"php语言\"" ."<p>";

define('PI',3.1415926);
define('PI_r',3.15);
if(!defined('PI_6') ){
	echo '常量PI_6未定义';
}
//print_r( get_defined_constants() ) ;显示所有的常量。
?>