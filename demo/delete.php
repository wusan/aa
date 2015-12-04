<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<?php
	date_default_timezone_set("PRC"); //时间设置为北京时间，否则出现错误提示信息
?>
<?php
	$link=mysql_connect("localhost","root","123456") or die("不能"); //check_add.php竟然单独做一个文件，而不是在add.php中。【它是post的】
	$db_selected=mysql_query("use db_study",$link);//注意use。。连接数据库
?>
<?php
	$id=$_GET[id];
	$sql=mysql_query("delete from tb_aff where id=$id limit 1");
	if($sql){
		echo "<script>alert('delete succ.');location.href='index.php';</script>";
	}
?>














