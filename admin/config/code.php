<?php include '../../config/constants.php'?>
<?php 
	$action=$_POST['action'];
	  switch ($action){

	case 'get-form':
		// $staff_id=trim($_POST['staff_id']);
		$page='reset_password';
		require_once ('content-page.php');
	break;

	case 'reset_password':
		$page='reset_password';
	  	require_once('content-page.php');
	break;

	case 'password_reset_successful':
		$page='password_reset_successful';
	  	require_once('content-page.php');
	break;
	
}
?>