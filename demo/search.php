<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<form name="form1" method="post" action="">
	<p>查询关键字:<input name="txt_keyword"/>
		<input type="submit" value="search" name="submit" />
	</p>
</form>

<?php
	date_default_timezone_set("PRC"); //时间设置为北京时间，否则出现错误提示信息
?>
<?php
	$link=mysql_connect("localhost","root","123456") or die("不能"); //check_add.php竟然单独做一个文件，而不是在add.php中。【它是post的】
	$db_selected=mysql_query("use db_study",$link);//注意use。。连接数据库
?>
<?php
	$keyword=$_POST[txt_keyword];
	$sql=mysql_query("select * from tb_aff where title='%$keyword%' or content like '%$keyword%' ");//注意这里 title='%$keyword%'
	$row=mysql_fetch_object($sql);
	if($row==false){
		echo "<p style='color:#ff7300;'>对不起，查不到与此相关的图书.</p>";
	}
?>
<?php
	do{
?>
		<div>
			<span><em style='color:red;'>公告标题:</em><?php echo $row->title;?></span>
			<span><em style='color:red;'>公告内容:</em><?php echo $row->content;?></span>
		</div>
<?php	
	}while( $row=mysql_fetch_object($sql) );
?>














