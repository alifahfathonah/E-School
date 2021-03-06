<?php require_once("application/controllers/_teacher_cpanel/".basename( __FILE__ )); ?>
<h2> Teacher's Courses List </h2>
<?php if( $totalRows_RsCoursesList>0){?>
 <div class="detail_view">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="100%" border="1" cellpadding="3" cellspacing="3">
    <tr class="header_caption_row">
      <td colspan="4">Action</td>
      <td>Subject</td>
      <td>CourseName</td>
      <td>Description</td>
      <td>StartDate</td>
      <td>EndDate</td>
      <td>IsEnrollable</td>
      <td>MaxNoOfStudent</td>
      <td>#Classes</td>
      <td>CourseFee</td>
    </tr>
    <?php
	$i=0;
	 do {
		$i++;
		if(($i%2)==0) $row_bg="dark"; else $row_bg="light";
	 ?>
      <tr class="<?php echo $row_bg; ?>">
       <td><a href="?page_id=_teacher_cpanel/teacher_courses_new"><img src="images/icons/new.png" width="16" height="16" /></a></td>
        <td><a href="?page_id=_teacher_cpanel/edit_course_details&EditID=<?php echo $row_RsCoursesList['CourseID']; ?>" onclick="return confirm('Are you sure you want to Edit this record?');"><img src="images/icons/edit.gif" width="16" height="16" /></a></td>
        <td><a href="?page_id=_teacher_cpanel/delete_course&DeleteID=<?php echo $row_RsCoursesList['CourseID']; ?>" onclick="return confirm('Are you sure you want to delete this record?');"><img src="images/icons/delete.gif" width="16" height="16" /></a></td>
<td><a href="<?php echo USER_COURSES_UPLOAD_PATH.$row_RsCoursesList['ContentDataFileName'] ?>" target="_blank"><img src="images/icons/download.png" width="16" height="16" /></a></td>        
        <td><?php echo $row_RsCoursesList['SubjectTitle']; ?></td>
        <td><?php echo $row_RsCoursesList['CourseName']; ?></td>
        <td><?php echo $row_RsCoursesList['Description']; ?></td>
        <td class="small"><?php echo $row_RsCoursesList['StartDate']; ?></td>
        <td class="small"><?php echo $row_RsCoursesList['EndDate']; ?></td>
        <td class="small"><?php   if($row_RsCoursesList['IsEnrollable']==1){  ?>
        <img src="images/icons/tick.png" width="16" height="16" /><?php }else{ ?>
        <img src="images/icons/cross.png" width="16" height="16" /> <?php } ?></td>
        <td class="small"><?php echo $row_RsCoursesList['MaxNoOfStudent']; ?></td>
        <td class="small"><?php echo $row_RsCoursesList['TotalNoOfClasses']; ?></td>
        <td class="small"><?php echo $row_RsCoursesList['CourseFee']; ?></td>
      </tr>
      <?php } while ($row_RsCoursesList = mysql_fetch_assoc($RsCoursesList)); ?>
  </table>

<p>&nbsp;</p>
<?php if($totalPages_RsCoursesList>1){ ?>
<div>

  <table border="0">
    <tr>
      <td><?php if ($pageNum_RsCoursesList > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_RsCoursesList=%d%s", $currentPage, 0, $queryString_RsCoursesList); ?>">First</a>
          <?php } // Show if not first page ?></td>
      <td><?php if ($pageNum_RsCoursesList > 0) { // Show if not first page ?>
          <a href="<?php printf("%s?pageNum_RsCoursesList=%d%s", $currentPage, max(0, $pageNum_RsCoursesList - 1), $queryString_RsCoursesList); ?>">Previous</a>
          <?php } // Show if not first page ?></td>
      <td><?php if ($pageNum_RsCoursesList < $totalPages_RsCoursesList) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_RsCoursesList=%d%s", $currentPage, min($totalPages_RsCoursesList, $pageNum_RsCoursesList + 1), $queryString_RsCoursesList); ?>">Next</a>
          <?php } // Show if not last page ?></td>
      <td><?php if ($pageNum_RsCoursesList < $totalPages_RsCoursesList) { // Show if not last page ?>
          <a href="<?php printf("%s?pageNum_RsCoursesList=%d%s", $currentPage, $totalPages_RsCoursesList, $queryString_RsCoursesList); ?>">Last</a>
          <?php } // Show if not last page ?></td>
    </tr>
  </table>

</div>

<?php }// end of Page Count check ?>
</div> 
<?php }else{
	 fnShowMessageBox(MSG_NO_RECORDS_FOUND,MSG_TITLE_NO_RECORDS_FOUND);  
}?>
<?php
@mysql_free_result($RsCoursesList);
?>

