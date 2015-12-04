<?php
	$link = mysqli_connect("us-cdbr-iron-east-03.cleardb.net", "b28dd7cab66d3c",
							"a15a0348", "ad_d5bdca05bc3f916");
	if ($link === false) {
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	$caseName = $request->caseName;
	
	$sql = "SELECT * FROM cases WHERE case_name='$caseName'";
	$result = mysqli_query($link, $sql);
	
	if ($result) {
		$rows = array();
		while($r = mysqli_fetch_assoc($result)) {
			$rows[] = $r;
		}
		echo json_encode($rows);
	}
	else {
		echo "ERROR: Could not execute $sql. " . mysqli_error($link);
	}
	
	mysqli_close($link);
?>
