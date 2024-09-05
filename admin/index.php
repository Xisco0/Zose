<?php include '../config/constants.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title><?php echo $thename ?></title>
 <?php include "meta.php" ?>
</head>
<body>
    <?php include "alert.php"?>
    <section class="slide-div">
        <div class="slide-div-in">
            <div class="right-div">
                <div class="right-div-in">
                   
                    <?php include $page='log-in'?>
                    <?php include 'config/content-page.php'?>


                </div>
            </div>

            <div class="left-div">
                <div class="head-div" data-aos="fade-out" data-aos-duration="2200">
                    <a href=""><img src="./all-images/logo.png" alt="logo"></a>
                </div>
                <div class="left">
                    <div class="left-div-in" data-aos="zoom-out" data-aos-duration="2200">
                        <h3>CCTV Systems & Access Controls</h3>
    
                    </div>
                </div>
            </div>
        </div>
       
      
    </section>


    
</body>
</html>