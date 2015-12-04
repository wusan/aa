<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	date_default_timezone_set("PRC"); //时间设置为北京时间，否则出现错误提示信息
?>
<?php
	$link=mysql_connect("localhost","root","123456") or die("不能");
	$db_selected=mysql_query("use db_study",$link);
?>
<?php
	$id=$_GET[id];//获取url中的id
	$sql=mysql_query("select * from tb_aff where id=$id ");//注意这里where id=$id
	$row=mysql_fetch_object($sql);
?>

<form name="form1" method="post" action="check_modify_ok.php">
	<input type="text" name="id" readonly value="<?php echo $row->id;?>"/>
	<p>公告主题：<input name="txt_title" value="<?php echo $row->title;?>" /></p>
	<p>公告内容: <textarea name="" id="" cols="80" rows="10" name="txt_content">
					<?php echo $row->content;?>
	</textarea></p>
	<p><input type="submit" value="修改" name="submit" /></p>
	
</form>







