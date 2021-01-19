<?php require_once("application/controllers/".basename( __FILE__ )); ?>
<div id="user_control_panel">
<?php 
if(isset($_SESSION['MM_UserID']) && isset($_SESSION['MM_UserGroup']) && $_SESSION['MM_UserGroup']==1){ // Administrator
?>                        
   
     <ul class="zorkif_drop_down_menu">
     
     
        <li><a href="?page_id=user_profile_view" class="main_menu" >Welcome!&nbsp;<?php echo $FullName; ?></a>
            <ul class="sub_menu">
                 <li><a href="?page_id=user_profile">Profile</a></li>
                 <li><a href="?page_id=_admin_cpanel/user_registration">Register New User</a></li>
                 <li><a href="?page_id=_admin_cpanel/change_user_password">Change User's Password</a></li>
                 <li><a href="?page_id=change_password">Change Password</a></li>
                 <li><a href="?page_id=logout">Logout</a></li>
   			</ul>
        </li>
        
        
        <li><a href="?page_id=_admin_cpanel/teacher_libraries_list" class="main_menu">Library</a>
               <ul class="sub_menu">
                    <li><a href="?page_id=_admin_cpanel/teacher_libraries_list" >Teacher Libraries</a></li>          
                    <li><a href="?page_id=_admin_cpanel/teacher_library_new" >New Library</a></li>
                    <li><a href="?page_id=_admin_cpanel/teacher_upload_lib_meterials" >Upload Data</a></li>
               </ul>
        </li>
        
        
 		<li><a href="?page_id=_teacher_cpanel/teacher_courses" class="main_menu">Courses</a>
               <ul class="sub_menu">
                    <li><a href="?page_id=_admin_cpanel/teacher_courses_list">Courses List</a></li>          
                    <li><a href="?page_id=_admin_cpanel/teacher_courses_new">New Courses</a></li> 
                    <li><a href="?page_id=_admin_cpanel/enrolling_student_get_course_list.php" >Enrollments</a></li>                
               </ul>
        </li>
        
         
        <li><a href="?page_id=_teacher_cpanel/teacher_courses" class="main_menu">Classes</a>
               <ul class="sub_menu">
                <li><a href="?page_id=_teacher_cpanel/teacher_courses_schedule_vc">Schedule Classes</a></li>              
                <li><a href="?page_id=_teacher_cpanel/teacher_courses_schedule_vc_list" >My Classes</a></li>            
               </ul>
        </li>
        
                  
        <li><a href="?page_id=change_password" class="main_menu">Change Password</a></li>
        <li><a href="?page_id=logout" class="main_menu">Logout</a></li>
        
        </ul>
 <?php
}// End of Administrator's User Panel
?>
<?php 
if(isset($_SESSION['MM_UserID']) && isset($_SESSION['MM_UserGroup']) && $_SESSION['MM_UserGroup']==2){ // Teacher
?>                        
    
      <ul>
        <li><a href="?page_id=user_profile_view" class="main_menu" >Welcome!&nbsp;<?php echo $FullName; ?></a>
            <ul class="sub_menu">
                <li><a href="?page_id=user_profile">Profile</a></li>
            </ul>
       
       
        <li><a href="?page_id=_teacher_cpanel/teacher_libraries_list" class="main_menu">Library</a>
           <ul class="sub_menu">
                <li><a href="?page_id=_teacher_cpanel/teacher_libraries_list" >My Libraries</a></li>          
                <li><a href="?page_id=_teacher_cpanel/teacher_library_new" >New Library</a></li>
                <li><a href="?page_id=_teacher_cpanel/teacher_upload_lib_meterials" >Upload Data</a></li>
           </ul>
        </li>
 		
        
        
        <li><a href="?page_id=_teacher_cpanel/teacher_courses_list" class="main_menu">Courses</a>
           <ul class="sub_menu">
                <li><a href="?page_id=_teacher_cpanel/teacher_courses_list">My Courses</a></li>          
                <li><a href="?page_id=_teacher_cpanel/teacher_courses_new">New Course</a></li>
                <li><a href="?page_id=_teacher_cpanel/enrolling_student_get_course_list.php" >Enrollments</a></li>           
           </ul>
        </li> 
        
        <li><a href="?page_id=_teacher_cpanel/teacher_courses" class="main_menu">Classes</a>
               <ul class="sub_menu">
                <li><a href="?page_id=_teacher_cpanel/teacher_courses_schedule_vc">Schedule Classes</a></li>              
                <li><a href="?page_id=_teacher_cpanel/teacher_courses_schedule_vc_list" >My Classes</a></li>            
               </ul>
        </li>
                 
        <li><a href="?page_id=change_password" class="main_menu">Change Password</a></li>
        <li><a href="?page_id=logout" class="main_menu">Logout</a></li>
        </ul>
   
 <?php
}// End of Teacher's User Panel
?>
<?php 
if(isset($_SESSION['MM_UserID']) && isset($_SESSION['MM_UserGroup']) && $_SESSION['MM_UserGroup']==3){ // Student
?>                        
    <ul class="zorkif_drop_down_menu">
        <li><a href="?page_id=user_profile_view" class="main_menu" >Welcome!&nbsp;<?php echo $FullName; ?></a>
            <ul class="sub_menu">
                <li><a href="?page_id=user_profile">Profile</a></li>
            </ul>
       
        <li><a href="?page_id=_student_cpanel/courses_list" class="main_menu">Courses</a>        
              <ul class="sub_menu">
                 <li><a href="?page_id=_student_cpanel/courses_list">Courses List</a></li>
                 <li><a href="?page_id=_student_cpanel/my_courses">My Courses</a></li>
              </ul>
		</li>
        
        <li><a href="?page_id=change_password" class="main_menu">Change Password</a></li>         
        <li><a href="?page_id=logout" class="main_menu">Logout</a></li>
    </ul>
    
    
    
    
 <?php
}// End of Student's User Panel
?>

<?php 
if(!isset($_SESSION['MM_UserID']) ){ // If no one is Loged in [Default]
?>                        
    <ul class="zorkif_drop_down_menu">
        <li><a href="?page_id=check_login"  class="main_menu">Login</a></li>
        <li><a href="?page_id=student_registration"  class="main_menu">Register as Student</a></li>
        <li><a href="?page_id=teacher_registration"  class="main_menu">Register as Teacher</a></li>
    </ul>
<?php
}// End of no user panel
?>


</div><!-- end of user_control_panel --> 