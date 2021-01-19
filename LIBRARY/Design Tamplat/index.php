<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8">
<title>Welcome to E-School</title>
<link href="styles/zorkif_fluid_grids.css" rel="stylesheet" type="text/css">
<script src="scripts/jquery-1.8.3.min.js" type="text/javascript"></script>

<!--  Nivo Image Slider -->
<link rel="stylesheet" href="scripts/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="scripts/nivo-slider/nivo-slider.css" type="text/css" media="screen" />

<!-- End of Image Slider -->

</head>

<body>
    <div id="error_message">
        Error Occured.
    </div><!-- end of error_message -->
    
    <div id="warning_message">
        Warning!. Make sure you perform the correct action.
    </div><!-- End of warning_message -->
    
    <div id="notification_message">
        The Action has been completed Successfully.
    </div><!-- End of notification_message -->

	<div class="main_container">
            <div id="header">            	
               <ul class="nav">
                    <li class="home">
                    <a href="/">Home</a>
                    </li>
                    <li class="software selected">
                    <a href="software.php">Software</a>
                    </li>
                    <li class="support">
                    <a href="support.php">Support</a>
                    </li>
                    <li class="blog">
                    <a href="blog.php">Blog</a>
                    </li>
                    <li class="company">
                    <a href="cpmpany.php">Company</a>
                    </li>
                </ul>                                                  
                
 				
                <div id="header_top_logo">
                <img src="images/header_top_nav/e_school_logo.png" width="150" height="65">
                </div><!-- End of header_top_logo -->
                
            </div><!-- End of header -->
            
  			<div id="zorkif_slider" class="round_corners">
            
                <div id="wrapper">
                  <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="images/slides/slide1.jpg" alt="" data-transition="boxRandom"/>
                       
                    </div>
                  </div>
                </div>
			<script type="text/javascript" src="scripts/nivo-slider/jquery.nivo.slider.pack.js"></script>
            <script type="text/javascript">
            $(window).load(function() {
                //$('#slider').nivoSlider();  // Defualt Behaviour
                
                
                    $('#slider').nivoSlider({
                        effect: 'fade',
                        controlNav: false
                     });
            });
            </script><!-- end of nivo slider -->
            	<div class="zorkif_slider_menu_bar">
                     <div class="clear_all"></div> 
                    
                </div>            
            </div><!-- zorkif_slider -->
            
            <div id="content_container">

             
             
             </div><!-- end of content_container -->


                     
  </div><!-- End of main_container -->
            <div id="footer_container">
           	  <div id="footer"> 
                    <div class="footer_column round_corners">
                        <div class="icon">
                        <img src="images/footer/about.png" width="200" height="198" alt="About us">
                        </div><!-- end of icon -->
                        <div class="text_content">
                                <h2>About</h2>
                                <p>This is just some text </p>
                        </div><!-- end of column text_content -->
           			</div><!-- end of footer_column -->                
				<div class="footer_column_divider"> </div> <!-- end of footer_column_divider -->
 
                    <div class="footer_column round_corners">
                        <div class="icon">
                        <img src="images/footer/blog.png" width="200" height="198" alt="About us">
                        </div><!-- end of icon -->
                        <div class="text_content">
                                <h2>Blog</h2>
                                <p>This is just some text </p>
                        </div><!-- end of column text_content -->
           			</div><!-- end of footer_column -->                
				<div class="footer_column_divider"> </div> <!-- end of footer_column_divider -->
 
  
                      <div class="footer_column round_corners">
                        <div class="icon">
                        <img src="images/footer/help.png" width="200" height="198" alt="About us">
                        </div><!-- end of icon -->
                        <div class="text_content">
                                <h2>Help</h2>
                                <p>This is just some text </p>
                        </div><!-- end of column text_content -->
           			</div><!-- end of footer_column -->                
				<div class="footer_column_divider"> </div> <!-- end of footer_column_divider -->
 
  
                      <div class="footer_column round_corners">
                        <div class="icon">
                        <img src="images/footer/twitter.png" width="200" height="198" alt="About us">
                        </div><!-- end of icon -->
                        <div class="text_content">
                                <h2>Twitter</h2>
                                <p>This is just some text </p>
                        </div><!-- end of column text_content -->
           			</div><!-- end of footer_column -->                
				<div class="clear_all">&nbsp;</div>
  				<div id="footer_bar" class="round_corners">
                	<div id="footer_bar_text_message">Want the Latest News? Join our mailling list!</div>
                    <div id="footerbar_newsletter_subscription"><form><input type="text" name="newsletter" placeholder="YOUR EMAIL HERE" class="round_corners">
                      <input type="submit" name="button" id="button" value="Submit">
                    </form></div>
                </div>  
				<div class="clear_all">&nbsp;</div>
                <div class="footer_note">©2008-2012 CityNet, LLC. All Rights Reserved. A Product of CityNet.com.co.</div>                  
                <div class="clear_all">&nbsp;</div>                                
              </div><!-- end of footer -->     
            </div><!-- end of footer_contrainer -->            
<script type="text/javascript">
// This is the jQuery Script that will be used to control the Tabes in the page.

$(document).ready(function() {
      	$("#tab1").show(); // Show Tab1 by default
});

$(".zorkif_slider_menu_bar a").click(function(event) {
  	
	event.preventDefault(); // Prevent Default Hyperlink Click
	  
	if($(this).attr('id')=="about_us") {
		 $("#tab3").hide(); 
		 $("#tab2").hide(); 
		 $("#tab1").show();

	}
	if($(this).attr('id')=="support") {
    	//alert($(this).attr('id'));
		 $("#tab3").hide(); 
		 $("#tab1").hide(); 
		 $("#tab2").show();
	}
	if($(this).attr('id')=="blog") {
 		//alert($(this).attr('id'));
		 $("#tab2").hide(); 
		 $("#tab1").hide(); 
		 $("#tab3").show();
	}	                   
});



</script>
</body>
</html>