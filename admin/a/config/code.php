<?php include '../../../config/constants.php'?>
<?php 

$action=$_POST['action'];
	switch ($action){
		
	case 'get-page':
	    $page=$_POST['page'];
		require_once ('content-page.php');
	break;

	case 'get-form':
	    $page=$_POST['page'];
		require_once ('form.php');
	break;
	}

	
	
?>