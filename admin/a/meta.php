<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="<?php echo $website_url?>/admin/all-images/logo.png"rel="shortcut icon"type="image-png"/>
<link href="<?php echo $website_url ?>/admin/a/styles/animate.css" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url?>/admin/styles/icons-1.10.2/font/bootstrap-icons.css" type="text/css" rel="stylesheet">
<link href="<?php echo $website_url?>/admin/styles/awesome-font/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link href="<?php echo $website_url?>/admin/a/styles/style.css?v=<?php echo $latest_version ?>" type="text/css" rel="stylesheet" />
<link href="<?php echo $website_url?>/admin/a/styles/paramount.css?v=<?php echo $latest_version ?>" type="text/css" rel="stylesheet" />

<!-- JAVASCRIPT-ANIMATION-LINKS -->
<script src="<?php echo $website_url?>/admin/js/jquery-v3.6.1.min.js"></script>
<script>
    let access_key = JSON.parse(sessionStorage.getItem("access_key"));
    let staff_id = JSON.parse(sessionStorage.getItem("staff_id"));

    if (access_key){

    } else {
        sessionStorage.removeItem("access_key");
        window.parent.location.href = website_url+"/admin/";
    }
</script>
<script src="<?php echo $website_url?>/admin/a/js/script.js?v=<?php echo $latest_version?>"></script>
<script src="<?php echo $website_url ?>/admin/a/js/canvas-library.js"></script>
<script src="<?php echo $website_url ?>/admin/a/https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script> 
<script src="js/superplaceholder.js"></script>
