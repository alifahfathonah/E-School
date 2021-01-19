<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<h2> List of Teacher's Library </h2>
<div class="detail_view">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr class="header_caption_row">
      <td colspan="5">Action</td>
      <td>Teacher User Name</td>
      <td>Name</td>
      <td>Description</td>
      <td>Create Date</td>
      <td>Updated</td>
    </tr>
    <?php
	$i=0;
	 do {
		$i++;
		if(($i%2)==0) $row_bg="dark"; else $row_bg="light";
	 ?>
      <tr class="<?php echo $row_bg; ?>">
 <td><a href="?page_id=_admin_cpanel/teacher_library_new"><img src="images/icons/new.png" width="16" height="16" /></a></td>      
      <td><a href="?page_id=_admin_cpanel/teacher_libraries_view&ViewID=<?php echo $row_RsGetTeachersLibs['TeacherLibID']; ?>"><img src="images/icons/view.gif" width="16" height="16" /></a></td>
        <td><a href="?page_id=_admin_cpanel/teacher_libraries_edit&EditID=<?php echo $row_RsGetTeachersLibs['TeacherLibID']; ?>" onclick="return confirm('Are you sure you want to Edit this record?');"><img src="images/icons/edit.gif" width="16" height="16" /></a></td>
        <td><a href="?page_id=_admin_cpanel/delete_teacher_libraries&DeleteID=<?php echo $row_RsGetTeachersLibs['TeacherLibID']; ?>" onclick="return confirm('Are you sure you want to delete this record?');"><img src="images/icons/delete.gif" width="16" height="16" /></a></td>
        <td><a href="?page_id=_admin_cpanel/teacher_upload_lib_meterials&UploadID=<?php echo $row_RsGetTeachersLibs['TeacherLibID']; ?>"  onclick="return confirm('Are you sure you want to Upload Meterial to  this Library?');"><img src="images/icons/upload.png" width="16" height="16" /></a></td>
        <td><?php echo $row_RsGetTeachersLibs['Username']; ?></td>
        <td><?php echo $row_RsGetTeachersLibs['LibName']; ?></td>
        <td><?php echo $row_RsGetTeachersLibs['LibDescription']; ?></td>
        <td class="small"><?php echo $row_RsGetTeachersLibs['CreateAt']; ?></td>
        <td class="small"><?php echo $row_RsGetTeachersLibs['UpdateAt']; ?></td>
      </tr>
      <?php } while ($row_RsGetTeachersLibs = mysql_fetch_assoc($RsGetTeachersLibs)); ?>
  </table>
  
   <?php if ($totalPages_RsGetTeachersLibs>1){ ?> 
  <div>
    <table border="0">
      <tr>
        <td><?php if ($pageNum_RsGetTeachersLibs > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_RsGetTeachersLibs=%d%s", $currentPage, 0, $queryString_RsGetTeachersLibs); ?>">First</a>
            <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_RsGetTeachersLibs > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_RsGetTeachersLibs=%d%s", $currentPage, max(0, $pageNum_RsGetTeachersLibs - 1), $queryString_RsGetTeachersLibs); ?>">Previous</a>
            <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_RsGetTeachersLibs < $totalPages_RsGetTeachersLibs) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_RsGetTeachersLibs=%d%s", $currentPage, min($totalPages_RsGetTeachersLibs, $pageNum_RsGetTeachersLibs + 1), $queryString_RsGetTeachersLibs); ?>">Next</a>
            <?php } // Show if not last page ?></td>
        <td><?php if ($pageNum_RsGetTeachersLibs < $totalPages_RsGetTeachersLibs) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_RsGetTeachersLibs=%d%s", $currentPage, $totalPages_RsGetTeachersLibs, $queryString_RsGetTeachersLibs); ?>">Last</a>
            <?php } // Show if not last page ?></td>
      </tr>
    </table>
  </div> <!-- end of Page Navigation -->
  <?php }?>
</div>
<?php
mysql_free_result($RsGetTeachersLibs);
?>
