
<?php
    error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
    $thename='Zose'; 
    $page = basename($_SERVER['SCRIPT_NAME']);
    $website_auto_url =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $ip_address=$_SERVER['REMOTE_ADDR']; //ip used
    $sysname=gethostname();//computer used
    /////////////////////////////////////////////////////////////////
    $website_url='http://localhost/zosedemo.com';
    // $website_url='http://172.20.10.3/xmee.com';
    $latest_version= date('Ymdhis');
?>



<script>
var website_url='http://localhost/zosedemo.com';
var admin_login_local_url= website_url+'/admin/config/code'
var admin_portal_local= website_url+'/admin/a';
var admin_portal_dashboard= website_url+'/admin/a/config/code';
</script>