<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8">
<title>Zorkif Business One Next Generation</title>
<link href="styles/zorkif_fluid_main.css" rel="stylesheet" type="text/css">
<script src="scripts/jquery-1.8.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="scripts/cssrefreshNONE.js"></script><!-- for Develoment Perpose Only and must be removed in the production version -->

<!-- Start of Accordion Menu -->
<link href="scripts/horz_accordion_menu/accordion_menu.css" rel="stylesheet" type="text/css">
<script src="scripts/horz_accordion_menu/accordion_menu.js" type="text/javascript"></script>
<!-- End of Accordion Menu -->

<!--  Nivo Image Slider -->
<link rel="stylesheet" href="scripts/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="scripts/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<!-- End of Image Slider -->

<link rel="shortcut icon" href="favicon.ico" />



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
    <div id="header_container_spacer"></div>
            <div id="header_container">
            <div id="header"><!-- end of header_top_nav -->
 				
                <div id="header_top_logo">
                <img src="images/header_top_nav/logo.png" width="191" height="80">
                </div><!-- End of header_top_logo -->
                <div id="header_top_nav">
                   <ul>
                    <li><a href="#" >Welcome Kifayat Ullah</a></li>
                    <li><a href="#">Option</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Sign Out</a></li>
                    
                  </ul>
                </div><!-- end of header_top_nav -->
            </div><!-- End of header -->
 			<div id="tab_bar">
              <div class="tab_bar_spacer"> &nbsp; </div>
              <ul>
                <li><a href="#"class="active" id="btnSystem">System</a></li>
                <li><a href="#">ERP</a></li>
                <li><a href="#">MIS</a></li>
                <li><a href="#">Accounts</a></li>
              </ul>
              <div id="current_page_title"> Welcome to ERP </div>
            </div><!-- end of tab_bar -->
            <div id="action_buttons">
              <div id="search_box">
                    <form name="frmsearch">
                      <input type="text" name="search_text" placeholder="Enter Text to Search">
                      <input type="submit" name="submit" value="GO">
                    </form>
              </div><!-- end of search_box -->
              <div id="buttons">
                 <ul>
                    <li><a href="#">New</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="#" class="active">Copy</a></li>
                    <li><a href="#">Delete</a></li>                               
                    <li><a href="#">Save</a></li>
                 </ul>
              </div><!-- end of buttons -->
            </div><!-- end of action_buttons -->
            </div><!-- end of header_container -->
            
            <div class="content_container">
             <div class="first_column">
               <!-- Start of CSS3 Menu -->
               <?php require_once("includes/left_menu_cpanel.php"); ?>
		
               <!-- End of CSS3 Menu -->
               
             </div><!-- end of first_column -->
             <div class="second_column">
                <div class="second_column_content_container">
                <div class="tiles">
                 <?php require_once("includes/tiles_cpanel.php"); ?>
                </div> <!-- end of tiles -->
               <div class="clear_all">&nbsp;</div>    
                <div class="data_column_a">
  <div class="data_entry_view">
    <form action="" method="get">
      <fieldset><legend>Data Entry</legend>
        <label for="Username">Username</label>
        <input name="Username" type="text" class="text_box" accesskey="a" tabindex="1" value="" placeholder="End Your Name Here">
        
        <label for="Password">Password</label>
        <input name="Password" type="text" class="text_box" accesskey="a" tabindex="2" value="" placeholder="End Your Password">
        <label for="Gender">Gender</label>
        <select name="Gender" id="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>                   
          </select>
        <label for="Message">End Your Message</label>
        <textarea name="Message" id="Message"></textarea>
        <label for="textfield">Upload Your Photo</label>
        <input type="file" name="test" id="test">
        <label for="ClassTimingGroup">What time you prefer for the class?</label>
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming1">
          Morning Classes
          </label>
        
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming2">
          Evening Classes
          </label>                 
        
        
        <label for="Likes">What would you like to do?</label>
        <label for="LikesHockey">
          <input name="Hockey" type="checkbox" value="Hockey">
          Hockey
          </label>
        
        <label for="LikesGuliDanda">
          <input name="GuliDanda" type="checkbox" value="GuliDanda">
          GuliDanda
          </label>
        <label for="LikesCricket">
          <input name="Cricket" type="checkbox" value="Cricket">
          Cricket
          </label>
        
        
        
        <input name="SignIn" type="Submit" class="glow_button1" accesskey="s" tabindex="3" value="Sign In">
        </fieldset>
      </form>
    
  </div>
                  <!-- end of data_entry_form --></div>
                  
                 
<div class="data_column_a ">
  <div class="data_entry_view">
    <form action="" method="get">
      <fieldset><legend>Data Entry</legend>
        <label for="Username">Username</label>
        <input name="Username" type="text" class="text_box" accesskey="a" tabindex="1" value="" placeholder="End Your Name Here">
        
        <label for="Password">Password</label>
        <input name="Password" type="text" class="text_box" accesskey="a" tabindex="2" value="" placeholder="End Your Password">
        <label for="Gender">Gender</label>
        <select name="Gender" id="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>                   
          </select>
        <label for="Message">End Your Message</label>
        <textarea name="Message" id="Message"></textarea>
        <label for="textfield">Upload Your Photo</label>
        <input type="file" name="test" id="test">
        <label for="ClassTimingGroup">What time you prefer for the class?</label>
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming1">
          Morning Classes
          </label>
        
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming2">
          Evening Classes
          </label>                 
        
        
        <label for="Likes">What would you like to do?</label>
        <label for="LikesHockey">
          <input name="Hockey" type="checkbox" value="Hockey">
          Hockey
          </label>
        
        <label for="LikesGuliDanda">
          <input name="GuliDanda" type="checkbox" value="GuliDanda">
          GuliDanda
          </label>
        <label for="LikesCricket">
          <input name="Cricket" type="checkbox" value="Cricket">
          Cricket
          </label>
        
        
        
        <input name="SignIn" type="Submit" class="glow_button1" accesskey="s" tabindex="3" value="Sign In">
        </fieldset>
      </form>
    
  </div>
                  <!-- end of data_entry_form --></div>
                  
                  
                  
                  <div class="data_column_a">
  <div class="data_entry_view">
    <form action="" method="get">
      <fieldset><legend>Data Entry</legend>
        <label for="Username">Username</label>
        <input name="Username" type="text" class="text_box" accesskey="a" tabindex="1" value="" placeholder="End Your Name Here">
        
        <label for="Password">Password</label>
        <input name="Password" type="text" class="text_box" accesskey="a" tabindex="2" value="" placeholder="End Your Password">
        <label for="Gender">Gender</label>
        <select name="Gender" id="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>                   
          </select>
        <label for="Message">End Your Message</label>
        <textarea name="Message" id="Message"></textarea>
        <label for="textfield">Upload Your Photo</label>
        <input type="file" name="test" id="test">
        <label for="ClassTimingGroup">What time you prefer for the class?</label>
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming1">
          Morning Classes
          </label>
        
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming2">
          Evening Classes
          </label>                 
        
        
        <label for="Likes">What would you like to do?</label>
        <label for="LikesHockey">
          <input name="Hockey" type="checkbox" value="Hockey">
          Hockey
          </label>
        
        <label for="LikesGuliDanda">
          <input name="GuliDanda" type="checkbox" value="GuliDanda">
          GuliDanda
          </label>
        <label for="LikesCricket">
          <input name="Cricket" type="checkbox" value="Cricket">
          Cricket
          </label>
        
        
        
        <input name="SignIn" type="Submit" class="glow_button1" accesskey="s" tabindex="3" value="Sign In">
        </fieldset>
      </form>
    
  </div>
                  <!-- end of data_entry_form --></div>
                  
                  
<div class="clear_all">&nbsp;</div>                 
                  <div class="data_column_b">
  <div class="data_entry_view">
    <form action="" method="get">
      <fieldset><legend>Data Entry</legend>
        <label for="Username">Username</label>
        <input name="Username" type="text" class="text_box" accesskey="a" tabindex="1" value="" placeholder="End Your Name Here">
        
        <label for="Password">Password</label>
        <input name="Password" type="text" class="text_box" accesskey="a" tabindex="2" value="" placeholder="End Your Password">
        <label for="Gender">Gender</label>
        <select name="Gender" id="Gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>                   
          </select>
        <label for="Message">End Your Message</label>
        <textarea name="Message" id="Message"></textarea>
        <label for="textfield">Upload Your Photo</label>
        <input type="file" name="test" id="test">
        <label for="ClassTimingGroup">What time you prefer for the class?</label>
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming1">
          Morning Classes
          </label>
        
        <label>
          <input type="radio" name="ClassTimingGroup" value="radio" id="ClassTiming2">
          Evening Classes
          </label>                 
        
        
        <label for="Likes">What would you like to do?</label>
        <label for="LikesHockey">
          <input name="Hockey" type="checkbox" value="Hockey">
          Hockey
          </label>
        
        <label for="LikesGuliDanda">
          <input name="GuliDanda" type="checkbox" value="GuliDanda">
          GuliDanda
          </label>
        <label for="LikesCricket">
          <input name="Cricket" type="checkbox" value="Cricket">
          Cricket
          </label>
        
        
        
        <input name="SignIn" type="Submit" class="glow_button1" accesskey="s" tabindex="3" value="Sign In">
        </fieldset>
      </form>
    
  </div>
                  <!-- end of data_entry_form --></div>
                 <div class="clear_all">&nbsp;</div>                   
<div class="detail_view">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="header_caption_row">
                        <td></td>
                        <td>To</td>
                        <td>From</td>
                        <td>Action</td>
                        <td>Class Name</td>
                        <td>Department</td>
                        <td>Status</td>
                        <td>Group Name</td>
                        <td>Token</td>
                        <td>Random</td>
                        <td>Code Name</td>
                        <td>Asus</td>
                        <td>Dell</td>
                        <td>Toshiba</td>
                        <td>Soney</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome3Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>                    <tr>
                          
  <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                        <td>Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                      </tr>
                      <tr>
                        <td><input name="chkActionID" type="checkbox" value="1"></td>
                        <td>2Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>3Welcome</td>
                        <td>4Welcome</td>
                        <td>5Welcome</td>
                        <td>6Welcome</td>
                        <td>7Welcome</td>
                        <td>8Welcome</td>
                        <td>9Welcome</td>
                        <td>10Welcome</td>
                        </tr>                                                                                                                                            
                      </table>
                  </div>
                  <p>&nbsp;</p>
                </div> <!-- end of second_column_content_container -->
             </div><!-- end of second_column -->
             
      </div><!-- end of content_container -->


                     
  </div><!-- End of main_container -->
<script type="text/javascript">
// To Apply the accordian like effect on the left side menu.
$(".main_menu .btn_main").click(function(event) { // the left side main menu go sub menu and toggle it
  event.preventDefault();
  $(this).next('.sub_menu').slideToggle(200);
});

$(document).ready(function() {
      fn_resize_second_column();
});

$(window).resize(function() {
  fn_resize_second_column();
});
function fn_resize_second_column(){
	$('.second_column').width($(window).width()-250);;
	 // alert("Resizeing the Second Column");	
}


</script>  



        
</body>
</html>