
<?php
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
	$website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$thename='Zose'; 
	$aboutname='Zose-about';
	
	$website_url='http://localhost/zosedemo.com';
	//$website_url='http://192.168.62.51/projects/1stclassiclimos.com';
	//$website_url='https://1stclassiclimos.com/new';
?>

<script>
	//////////////////online constants///////////////////////
	var website_url='http://localhost/zosedemo.com';
	//var website_url='http://192.168.62.51/projects/1stclassiclimos.com';
	//var website_url='https://1stclassiclimos.com/new';


</script>