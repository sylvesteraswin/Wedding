<?php
	include_once('connect.php');
?>

<?php
	
	$number_post = isset($_GET['n']) ? intval($_GET['n']) : 10;
	$db_handle = mysql_connect($server, $username, $password) or die('Error : ' . mysql_error());
	$db_found = mysql_select_db($database, $db_handle) or die('Error : ' . mysql_error());
	
	if ($db_found){
		//$query = "SELECT i, name, msg, time FROM wishdata ORDER BY I DESC LIMIT $number_post";
		$query = "SELECT i, name, msg, time FROM wishdata ORDER BY I DESC";
		$result = mysql_query($query,$db_handle) or die('Errant query:  '.$query);
		$posts = array();
		if(mysql_num_rows($result)) {
	    while($post = mysql_fetch_assoc($result)) {
	      $posts[] = array('post'=>$post);
	    }
	    mysql_close($link);
	  }
	  //header('Content-type: application/json');
    echo json_encode(array('posts'=>$posts));
	}
	
?>