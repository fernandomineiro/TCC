<?php
	include('conn.php');
	$data = json_decode(file_get_contents("php://input"));
	
	$id = $data->memberid;

	$conn->query("delete from members where id='$id'");

?>