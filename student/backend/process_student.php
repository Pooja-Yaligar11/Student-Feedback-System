<?php
	session_start();
	// error_reporting(0);
	include_once('../../backend/conn.php');
	$lclCon = new DatabaseClass();
	$con = $lclCon->getCon();
	$con->exec("SET NAMES 'utf8'");
	$params = $_REQUEST;
	$action = $params['action'];

	switch ($action) {
		case 'insert_feedback':
			insertFeedback($params, $con);
			break;

	}

	function insertFeedback($params, $con) {

		$lclQuery = $con->prepare("INSERT INTO student_feedback (usn, name, course, semister, complaint_date, category, complaint, email) VALUES(:usn, :name, :course, :semister, :complaint_date, :category, :complaint, :email)");

		$lclQuery->bindParam(':usn', $params['txtUsn']);
		$lclQuery->bindParam(':name', $params['txtName']);
		$lclQuery->bindParam(':course', $_SESSION['course']);
		$lclQuery->bindParam(':semister', $params['selSemister']);
		$lclQuery->bindParam(':complaint_date', $params['selComplaintDate']);
		$lclQuery->bindParam(':category', $params['selCategory']);
		$lclQuery->bindParam(':complaint', $params['txtComplaint']);
		$lclQuery->bindParam(':email', $_SESSION['email']);
		$lclResult = $lclQuery->execute();
        echo "1";
   
		 
	}
?>
