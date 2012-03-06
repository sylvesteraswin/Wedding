<?php
	include_once('connect.php');
?>
<?php
	//echo 'HI';
	$db_handle = mysql_connect($server, $username, $password) or die('Error : ' . mysql_error());
	$db_found = mysql_select_db($database, $db_handle) or die('Error : ' . mysql_error());
	
	$response_array = array();
	
	if ($db_found){
		if (empty($_POST['name'])){
			$response_array['status'] = 'error';
			$response_array['message'] = 'Name is Blank';
		}elseif(empty($_POST['email'])){
			$response_array['status'] = 'error';
			$response_array['message'] = 'Email is blank or invalid';
		}elseif(empty($_POST['msg'])){
			$response_array['status'] = 'error';
			$response_array['message'] = 'Message is empty';
		}else{
			$query = "INSERT INTO wishdata (name, email, msg) VALUES ('". $_POST['name'] ."', '". $_POST['email'] ."', '". $_POST['msg'] ."')";
			
			$results = mysql_query($query);
			//echo ' as : ' . $query . ' ';
			if ($results == 1){
				$response_array['status'] = 'success';
				$response_array['message'] = 'Wish Inserted';
			}
			mysql_close($link);
		}
	}else{
		$response_array['message'] = 'Not Found';
	}
	//header('Content-type: application/json');
	
	echo json_encode($response_array);
?>