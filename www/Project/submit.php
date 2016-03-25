<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <title>Downloaded from link</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
<body>
   <?php include "head.php" ?>

    <!-- Container -->
    <div id="container">
    	<!-- Content -->
    	<div id="content">
    		<h4>Submit your listing</h4>
    		<p>Consectetur adipiscing  aliquam eget felis. Quisque dolor nulla, mattis sit amet luctus at, sodales. Ut et ultrices est. Vestibulum sodales dui nibh. Sed ullamcorper, ante eget mollis mattis, risus leo cursus libero, ac </p>

    		<div class="dotted-seperator"></div>

    		<form />
    			<div class="row-1">
    				<label>Property Title</label>
    				<input type="text" name="" value="" />
    			</div>
    						
    			<div class="row-1">
    				<label>Property description</label>
    				<textarea name=""></textarea>
    			</div>

                <div class="row-1">
                    <label>Property Price</label>
                    <select class="select normal">
                        <option value="" />10,00,000 - 25,00,000
                        <option value="" />25,00,000 - 50,00,000
                        <option value="" />50,00,000 - 1,00,00,000                    </select>

                    <div class="radiobox-container">
                        <input name="test1" class="radiobox" type="radio" value="" />
                        <span class="radio-value">For Sale</span>
                    </div>

                    <div class="radiobox-container">
                        <input name="test1" class="radiobox" type="radio" value="" />
                        <span class="radio-value">For Rent</span>
                    </div>

                    <div class="radiobox-container">
                        <input name="test1" class="radiobox" type="radio" value="" />
                        <span class="radio-value">Commercial Property</span>
                    </div>
                </div>

                <div class="dotted-seperator"></div>

                <div class="row-1">
                    <label>Property Photo 1</label>
                    <input type="file" data-value="Add Photo" value="" />
                </div>

                <div class="row-1">
                    <label>Property Photo 2</label>
                    <input type="file" data-value="Add Photo" value="" />
                </div>

                <div class="row-1">
                    <label>Property Photo 3</label>
                    <input type="file" data-value="Add Photo" value="" />
                </div>

                <div class="row-1">
                    <label>Property Photo 4</label>
                    <input type="file" data-value="Add Photo" value="" />
                </div>

                <div class="row-1">
                    <label>Property Photo 5</label>
                    <input type="file" data-value="Add Photo" value="" />
                </div>

                <div class="dotted-seperator"></div>

                <div class="row-1">
                    <label>Property Location</label>
                    <select class="select normal">
                        <option value="" />Ahmedabad
                        <option value="" />Surat
                        <option value="" />Baroda
                    </select>

                    <div class="radiobox-container">
                        <input name="test2" class="radiobox" type="radio" value="" />
                        <span class="radio-value">Association Fees</span>
                    </div>
                    
                    <div class="radiobox-container">
                        <input name="test2" class="radiobox" type="radio" value="" />
                        <span class="radio-value">Waterfront</span>
                    </div>
                    
                    <div class="radiobox-container">
                        <input name="test2" class="radiobox" type="radio" value="" />
                        <span class="radio-value">Swimming Pool</span>
                    </div>
                    
                    <div class="radiobox-container">
                        <input name="test2" class="radiobox" type="radio" value="" />
                        <span class="radio-value">Patio</span>
                    </div>

                    <div class="radiobox-container">
                        <input name="test2" class="radiobox" type="radio" value="" />
                        <span class="radio-value">New Construction</span>
                    </div>
                </div>

                <div class="row-1">
                    <label>Property Tags</label>
                    <input type="text" name="" value="" />
                </div>

    			<input class="button" type="submit" value="Submit" />
    		</form>
    	</div>
    	<!-- End Content -->

    	<?php include "sidebar.php" ?>
    </div>
    <!-- End Container -->

   <?php include "footer.php" ?>

    <script type="text/javascript" src="js/jquery.min.js"></script>
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