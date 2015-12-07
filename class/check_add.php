<?php
	require("system.inc.php");//引入文件
	
	$title=$_POST[txt_title];
	$content=$_POST[txt_content];
	$createtime=date("Y/m/d H:i:s", time()+16*60*60);//date("Y-m-d H:i:s");//时间。。H表示24小时制
	
	//sql语句
	$mysql_query3="insert into tb_aff(title,content,createtime) values('$title','$content','$createtime') " ;
	$result=$admindb->ExecSQL($mysql_query3,$conn);
	if($result==true){
		echo "<script>alert('add succ');</script>";
	}
	else{
		echo "<script>alert('add fail');</script>";
	}
	
?>
















