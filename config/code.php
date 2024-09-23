<?php include 'constants.php'?>
<?php 
	$action=$_POST['action'];
	  switch ($action){

	case 'get-form':
		$page='reset_password';
		require_once ('content-page.php');
	break;

	case 'password-reset-successful':
		$page='password_reset_completed';
	  	require_once('content-page.php');
	break;

}
?>