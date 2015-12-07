<?php
	class ConnDB{	//对数据库连接、操作、分页和字符串截取类进行封装
		var $host;
		var $user;
		var $pwd;
		var $dbname;
		var $conn;
		function ConnDB($host,$user,$pwd,$dbname){//构造方法，为成员赋值
			$this->host=$host;
			$this->user=$user;
			$this->pwd=$pwd;
			$this->dbname=$dbname;
		}
		function GetConnId(){//数据库连接并返回链接对象
			$this->conn=mysql_connect($this->host,$this->user,$this->pwd) or die("database error:".mysql_error() );
			mysql_select_db($this->dbname,$this->conn) or die("select databse error:".mysql_error() );
			return $this->conn;//返回连接对象。
		}
		function CloseConnId(){//关闭数据库
			
		}
	}
?>

<?php
	//数据库操作类。通过mysql_query()执行sql。若为select则使用mysql_fetch_array()获取查询结果，并返回数组。若是insert\update\delete执行成功则返回true，否则为false.
	class AdminDB{
		function ExecSQL($sqlstr,$conn){//sql语句，数据库连接对象
			$sqltype=strtolower( substr( trim($sqlstr),0,6 ) );//截取sql前6个字符，并转为小写
			$rs=mysql_query($sqlstr);//执行sql
			if($sqltype=="select"){//select语句
				$array=mysql_fetch_array($rs);//获取查询结果
				if(count($array)==0||$rs==false){//判断是否执行成功
					return false;//若查询结果为0，或执行失败则返回false
				}else{
					return $array;//返回查询结果的数组
				}
			}elseif($sqltype=="update"||$sqltype=="insert"||$sqltype=="delete"){//不是select语句
				if($rs){//执行成功
					return true;
				}else{
					return false;
				}
			}
		}
	}
?>
















