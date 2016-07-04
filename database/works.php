<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	include("connect.php");
	//$outp = "";
	$id = $_POST['workid'];
	$outp = array();
	if($id != null) {
		$result = mysql_query(" SELECT * FROM works WHERE id = '$id' ");	
	} 
	else {
		$result = mysql_query(" SELECT * FROM works");
	}
	if(mysql_num_rows($result)) {
		while ($row = mysql_fetch_array($result)){
			/*if ($outp != "") {
				$outp .= ",";
			}
			$outp .= '{"Title":"' . $row[title] . '",';
			$outp .= '"Content":' . $row[content] . '"}';
		}
		//$outp = '{"records":['.$outp.']}';
		//echo ($outp);*/
			$outp[] = $row;
		}
		echo json_encode($outp);
	};
?>