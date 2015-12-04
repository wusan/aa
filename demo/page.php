<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
	date_default_timezone_set("PRC"); //时间设置为北京时间，否则出现错误提示信息
?>
<?php
	$link=mysql_connect("localhost","root","123456") or die("不能"); 
	$db_selected=mysql_query("use db_study",$link);//注意use。。连接数据库
?>


<table width="100%">
	<thead>
		<tr>
			<td width="10%">id</td><td width="50%">公告主题</td><td width="40%">公告内容</td>
		</tr>
	</thead>
	<?php
		$page=$_GET[page];
		if($page==''){	//$page为当前页，若为空，则设置为1
			$page=1;
		}
		/*if( false==is_numeric($page) ){//不是数字
			return ;
		}*/
		
		$page_size=4;//每页显示4条
		$query="select count(*) as total from tb_aff order by id desc";//查找否和条件的记录总条数
		$result=mysql_query($query);
		$message_count=mysql_result($result,0,"total");//总记录数
		/***记录总数/每页显示的记录数=总页数***/
		$page_count=ceil($message_count/$page_size);//总页数
		$offset=($page-1)*$page_size;//计算下一页从第几条数据开始循环。

		$sql=mysql_query("select * from tb_aff order by id desc limit $offset,$page_size");//"select * frome tb_aff order by id desc limit $offset,$page_size"
			//SELECT * FROM  `tb_aff` LIMIT 12 , 4   ..第12条记录开始显示4条。
		$row=mysql_fetch_object($sql);	
		if(!$row){
			echo "<div style='color:red;'>暂无公告</div>";
		}
		
		do{
	?>
	<tr>
		<td><?php echo $row->id;?></td><td><?php echo $row->title?></td><td><?php echo $row->content?></td>
	</tr>
	<?php	
		}while( $row=mysql_fetch_object($sql) );
	?>


</table>

<table>
	<tr>
		<td>页次：<?php echo $page;?> / <?php echo $page_count;?>页 
		    记录:<?php echo $message_count;?>条
		</td>
		<td>
			<?php 
				if($page!=1){//若果当前页不是首页
					echo "<a href=page.php?page=1>首页</a>";
					echo "<a href=page.php?page=".($page-1).">上一页</a>";
				}
				if($page<$page_count){//若果当前页不是尾页
					echo "<a href=page.php?page=".($page+1).">下一页</a>";
					echo "<a href=page.php?page=".$page_count.">尾页</a>";
				}
			?>
		</td>
	</tr>
</table>
<style>
a{margin:0 5px;padding:5px;}
</style>












