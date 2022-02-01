<?php
	

	if (isset($_POST['submit'])) {
		$fullname = $_POST['fullname'];
		$lineid = $_POST['lineid'];
		$bank = $_POST['bank'];
		$idbank = $_POST['idbank'];
		$know = $_POST['know'];
		$friend = $_POST['friend'];
		$phone = $_POST['phone'];
	}

	$sToken = "dS4Wmhj3pKFBostylODxqOnPdt7bfLCc4oZTRZgXeio";
	$sMessage = "สมัครสมาชิก\n";
	$sMessage .="ชื่อ นามสกุล: ".$fullname . " \n";
	$sMessage .="ไลน์ไอดี: ".$lineid. " \n";	
	$sMessage .="ธนาคาร: ".$bank. "\n";
	$sMessage .="เลขบัญชี: ".$idbank. "\n";
	$sMessage .="รู้จักจาก: ".$know. "\n";
	$sMessage .="ไอดีเพื่อน: ".$friend. "\n";
	$sMessage .="เบอร์โทรศัพท์: ".$phone. "\n";
	


	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	} 
	else { 
		$result_ = json_decode($result, true); 
		echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	} 
	curl_close( $chOne );   
?>