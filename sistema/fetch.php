<?php
	include('conn.php');
	$output = array();
	$query = $conn->query("select * from members"); 
	if ($query->num_rows > 0) {
	    while ($row = $query->fetch_array()) {
	        $output[] = $row;
	    }
	    echo json_encode($output);
	}
?>