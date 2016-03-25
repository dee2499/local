<?php ob_start(); ?>
<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>96ACERZ</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
   <?php include "head.php" ?>

    <!-- Container -->
    <div id="container">

        <div id="slider-container">
            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="upload/slider/p2.jpg">
                        <a href="#"><img alt="" src="upload/slider/p2.jpg" /></a>
                        <div class="flex-caption">
                            <p>Queensbery Navsari</p>
                            <p><strong>65,00,000</strong></p>
                        </div>
                    </li>
                    <li data-thumb="upload/slider/p1.jpg">
                        <a href="#"><img alt="" src="upload/slider/p1.jpg" /></a>
                        <div class="flex-caption">
                            <p>Shanghrilla Surat</p>
                            <p><strong>30.00.000</strong></p>
                        </div>
                    </li>
                    <li data-thumb="upload/slider/p3.jpg">
                        <a href="#"><img alt="" src="upload/slider/p3.jpg" /></a>
                        <div class="flex-caption">
                            <p>Angle Residency, Amreli</p>
                            <p><strong>27,50,000</strong></p>
                        </div>
                    </li>
                    <li data-thumb="upload/slider/p4.jpg">
                        <a href="#"><img alt="" src="upload/slider/p4.jpg" /></a>
                        <div class="flex-caption">
                            <p>Avadh Residency, Amreli</p>
                            <p><strong>18,00,000</strong></p>
                        </div>
                    </li>
                    <li data-thumb="upload/slider/p5.jpg">
                        <a href="#"><img alt="" src="upload/slider/p5.jpg" /></a>
                        <div class="flex-caption">
                            <p>Shukan Heights, Gandhinagar</p>
                            <p><strong>31,00,000</strong></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

                <!-- Quick Search -->
        <div id="quick-search">
            <form />
                <h4 class="head">Quick Search</h4>

                <div class="slideToggle">
                    <div class="switcher">
                        <input type="checkbox" class="custom-style" value="" data-off="For Sale" data-on="For Rent" />
                    </div>

                    <div class="row">
                      <select name="select" class="select normal">
                        <option value="" />                      
                        Location
                    1
                                    
                        <option value="" />                      
                        Ahemdabad
                                    
                        <option value="" />                      
                        Rajkot
									
                        <option value="" />                      
                        Baroda	
									
                        <option value="" />                      
                        Surat
									
                        <option value="" />                      
                        Gandhinagar
		
                        
                      </select>
                    </div>

                    <div class="row">
                        <select class="select normal">
                            <option value="" />Property type
                            <option value="" />Apartment
							 <option value="" />Foreclosures
								 <option value="" />Townhome
								  <option value="" />Land
								   <option value="" />New Homes
							
                   
                        </select>
                    </div>

                    <div class="row">
                        <select class="select normal">
                            <option value="" />Square Feet
                            <option value="" />400
			
							  <option value="" />600
					
							    <option value="" />800
								
								  <option value="" />1000+
								 
                          
                        </select>
                    </div>

                    <div class="row">
                        <select class="select left">
                            <option value="" />Beds
                            <option value="" />1
							  <option value="" />2
							    <option value="" />3
								  <option value="" />4
								    <option value="" />5+
                          
                        </select>

                        <select class="select right">
                            <option value="" />Baths
                             <option value="" />1
							  <option value="" />2
							    <option value="" />3+
							
                        </select>
                    </div>

                    <div class="row">
                        <select class="select left">
                            <option value="" />Min price
                            <option value="" />10,00,000
							 <option value="" />15,00,000
							  <option value="" />25,00,000
							   <option value="" />35,00,000
							    <option value="" />
								 <option value="" />
						
                          
                        </select>

                        <select class="select right">
                            <option value="" />Max price
                            <option value="" />50,00,000
							 <option value="" />75,00,000
							  <option value="" />1,00,00,000
							   <option value="" />
							    <option value="" />
								 <option value="" />
                        </select>
                    </div>

                    <div class="row">
                        <input class="button-blue" type="submit" value="Search" />

                        <a href="#" class="advanced-search">Advanced Search</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Quick Search -->

    	<!-- Content -->

            <div id="new-listings" class="clearfix">
                <!-- One Box -->
                <div class="box">

                    <div class="images-available-num">3 images avaiable</div>

                    <div class="images-available-container">
                        <div><a href="#" data-title="5 BHK, Balcony" data-beds="5" data-baths="1" data-video="4" data-map="http://maps.google.com/"><img alt="" src="upload/listings/image-2.jpg" /></a></div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-1.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-3.jpg" />
                            </a>
                        </div>
                    </div>

                    <div class="price">10.00.000</div>

                    <div class="view-details">
                        <a href="#">View Details</a>
                    </div>
                </div>
                <!-- End One Box -->

                <!-- One Box -->
                <div class="box">

                    <div class="images-available-num">4 images avaiable</div>

                    <div class="images-available-container">
                        <div>
                            <a href="#" data-title="2 FLoor, 5BHK Vintage House" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                   <img alt="" src="upload/listings/image-4.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-3.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-1.jpg" />
                            </a>
                        </div>
                    </div>

                    <div class="price">20.00.000</div>

                    <div class="view-details">
                        <a href="#">View Details</a>
                    </div>
                </div>
			
                <!-- End One Box -->

                <!-- One Box -->
                <div class="box">

                    <div class="images-available-num">3 images avaiable</div>

                    <div class="images-available-container">
                        <div>
                            <a href="#" data-title="4BHK " data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                   <img alt="" src="upload/listings/image-3.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-2.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-1.jpg" />
                            </a>
                        </div>
                    </div>

                    <div class="price">25.000.000</div>

                    <div class="view-details">
                        <a href="#">View Details</a>
                    </div>
                </div>
                <!-- End One Box -->
 	<?php include "sidebar.php" ?>
                <!-- One Box -->
                <div class="box">

                    <div class="images-available-num">5 images avaiable</div>

                    <div class="images-available-container">
                        <div>
                            <a href="#" data-title="King Heights" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                  <img alt="" src="upload/listings/image-5.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-2.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-3.jpg" />
                            </a>
                        </div>
                    </div>

                    <div class="price">50,000,000</div>

                    <div class="view-details">
                        <a href="#">View Details</a>
                    </div>
                </div>
                <!-- End One Box -->

                <!-- One Box -->
                <div class="box">

                    <div class="images-available-num">2 images avaiable</div>

                    <div class="images-available-container">
                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                   <img alt="" src="upload/listings/image-1.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-2.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-3.jpg" />
                            </a>
                        </div>
                    </div>

                    <div class="price">
                      <p>75.000.000</p>
                    </div>

                    <div class="view-details">
                        <a href="#">View Details</a>
                    </div>
                </div>
                <!-- End One Box -->

                <!-- One Box -->
                <div class="box">

                    <div class="images-available-num">4 images avaiable</div>

                    <div class="images-available-container">
                        <div><a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/"><img alt="" src="upload/listings/image-6.jpg" /></a></div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-4.jpg" />
                            </a>
                        </div>

                        <div>
                            <a href="#" data-title="" data-beds="3" data-baths="2" data-video="3" data-map="http://maps.google.com/">
                                <img alt="" src="upload/listings/image-7.jpg" />
                            </a>
                        </div>
                    </div>

                    <div class="price">72.00.000</div>

                    <div class="view-details">
                        <a href="#">View Details</a>
                    </div>
                </div>
                <!-- End One Box -->

               
             </div>
            <!-- End New Listings -->
    	</div>
    	<!-- End Content -->

    
		
    
    <!-- End Container -->

   <?php include "footer.php" ?>
   
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="js/jquery.slides.min.js"></script>
	<script type="text/javascript" src="js/jquery.selectbox.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
	
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript">

		// initialise plugins
		jQuery(function(){
			jQuery('ul.sf-menu').superfish();
		});

		</script>
</body>
</html>