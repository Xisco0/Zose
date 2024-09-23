<?php include '../../config/constants.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title><?php echo $thename ?></title>
 <?php include "meta.php" ?>
</head>
<body>
    <?php include "alert.php" ?>
    
    <div class="body-div">
        <?php include "header.php"?>
        <?php include "sidebar.php"?>
        <div class="content-div-in">
            <div class="content-div">
                <div class="page-title" id="page_title"><i class="bi-speedometer2"></i> Admin Dashboard Overview</div>


                <div id="page-content">
                    <script>_getPage('dashboard')</script>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
