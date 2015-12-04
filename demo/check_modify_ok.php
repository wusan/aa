<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	$link=mysql_connect("localhost","root","123456") or die("不能");
	$db_selected=mysql_query("use db_study",$link);
?>
<?php
	$id=$_POST[id];
	$title=$_POST[txt_title];
	$content=$_POST[txt_content];
	
	$sql=mysql_query("update tb_aff set title='$title',content='$content' where id=$id ");//注意这里
	if($sql){
		echo "<script>alert('modi succ! ');</script>";
	}else{
		echo "<script>alert('modi fail! ');</script>";
	}
	echo "<script>history.back();location.href='modify.php?id=$id'</script>";
?>







