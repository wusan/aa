<?php
	date_default_timezone_set("PRC"); //时间设置为北京时间，否则出现错误提示信息
?>
<?php
	$link=mysql_connect("localhost","root","123456") or die("不能"); //check_add.php竟然单独做一个文件，而不是在add.php中。【它是post的】
	$db_selected=mysql_query("use db_study",$link);//注意use。。连接数据库
?>
<?php
	$title=$_POST[txt_title];
	$content=$_POST[txt_content];

	$createtime=date("Y/m/d H:i:s", time()+16*60*60);//date("Y-m-d H:i:s");//时间。。H表示24小时制
	
	$sql=mysql_query("insert into tb_aff(title,content,createtime) values('$title','$content','$createtime') ");//注意这里 '$createtime' 写法加引号。
	echo "<script>alert('add succ');</script>";//输出脚本location.href='add.php'
?>

















