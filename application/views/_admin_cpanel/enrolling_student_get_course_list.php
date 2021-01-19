<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<h2> Enroll a student to a course </h2>
<div class="data_entry_view">
<form action="index.php?page_id=_teacher_cpanel/enrolling_student_add_to_course" method="post" name="frmAddStudentToCourses" accept-charset="utf-8">
<fieldset>
<legend>Choose a Course to Add Students to It</legend>

<div class="detail_view readjust_font">
  <p>&nbsp;</p>
<table width="100%" border="1" cellpadding="3" cellspacing="3">
    <tr class="header_caption_row">
    <td>CourseID</td>
    <td>CourseName</td>
    <td>Subject Title</td>
    <td>Description</td>
    <td>StartDate</td>
    <td>EndDate</td>
    <td>Maximum Student</td>
    <td>Total Classes</td>
    <td>Course Fee</td>
    </tr>
  <?php do { ?>
    <tr>
      <td><input name="CourseID" type="radio" value="<?php echo $row_Rs_GetTeacherCoursesList['CourseID']; ?>" /></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['CourseName']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['SubjectTitle']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['Description']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['StartDate']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['EndDate']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['MaxNoOfStudent']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['TotalNoOfClasses']; ?></td>
      <td><?php echo $row_Rs_GetTeacherCoursesList['CourseFee']; ?></td>
      </tr>
    <?php } while ($row_Rs_GetTeacherCoursesList = mysql_fetch_assoc($Rs_GetTeacherCoursesList)); ?>
</table>

   </div>
   <input name="BtnNext" type="submit" Value="Next"/>
</fieldset>
</form>

 </div>
 



<?php
mysql_free_result($Rs_GetTeacherCoursesList);
?>