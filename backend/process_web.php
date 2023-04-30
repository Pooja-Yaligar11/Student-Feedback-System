<?php
	session_start();
	// error_reporting(0);
	include_once('conn.php');
	$lclCon = new DatabaseClass();
	$con = $lclCon->getCon();
	$con->exec("SET NAMES 'utf8'");
	$params = $_REQUEST;
	$action = $params['action'];

	switch ($action) {
		case 'register':
			register($params, $con);
			break;

		case 'login':
			login($params, $con);
			break;

	}

	function register($params, $con) {


			$lclQueryExist = "SELECT count(*) FROM registration WHERE email = '".$params['txtEmail']."'";
	    	$lclResultExist = $con->query($lclQueryExist);
	    	$lclResCount = $lclResultExist->fetchColumn();

			if($lclResCount == 0) {

				$getUsn = "SELECT count(*) FROM student_email WHERE student_email = '".$params['txtEmail']."'";
				$lclUsnExist = $con->query($getUsn);
	    		$lclUsnCount = $lclUsnExist->fetchColumn();
	    		if($lclUsnCount) {

					$lclQuery = $con->prepare("INSERT INTO registration (usn, name, college_name, course, address, contact_number, email, password, role) VALUES(:usn, :name, :college_name, :course, :address, :contact_number, :email, :password, :role)");

					$lclQuery->bindParam(':usn', $params['txtUsn']);
					$lclQuery->bindParam(':name', $params['txtName']);
					$lclQuery->bindParam(':college_name', $params['txtCollegeName']);
					$lclQuery->bindParam(':course', $params['selCourse']);
					$lclQuery->bindParam(':address', $params['txtAddress']);
					$lclQuery->bindParam(':contact_number', $params['txtContactNo']);
					$lclQuery->bindParam(':email', $params['txtEmail']);
					$lclQuery->bindParam(':password', $params['txtPassword']);
					$lclQuery->bindParam(':role', $params['txtRole']);		

					$lclResult = $lclQuery->execute();
			        echo "1";

			    }else{
			        echo "11";
			    }

			}else{
			    echo "10";
			}
		 
	}

	function login($params, $con) {
 
		$lclQuery = "SELECT * FROM registration WHERE email = '".$params['txtEmail']."' AND password = '".$params['txtPassword']."' AND role = '".$params['selRole']."'" ;
		$lclResult = $con->query($lclQuery);
		if($row = $lclResult->fetch(PDO::FETCH_ASSOC)) {
			$_SESSION['usn'] = $row['usn'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['role'] = $row['role'];
			$_SESSION['course'] = $row['course'];
			echo $row['role'];
        } else {
        	echo "10";
        }
	}
?>
