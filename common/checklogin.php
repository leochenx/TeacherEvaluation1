<?php
include "conn.php";
session_start ();
if ($_POST != null) {
	$uname = $_POST ['uname']; // 获取参数
	$post_password = $_POST ['password'];
	
	mysql_query ( "set names 'utf8'" );
	$query_string = "select password from te_user_passwd where id=" . $uname;
	// echo $query_string;
	$rs = mysql_query ( $query_string );
	$row = mysql_fetch_row ( $rs );
	$stored_passwd = $row [0];
	if ($uname != "" and $post_password != "" and $stored_passwd != "" and $post_password == $stored_passwd) {
		$_SESSION ["user"] = $uname;
		$message = array (
				"success" => 1,
				"msg" => "登录成功" 
		);
		echo json_encode ( $message );
	} else {
		$message = array (
				"success" => 0,
				"msg" => "工号或密码错误" 
		);
		echo json_encode ( $message );
	}
}
?>