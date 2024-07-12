<?php include 'config/config.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include "meta.php" ?>
    <title><?php echo "$productname"?></title>
</head>
<body>
<?php include "header.php" ?>
<section class="index-cont">
    <div class="about">
        <div class="about-text">
            <h3>PRODUCTS</h3>
            <div class="about-text-div">
                <a href="index">Home</a> <div class="circle"></div><span>product</span>
            </div>
        </div>
    </div>
    <section class="body-div">
        <div class="body-div-in">
            <div class="shopping">
                <div class="right-div">
                    <div class="text-ava">
                        <div class="text-div" onclick="_collapse('faq247')">
                            <h2>Availability</h2>
                            <div class="icon-div" id="faq247num">&nbsp; <i class="bi-plus"></i> &nbsp;</div>
                        </div>
                        <div class="stock-div-in" id="faq247answer"  style="display:none;">
                        <div class="select-div"><span>0 selected</span></div>
                        <div class="stock-div">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">In stock</label>
                            </div>
                            <span>(10)</span>
                        </div>
                        <div class="stock-div">
                            <div class="input-div">
                            <input type="checkbox" name="stock_2"><label for="stock">Out of stock</label>
                            </div>
                            <span>(4)</span>
                        </div>
                        </div>
                    </div>
                    <div class="text-ava">
                        <div class="text-div" onclick="_collapse('faq248')">
                            <h2>Price</h2>
                            <div class="icon-div" id="faq248num">&nbsp; <i class="bi-plus"></i> &nbsp;</div>
                        </div>
                        <div class="stock-div-in" id="faq248answer"  style="display:none;">
                        <div class="select-div"><span>0 selected</span></div>
                        <div class="stock-div price-stock-ii">
                            <div class="price-stock-div">
                                <label>$</label><input type="number" name="number"> <label>From</label>
                            </div>
                            <div class="price-stock-div">
                                <label>$</label><input type="number" name="number"> <label>To</label>
                            </div>
                        </div>
                        <button class="btn">Filter</button>
                        </div>
                    </div>
                    <div class="text-ava">
                        <div class="text-div" onclick="_collapse('faq249')">
                            <h2>Product type</h2>
                            <div class="icon-div" id="faq249num">&nbsp; <i class="bi-plus"></i> &nbsp;</div>
                        </div>
                        <div class="stock-div-in" id="faq249answer"  style="display:none;">
                        <div class="select-div"><span>0 selected</span></div>
                        <div class="type-div">
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Bullet CCTV</label>
                            </div>
                            <span>(3)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">C-Mount CCTV</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Day/Night CCTV</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Dome CCTV</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">High Definition</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Infrared CCTV</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Network CCTV</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Wireless CCTV</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Zoom cameras</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        </div>
                        
                        </div>
                    </div>
                    <div class="text-ava">
                        <div class="text-div" onclick="_collapse('faq240')">
                            <h2>Brand</h2>
                            <div class="icon-div" id="faq240num">&nbsp; <i class="bi-plus"></i> &nbsp;</div>
                        </div>
                        <div class="stock-div-in" id="faq240answer"  style="display:none;">
                        <div class="select-div"><span>0 selected</span></div>
                        <div class="type-div">
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">AXIS</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">DAHUA</label>
                            </div>
                            <span>(2)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">HANWHA</label>
                            </div>
                            <span>(3)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">HIKVISION</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">HONEYWELL</label>
                            </div>
                            <span>(2)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">TECHWIN</label>
                            </div>
                            <span>(2)</span>
                        </div>
                        
                        </div>
                        
                        </div>
                    </div>
                    <div class="text-ava">
                        <div class="text-div" onclick="_collapse('faq241')">
                            <h2>Color</h2>
                            <div class="icon-div" id="faq241num">&nbsp; <i class="bi-plus"></i> &nbsp;</div>
                        </div>
                        <div class="stock-div-in" id="faq241answer"  style="display:none;">
                        <div class="select-div"><span>0 selected</span></div>
                        <div class="type-div">
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">black</label>
                            </div>
                            <span>(2)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Black</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">blue</label>
                            </div>
                            <span>(5)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">gold</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">gray</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">green</label>
                            </div>
                            <span>(5)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Green</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Magenta</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Maroon</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Navy</label>
                            </div>
                            <span>(3)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">Purple</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">red</label>
                            </div>
                            <span>(5)</span>
                        </div>
                        <div class="stock-div type">
                            <div class="input-div">
                            <input type="checkbox" name="stock_1"><label for="stock">violet</label>
                            </div>
                            <span>(1)</span>
                        </div>
                        
                        </div>
                        
                        </div>
                    </div>
                </div>
                <div class="left-div">
                    <div class="top-div">
                        <div class="icon-div">
                            <i class="bi-grid"></i>
                            <i class="bi-list"></i>
                        </div>
                        <div class="sort-div">
                            <label for="sort">Sort by:</label>
                            <select name="sort" id="sort">
                                <option>Alphabetically, A-Z</option>
                                <option>features</option>
                                <option>Alphabetically, Z-A</option>
                                <option>Best Selling</option>
                                <option>Price, Low To High</option>
                                <option>Price, High To Low</option>
                                <option>Date, New To Old</option>
                                <option>Date, Old To New</option>
                            </select>
                        </div>
                        <span>Showing 1 - 9 of 11 result </span>
                        <div class="sort-div">
                            <label for="sort">Show:</label>
                            <select name="sort" id="sort">
        

                                <option value="1">
                                1
                                </option>

                                <option value="2">
                                2
                                </option>

                                <option value="3">
                                3 
                                </option>
                                
                                
                                <option value="4">
                                4 
                                </option>
                                
                                
                                <option value="5">
                                5 
                                </option>
                                
                                
                                <option value="6">
                                6 
                                </option>
                                
                                
                                <option value="7">
                                7 
                                </option>
                                
                                
                                <option value="8">
                                8 
                                </option>
                                
                                
                                <option value="9" selected="">
                                9 
                                </option>
                                
                                
                                <option value="10">
                                10 
                                </option>
                                
                                
                                <option value="11">
                                11 
                                </option>
                                
                                
                                <option value="12">
                                12 
                                </option>
                                
                                
                                <option value="13">
                                13 
                                </option>
                                
                                
                                <option value="14">
                                14 
                                </option>
                                
                                
                                <option value="15">
                                15 
                                </option>
                                
                                
                                <option value="16">
                                16 
                                </option>
                                
                                
                                <option value="17">
                                17 
                                </option>
                                
                                
                                <option value="18">
                                18 
                                </option>
                                
                                
                                <option value="19">
                                19 
                                </option>
                                
                                
                                <option value="20">
                                20 
                                </option>
                                
                                
                                <option value="21">
                                21 
                                </option>
                                
                                
                                <option value="22">
                                22 
                                </option>
                                
                                
                                <option value="23">
                                23 
                                </option>
                                
                                
                                <option value="24">
                                24 
                                </option>
                                
                                
                                <option value="25">
                                25 
                                </option>
                                
                                
                                <option value="26">
                                26 
                                </option>
                                
                                
                                <option value="27">
                                27 
                                </option>
                                
                                
                                <option value="28">
                                28 
                                </option>
                                
                                
                                <option value="29">
                                29 
                                </option>
                                
                                
                                <option value="30">
                                30 
                                </option>
                                
                                
                                <option value="31">
                                31 
                                </option>
                                
                                
                                <option value="32">
                                32 
                                </option>
                                
                                
                                <option value="33">
                                33 
                                </option>
                                
                                
                                <option value="34">
                                34 
                                </option>
                                
                                
                                <option value="35">
                                35 
                                </option>
                                
                                
                                <option value="36">
                                36 
                                </option>
                                
                                
                                <option value="37">
                                37 
                                </option>
                                
                                
                                <option value="38">
                                38 
                                </option>
                                
                                
                                <option value="39">
                                39 
                                </option>
                                
                                
                                <option value="40">
                                40 
                                </option>
                                
                                
                                <option value="41">
                                41 
                                </option>
                                
                                
                                <option value="42">
                                42 
                                </option>
                                
                                
                                <option value="43">
                                43 
                                </option>
                                
                                
                                <option value="44">
                                44 
                                </option>
                                
                                
                                <option value="45">
                                45 
                                </option>
                                
                                
                                <option value="46">
                                46 
                                </option>
                                
                                
                                <option value="47">
                                47 
                                </option>
                                
                                
                                <option value="48">
                                48 
                                </option>
                                
                                
                                <option value="49">
                                49 
                                </option>
                                
                                <option value="50">
                                50 
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="product-div">
                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                                <div class="soldout-div"><span>sale</span></div>
                                <img src="./all-images/Images/camera-6.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">10MP Starlight Camera</a>
                                
                                <div class="price">
                                    <span>$75.00</span><span class="price-div">$55.00</span>
                                </div>
                            </div>
                        </div>


                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">

                                <img src="./all-images/Images/camera-7.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">2K IP Security System</a>
                                
                                <div class="price">
                                    <span class="price-div">$79.00</span>
                                </div>
                            </div>
					    
                        </div>

                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                                <div class="soldout-div"><span>sale</span></div>
                                <img src="./all-images/Images/camera-6.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">4-Channel IP Security</a>
                                
                                <div class="price">
                                    <span>$130.00</span><span class="price-div">$110.00</span>
                                </div>
                            </div>
					    </div>

                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
						<div class="camera-img">
							<div class="soldout-div"><span>sale</span></div>
							<img src="./all-images/Images/camera-2.jpg" alt="camera-1">
							<div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
								<div class="like-div-in"><i class="bi-card-image"></i></div>
								<div class="like-div-in"><i class="bi-heart"></i></div>
								<div class="like-div-in"><i class="bi-bag-plus"></i></div>
							</div>
						</div>
						<div class="camera-text">
							<a href="#">4k Starlight Camera</a>
							
							<div class="price">
								<span>$85.00</span><span class="price-div">$70.00</span>
							</div>
						</div>
					    </div>

                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
						<div class="camera-img">
							<div class="soldout-div"><span>sale</span></div>
							<img src="./all-images/Images/camera-5.jpg" alt="camera-1">
							<div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
								<div class="like-div-in"><i class="bi-card-image"></i></div>
								<div class="like-div-in"><i class="bi-heart"></i></div>
								<div class="like-div-in"><i class="bi-bag-plus"></i></div>
							</div>
						</div>
						<div class="camera-text">
							<a href="#">4MP Starlight Camera</a>
							
							<div class="price">
								<span>$60.00</span><span class="price-div">$39.00</span>
							</div>
						</div>
					    </div>



                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
						<div class="camera-img">

							<img src="./all-images/Images/camera-8.jpg" alt="camera-1">
							<div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
								<div class="like-div-in"><i class="bi-card-image"></i></div>
								<div class="like-div-in"><i class="bi-heart"></i></div>
								<div class="like-div-in"><i class="bi-bag-plus"></i></div>
							</div>
						</div>
						<div class="camera-text">
							<a href="#">4MP Starlight Camera</a>
							
							<div class="price">
								<span class="price-div">$1,280.00</span>
							</div>
						</div>
					    </div>


                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
						<div class="camera-img">
					
							<img src="./all-images/Images/camera-3.jpg" alt="camera-1">
							<div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
								<div class="like-div-in"><i class="bi-card-image"></i></div>
								<div class="like-div-in"><i class="bi-heart"></i></div>
								<div class="like-div-in"><i class="bi-bag-plus"></i></div>
							</div>
						</div>
						<div class="camera-text">
							<a href="#">Black Mini Camera</a>
							
							<div class="price">
								<span class="price-div">$39.00</span>
							</div>
						</div>
					    </div>


                     <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
						<div class="camera-img">
                        <div class="soldout-div"><span>sale</span></div>
							<img src="./all-images/Images/camera-6.jpg" alt="camera-1">
							<div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
								<div class="like-div-in"><i class="bi-card-image"></i></div>
								<div class="like-div-in"><i class="bi-heart"></i></div>
								<div class="like-div-in"><i class="bi-bag-plus"></i></div>
							</div>
						</div>
						<div class="camera-text">
							<a href="#">Black Mini Camera</a>
							
							<div class="price">
                            <span>$85.00</span><span class="price-div">$70.00</span>
							</div>
						</div>
					    </div>



                        <div class="network-camera-div aos-init aos-animate" data-aos="fade-in" data-aos-duration="2200">
						<div class="camera-img">
                        
							<img src="./all-images/Images/camera-4.jpg" alt="camera-1">
							<div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
								<div class="like-div-in"><i class="bi-card-image"></i></div>
								<div class="like-div-in"><i class="bi-heart"></i></div>
								<div class="like-div-in"><i class="bi-bag-plus"></i></div>
							</div>
						</div>
						<div class="camera-text">
							<a href="#">Net Starlight Camera</a>
							
							<div class="price">
								<span class="price-div">$999.00</span>
							</div>
						</div>
					</div>


                </div>

            
                <div class="menu-tab tabii">
            <div class="menu-div-in left"><a><i class="bi-chevron-left"></i></a></div>
            <a href="#"><div class="menu-div-in num1">1</div></a>
            <a href=""><div class="menu-div-in num">2</div></a>
            <a href=""><div class="menu-div-in"><i class="bi-chevron-right"></i></div></a>  
            </div>
            </div>
            </div>
        </div>
    </section>



    <section class="body-div category">
        <div class="body-div-in">
            <div class="solution-text aos-init aos-animate" data-aos="fade-out" data-aos-duration="2200">
                <h2>Shop By Category</h2>
                <p>
                    Contrary to popular belief Lorem Ipsum is not simply 
                    random text nam eget dui etiam whoncus.
                </p>
            </div>
        

            <div class="zoom-div">
                <div class="zoom-div-in">
                    <div class="img-div"><img src="./all-images/Images/first_1.webp" alt="first-1"></div>
                    <div class="text-div">
                        <h3><a href="">High Definition Camera (8)</a></h3>
                        <span>Simply random text</span>
                    </div>
                </div>


                <div class="zoom-div-in">
                    <div class="img-div"><img src="./all-images/Images/first_2.webp" alt="first-1"></div>
                    <div class="text-div">
                        <h3><a href="">Smoked Infrared Camera (10)</a></h3>
                        <span>Simply random text</span>
                    </div>
                </div>



                <div class="zoom-div-in">
                    <div class="img-div"><img src="./all-images/Images/first_3.webp" alt="first-1"></div>
                    <div class="text-div">
                        <h3><a href="">Smoked Infrared Camera (10)</a></h3>
                        <span>Simply random text</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
        

    <section class="body-div">
        <div class="body-div-in">
            <div class="solution-text aos-init aos-animate" data-aos="fade-out" data-aos-duration="2200">
                <h2>Exclusive Product</h2>
                <p>
                    Contrary to popular belief Lorem Ipsum is not simply 
                    random text nam eget dui etiam whoncus.
                </p>
            </div>


            <div class="exlusive-div">
                <div class="right-div">
                    <div class="product-div product-new">
                        <div class="network-camera-div net-div" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                                <div class="soldout-div"><span>soldout</span></div>
                                <img src="./all-images/Images/camera-1.jpg" alt="camera-1">
                                <div class="like-div">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-dash"></i></div>
                                </div>
                            </div>

                            <div class="camera-text">
                                <a href="#">Network PTZ Camera</a>
                                
                                <div class="price">
                                    <span>$75.00</span><span class="price-div">$55.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="network-camera-div net-div" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                                <div class="soldout-div"><span>sale</span></div>
                                <img src="./all-images/Images/camera-5.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">4MP Starlight Camera</a>
                                
                                <div class="price">
                                    <span>$60.00</span><span class="price-div">$39.00</span>
                                </div>
                            </div>
                        </div>

                        <div class="network-camera-div net-div" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                                <div class="soldout-div"><span>sale</span></div>
                                <img src="./all-images/Images/camera-2.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">4k Starlight Camera</a>
                                
                                <div class="price">
                                    <span>$85.00</span><span class="price-div">$70.00</span>
                                </div>
						    </div>
					    </div>

                        <div class="network-camera-div net-div" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                                <div class="soldout-div"><span>sale</span></div>
                                <img src="./all-images/Images/camera-6.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">4-Channel IP Security</a>
                                
                                <div class="price">
                                    <span>$130.00</span><span class="price-div">$110.00</span>
                                </div>
                            </div>
					    </div>

                        <div class="network-camera-div net-div" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">
                        
                                <img src="./all-images/Images/camera-3.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">Black Mini Camera</a>
                                
                                <div class="price">
                                    <span class="price-div">$39.00</span>
                                </div>
                            </div>
					    </div>

                        <div class="network-camera-div net-div" data-aos="fade-in" data-aos-duration="2200">
                            <div class="camera-img">

                                <img src="./all-images/Images/camera-7.jpg" alt="camera-1">
                                <div class="like-div aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2200">
                                    <div class="like-div-in"><i class="bi-card-image"></i></div>
                                    <div class="like-div-in"><i class="bi-heart"></i></div>
                                    <div class="like-div-in"><i class="bi-bag-plus"></i></div>
                                </div>
                            </div>
                            <div class="camera-text">
                                <a href="#">2K IP Security System</a>
                                
                                <div class="price">
                                    <span class="price-div">$79.00</span>
                                </div>
                            </div>
					    </div>

                    </div>
                </div>
                <div class="left-div">
                    <img src="./all-images/Images/exclusive.webp" alt="exclusive">
                </div>
            </div>

        </div>
    </section>


    <?php include "footer.php"?>
</section>