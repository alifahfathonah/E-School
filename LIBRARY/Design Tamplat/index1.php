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
            	<div id="header_top_nav" class="round_corners">
                      <a href="aboutus.php">About us</a>
                      <a href="contactus.php">Contact Us</a>
                      <a href="index.php">Home</a>                                                  
                </div><!-- end of header_top_nav -->
 				
                <div id="header_top_logo">
                <img src="images/header_top_nav/e_school_logo.png" width="150" height="65">
                </div><!-- End of header_top_logo -->
                
            </div><!-- End of header -->
            
  			<div id="zorkif_slider" class="round_corners">
            
                <div id="wrapper">
                  <div class="slider-wrapper theme-default">
                    <div id="slider" class="nivoSlider">
                        <img src="images/slides/slide1.jpg" alt="" data-transition="boxRandom"/>
                        <img src="images/slides/slide2.jpg" alt="" data-transition="boxRandom"/>
                        <img src="images/slides/slide3.jpg" alt="" data-transition="boxRandom"/>
                        <img src="images/slides/slide4.jpg" alt="" data-transition="boxRandom"/>
                        <img src="images/slides/slide5.jpg" alt="" data-transition="boxRandom"/>
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
                     <a href="aboutus.php">About us</a> 
                     <a href="support.php">Support</a>
                     <a href="blog.php">Blog</a>
                </div>            
            </div><!-- zorkif_slider -->
            
            <div id="content_container">

             <div class="first_column">
               <h2>Features:</h2>
               <ul>
                 <li><strong>General</strong>
                   <ul>
                     <li>Signature Tapbots Interface and Experience</li>
                     <li>Interaction Sounds</li>
                   </ul>
                 </li>
                 <li><strong>Composing</strong>
                   <ul>
                     <li>Drafts</li>
                     <li>Auto URL Shortening</li>
                     <li>Current Locations &amp; Points of Interest</li>
                     <li>Photo/Video Uploads</li>
                     <li>Post from Another Account</li>
                   </ul>
                 </li>
                 <li><strong>Navigation</strong>
                   <ul>
                     <li>Timeline</li>
                     <li>Mentions</li>
                     <li>Direct Messages</li>
                     <li>Favorites</li>
                     <li>Retweets</li>
                     <li>Lists</li>
                     <li>Profile</li>
                     <li>Search (Tweets and People)</li>
                     <li>Mute (Mute users and services from your timeline)</li>
                   </ul>
                 </li>
                 <li><strong>Timeline</strong>
                   <ul>
                     <li>Multiple Timelines</li>
                     <li>Intuitive Navigation Gestures</li>
                     <li>Quick Access to Common Actions</li>
                     <li>New Tweets Notification Bar</li>
                     <li>Retweet from Multiple Accounts (by holding down on the retweet button)</li>
                     <li>Mute Users and Services</li>
                     <li>Image, Video, and App Store thumbnail previews</li>
                     <li>iCloud Sync (timeline, DM read status, and mute filters)</li>
                     <li>Tweetmarker Support</li>
                   </ul>
                 </li>
               </ul>
             </div><!-- end of first_column -->
             <div class="second_column">
               <div id="body">
                 <div>
                   <div id="software-header">
                     <div>
                       <h1>Tweetbot for iPad</h1>
                       <p>A Twitter Client with Personality.</p>
                     </div>
                     <p id="share_twitter"><a href="http://twitter.com/home?status=Tweetbot%20for%20iPad:%20http://tapbots.com/software/tweetbot/ipad">Share this page on Twitter!</a></p>
                     <ul id="subnav">
                       <li><a href="http://tapbots.com/software/tweetbot/ipad/#content-overview">Overview</a></li>
                       <li><a href="http://tapbots.com/software/tweetbot/ipad/#content-gallery">Gallery</a></li>
                     </ul>
                   </div>
                   <div id="content-main">
                     <div id="content-overview">
                       <p>Tweetbot for iPad is a full-featured Twitter client   with a lot of personality. Whether it&rsquo;s the meticulously-crafted   interface, sounds &amp; animation, or features like multiple timelines   &amp; smart gestures, there&rsquo;s a lot to love about Tweetbot.</p>
                       <div id="video">
                         <p id="video-link"><a href="http://c200349.r49.cf1.rackcdn.com/tweetbotipad_iphone.m4v" id="show_movie">Watch the Tweetbot Demo Video</a></p>
                         <div id="video-container"> <a href="http://tapbots.com/software/tweetbot/ipad/#" id="hide_movie"></a><a id="movie_link" href="http://c200349.r49.cf1.rackcdn.com/tweetbotipad_website.mov"></a>
                           <div id="clip"></div>
                         </div>
                       </div>
                       <hr>
                       <img src="http://tapbots.com/img/software/tweetbot/icon_multiple_ipad.png" alt="Multiple Timelines" height="174" width="244">
                       <h3>Multiple Timelines</h3>
                       <p>Following too many people? Maybe you only want to read tweets from   co-workers while at work. Use your Twitter lists as fully functional   timelines. Create lists for friends, family, co-workers, and more.   Tweetbot lets you switch between them as separate timelines.</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div><!-- end of second_column -->
             
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
</body>
</html>