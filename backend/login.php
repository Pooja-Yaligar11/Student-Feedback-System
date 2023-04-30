<?php
	session_start();
	// error_reporting(0);
	include_once('conn.php');
	$lclCon = new DatabaseClass();
	$con = $lclCon->getCon();

	$lclQuery = "SELECT * FROM admin_master WHERE ad_email = '".$_POST["inputEmail"]."' AND ad_password = '".$_POST["inputPassword"]."'";
	$lclResult = $con->query($lclQuery);

	if($lclResult->rowCount() > 0) {
		if($row = $lclResult->fetch(PDO::FETCH_ASSOC)) {
			$_SESSION["admin_email"] = $row["ad_email"];
			$_SESSION["admin_name"] = $row['ad_name'];
			$_SESSION["ad_phone"] = $row['ad_phone'];
			$_SESSION['admin_password'] = $row['ad_password'];
			
			header("Location: ../admin_master.php");
						
		}
	} else {
		header("Location: ../admin_login.php");
	}

?>