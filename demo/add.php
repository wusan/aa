<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form name="form1" method="post" action="check_add.php">
	<p>主题：<input name="txt_title"/></p>
	<p>内容：<textarea name="txt_content" id="" cols="30" rows="10"></textarea></p>
	<p><input type="submit" value="save" name="submit" />
		<input type="reset" value="reset" name="submit2"/>
	</p>
</form>
<script type="text/javascript">
	function check(form){
		if(form.txt_title.value=""){
			alert('主题不能为空');
			form.txt_title.focus();
			return false;
		}
		if(form.txt_content.value=""){
			alert('内容不能为空');
			form.txt_content.focus();
			return false;
		}
		form.submit();//提交表单到后台
	}
</script>





















