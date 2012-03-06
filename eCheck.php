<?php
	include_once('connect.php');
?>
<?php
	
	$db_handle = mysql_connect($server, $username, $password) or die('Error : ' . mysql_error());
	$db_found = mysql_select_db($database, $db_handle) or die('Error : ' . mysql_error());
	
	$e = isset($_GET['e']) ? $_GET['e'] : 'a';
	$i = isset($_GET['i']) ? intval($_GET['i']) : 0;
	
	$response_array = array();
	
	$query = "SELECT COUNT(*) as count FROM wishdata WHERE email='". $e ."' AND i=". $i;
	
	$results = mysql_query($query);
	$rsCount = mysql_fetch_array($results);
	
	
	$response_array['status'] = $rsCount['count'];
	if ($rsCount['count'] == 1){
		$sql="DELETE FROM wishdata WHERE i=" . $i;
		$result=mysql_query($sql);
		if($result){
			$response_array['delete'] = 'Done';
			mysql_close($link);
		}else{
			$response_array['delete'] = 'Fail';
		}
	}
	
	echo json_encode($response_array);
?>