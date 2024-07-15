
<div class="sidenavdiv">
    <div class="sidenavdiv-in" onclick="_close_side_nav()"></div>
</div>

<div class="index-menu-back-div"> 
    <div class="top-div">
         <a href="<?php echo $website_url?>"><img src="all-images/Images/zose-logo.png" alt="<?php echo $thename?> Logo"  class="animated zoomIn"/></a>   
    </div>

    <div class="div-in">
        <div class="div">
            <a href="<?php echo $website_url;?>" title="Home Page">
            <li <?php if ($page=='index') {?> id="active-li"<?php }?>><i class="bi-house"></i> Home Page</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url ?>/product" title="Products">
            <li <?php if ($page=='product') {?> id="active-li"<?php }?>><i class="bi-bag"></i> Shop</li></a>
        </div>

        <div class="div">
            <li onclick="_open_li('pages')"><i class="bi-file-earmark"></i> Pages  <i class="bi-plus" id="side-expand"></i></li>
            <div class="sub-li" id="pages-sub-li">
                <ul class="expand-div">
                <a href="<?php echo $website_url ?>/about" title="About"><li><i class="bi-people"></i>About us</li></a>
                <a href="<?php echo $website_url ?>/services" title="services"><li><i class="bi-gear-wide"></i>Services</li></a>
                <a href="<?php echo $website_url ?>/contact" title="contact"><li><i class="bi-telephone-inbound"></i>Contact us</li></a>
                <a href="<?php echo $website_url ?>/faq" title="faq"><li><i class="bi-chat-dots"></i>FAQ</li></a>
                </ul>
            </div>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/about" title="about">
            <li <?php if ($page=='about') {?> id="active-li"<?php }?>><i class="bi-people"></i> About</li></a>
        </div>

        <div class="div">
            <a href="<?php echo $website_url;?>/blog" title="blog">
            <li <?php if ($page=='blog') {?> id="active-li"<?php }?>><i class="bi-pc"></i> Blog</li></a>
        </div>

        <!-- <div class="div">
            <a href="<?php echo $website_url;?>/faq" title="Frequently Asked Questions">
            <li <?php if ($page=='faq.php') {?> id="active-li"<?php }?>><i class="bi-patch-question"></i> FAQ</li></a>
        </div> -->

        <div class="div">
            <a href="<?php echo $website_url;?>/contact" title="Contact Us">
            <li <?php if ($page=='contact') {?> id="active-li"<?php }?>><i class="bi-telephone-inbound"></i> Contact Us</li></a>
        </div>
        
        <div class="menu-title" style="height:100px;"> &nbsp;</div>
    </div>
    
</div> 