<?php
// 	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
// 	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
// 	$offset = ($page-1)*$rows;
// 	$result = array();

// 	include 'conn.php';
	
// 	$rs = mysql_query("select count(*) from users");
// 	$row = mysql_fetch_row($rs);
// 	$result["total"] = $row[0];
// 	$rs = mysql_query("select * from users limit $offset,$rows");
	
// 	$items = array();
// 	while($row = mysql_fetch_object($rs)){
// 		array_push($items, $row);
// 	}
// 	$result["rows"] = $items;

// 	echo json_encode($result);
include 'conn.php';
session_start();
$id=$_SESSION['user'];

mysql_query("set names 'utf8'");
$query_string="select * from te_teacher_info where id=".$id;
// $query_string="select * from te_teacher_info where id=11";
// echo $query_string;
$rs=mysql_query($query_string);
 $row=mysql_fetch_object($rs);
 echo json_encode($row,JSON_UNESCAPED_UNICODE);
?>