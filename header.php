<?php include "alert.php"?>

<header class="animatedfadeInDown">
	<div class="top-div" >
		<div class="inner-div">
			<div class="text"><p>if you can envision it, than we can build it</p></div>
			<div class="icons">
				<a href="#" title="facebook">
				<i class ="bi-facebook"></i></a>
				<a href="#" title="twitter">
				<i class ="bi-twitter"></i></a>
				<a href="#" title="instagram">
				<i class ="bi-instagram"></i></a>
				<a href="#" title="youtube">
				<i class ="bi-youtube"></i></a>
			</div>
		</div>
	</div>


	<div class="bottom-div">
		<div class="inner-div">
			<a href="index"><img src="all-images/Images/zose-logo.png" alt="logo"></a>
			<nav>
				<ul>
					<li class="home-div-inner">
						<a  href="<?php echo $website_url ?>/index" >Home</a>

						<div class="sub-home " class="animated fadeInDown">
							<ul>
								<li><a href="#">Home Demo one</a></li>
								<li><a href="#">Home Demo two</a></li>
								<li><a href="#">Home Demo three</a></li>
								<li><a href="#">Home Demo four</a></li>
								<li><a href="#">Home Demo five</a></li>
							</ul>
						</div>
						
					</li>
					<li><a href="<?php echo $website_url ?>/product">Shop</a>

					<div class="sub-home shop-div">
						<div class="shop-inner-div">
							<div class="shop-inner">
								<div class="text-div"><h3><a href="">Zose CCTV Cameras</a></h3></div>
								<ul class="shop-div-in">
									<li><a href="<?php echo $website_url ?>/about">2 MP Wireless Camera</a></li>
									<li><a href="<?php echo $website_url ?>/services">2K IP Security System</a></li>
									<li><a href="<?php echo $website_url ?>/contact">4K Starlight Camera</a></li>
									<li><a href="<?php echo $website_url ?>/faq">4-Channel IP Security</a></li>
								</ul>
							</div>
							<div class="shop-inner">
								<div class="text-div"><h3><a href="">C-Mount CCTV Camera</a></h3></div>
								<ul class="shop-div-in">
									<li><a href="<?php echo $website_url ?>/about">Camera Box 4x Zoom</a></li>
									<li><a href="<?php echo $website_url ?>/services">Zose Network Camera</a></li>
									<li><a href="<?php echo $website_url ?>/contact">4K Starlight Camera</a></li>
									<li><a href="<?php echo $website_url ?>/faq">40MP Starrlight Camera</a></li>
								</ul>
							</div>

							<div class="shop-inner">
								<div class="text-div"><h3><a href="">4x Starlight Camera</a></h3></div>
								<ul class="shop-div-in">
									<li><a href="<?php echo $website_url ?>/about">2K IP Security System</a></li>
									<li><a href="<?php echo $website_url ?>/services">Network PTZ Camera</a></li>
									<li><a href="<?php echo $website_url ?>/contact">40MP Starrlight Camera</a></li>
									<li><a href="<?php echo $website_url ?>/faq">Zose Network Camera</a></li>
								</ul>
							</div>




							<div class="shop-inner">
								<div class="img-div"><img src="all-images/Images/cam_1.webp" alt=""></div>
								<span><a href="">2K IP Security System</a></span>
							</div>
						</div>
					</div>

					</li>
					<li>
						<a href="#">Pages</a>
						<div class="sub-home page-div">
							<ul>
								<li><a href="<?php echo $website_url ?>/about">About us</a></li>
								<li><a href="<?php echo $website_url ?>/services">Services</a></li>
								<li><a href="<?php echo $website_url ?>/contact">Contact Us</a></li>
								<li><a href="<?php echo $website_url ?>/faq">FAQ</a></li>
							</ul>
						</div>
					</li>
					<li><a href="<?php echo $website_url ?>/about">About</a></li>
					<li><a href="<?php echo $website_url ?>/blog">Blog</a></li>
					<li><a href="<?php echo $website_url ?>/contact">Contact</a></li>
				</ul>
			</nav>

			<div class="icon-div">
				<a href="#" title="search">
				<i class="bi-search"></i></a>

				<a href="#" title="cart">
				<i class="bi-bag">
					<div class="count">0</div>
				</i></a>

				<a href="#" title="settings">
				<i class="bi-gear"></i></a>

			</div>
			<button class="mobile-btn" onclick="_open_menu()"><i class="bi-list"></i></button>
		</div>
	</div>
	<?php include "bottom-scripts.php"?>
</header>