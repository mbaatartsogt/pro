<?php 
	$name = $_POST['dataName'];
	mysql_connect("localhost","root","mbaatartsogt");
	mysql_select_db('pro');
	if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$name."'"))==1){
		header("Location: http://localhost/pro/add1.html");
		exit;
	}else{ 
		$sql = "CREATE TABLE ".$name." (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		created_date TIMESTAMP
		)";
		if (mysql_query($sql) === TRUE) {
		    echo "Table ".$name." created successfully";
		    header("Location: http://localhost/pro/add.html");
			exit;
		} else {
		    echo "Error creating table: " . mysql_error();
		}
	}
	mysql_close();
?>