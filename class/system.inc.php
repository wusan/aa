<?php
	date_default_timezone_set("PRC"); //时间设置为北京时间，否则出现错误提示信息
?>
<?php
	require("system.class.inc.php");//引入文件
	$connobj=new ConnDB('localhost',"root","123456",'db_study');//用户名 密码 表名
	$conn=$connobj->GetConnId();//连接数据库;
	$admindb=new AdminDB();//数据库操作类实例化
?>
















