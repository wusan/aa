<?php
	date_default_timezone_set('PRC');//设置时间
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
   //数字加解密
	echo "<form action='' method='post'>";
	echo "数字口令:<input name='text'><input name='sub' type='submit' value='sure'>";
	echo "</form>";
	define('PI',3.1415926);
	function E2($str){
		return $str=$str+PI;
	}
	function E3($str){
		return $str=$str-PI;
	}
	if($_POST[sub]){
		echo "加密口令:".E2($_POST[text])."<br>";
		$_SESSION[pwd]=E2($_POST[text]);
	
?>
<a href="2.php?pwd=6">解密</a>
<?php
	}//if 的结束
	if(isset( $_GET[pwd] ) ){//isset有该变量且值不为null
		echo "解密口令:".E3( $_SESSION[pwd] )."<br>";	
	}
?>

<pre>
strtotime(time[,now]);
若值为time，则接受一个包含英文日期格式的字符串。now返回现在时间。
ceil(num);//向上取整
</pre>
<?php
	$a=strtotime('now');//取得当前时间戳
	$b=strtotime('08 May 2015');//特定时间时间戳..May不能为05，否则变为1970-01-01
	echo "日期1：".date('Y-m-d H:i:s',$a);
	echo "日期2：".date('Y-m-d H:i:s',$b);
	$c=ceil($a-$b)/(60*60*24);//毫秒转为天数
	echo "时间差为".$c." 时间戳之差为：".ceil($a-$b);
?>
<?php
    echo "<br/>";
	for($a=0;$a<7;$a++){
		echo $a%2==0 ? ( "$a 是偶数\n") : ("$a 是奇数\n");
		//而不是$a%2==0?(echo "$a 是偶数\n"):(echo "$a 是奇数\n");
	}
	echo "<br/>";
?>


<?php
	$arr=array('1','2','3');
	$arr2=array('4','5','6');
	$rand=rand(0,2);//随机数
	echo $arr[$rand].'--'.$arr2[$rand];
?>




<?php
	//include(文件名)和require(文件名)都可引入php文件. 没有什么区别，看个人爱好。
	require('requireindlude.php');
	require('requireindlude.php');//可以引用多次
	//include_once()、require_once():确保某个文件只引入一次。若已引入，则将不再引入该文件。
	include_once('requireindlude.php');//前面已引入，故这里不再引入
?>

<?php
	/**知识点：
	array():创建数组
	foreach:用于数组。用于其他则报错。
		foreach (array as $value) statement
			遍历给定的 array 数组。每次循环中，当前单元的值被赋给 $value 并且数组内部的指针向前移一步（因此下一次循环中将会得到下一个单元）。
		foreach (array as $key => $value)  statement
			做同样的事，只除了当前单元的键名也会在每次循环中被赋给变量 $key。
	**/
	$arr=array("刘莉"=>"05月20日","李慧琳"=>"06月27日","朱晓晓"=>"07月21日");
	foreach($arr as $key=>$val ){
		echo "姓名:$key 生日:$val ";
	}
?>


<?php
	$a=date('l');
	echo $a."<p>";
	//p123
?>
