<?php require_once("application/controllers/_admin_cpanel/".basename( __FILE__ )); ?>
<h2> View Teacher's Libraries </h2>
<?php if($totalRows_Rs_GetLibrary>0) { ?>
<div class="detail_view"> 
<strong>Library Details </strong>
 <table width="100%" border="1" cellspacing="2" cellpadding="2">
    <tr class="header_caption_row">
      <td>Library Name</td>
      <td>Create At</td>
      <td>Update At</td>
    </tr>
    <tr>
      <td><?php echo $row_Rs_GetLibrary['LibName']; ?></td>
      <td><?php echo $row_Rs_GetLibrary['CreateAt']; ?></td>
      <td><?php echo $row_Rs_GetLibrary['UpdateAt']; ?></td>
    </tr>
    <tr>
      <td colspan="3"><?php echo $row_Rs_GetLibrary['LibDescription']; ?></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<?php if(!empty($totalRows_Rs_GetMeterialUploadList)>0){ ?>
 <div class="detail_view">
  <strong>Meterial Uploaded for this Library</strong>
  <table border="1" cellpadding="3" cellspacing="3" width="100%">
    <tr class="header_caption_row">
      <td colspan="2">Action</td>
      <td>Description</td>
      <td>Downloadable</td>
      <td>CreateAt</td>
      <td>UpdateAt</td>
      <td>ShareWith</td>
    </tr>
    <?php
	$i=0;
	 do {
		$i++;
		if(($i%2)==0) $row_bg="dark"; else $row_bg="light";
	 ?>
      <tr class="<?php echo $row_bg; ?>">
        <td><a href="index.php?page_id=_teacher_cpanel/delete_library_meterial&ViewID=<?php echo $_GET['ViewID']?>&DeleteID=<?php echo $row_Rs_GetMeterialUploadList['TeacherLibMetrialID']; ?>"><img src="images/icons/delete.gif" width="16" height="16"></a></td>
        <td><a href="<?php echo USER_LIBRARY_UPLOAD_PATH.$row_Rs_GetMeterialUploadList['DataFileName']; ?>" target="_blank"><img src="images/icons/download.png" width="16" height="16"></a></td>
        <td><?php echo $row_Rs_GetMeterialUploadList['Description']; ?></td>
        <td><?php if($row_Rs_GetMeterialUploadList['IsDownloadable']==1){ ?><img src="images/icons/tick.png" width="16" height="16"><?php }else { ?><img src="images/icons/cross.png" width="16" height="16"><?php } ?></td>
        <td class="small"><?php echo $row_Rs_GetMeterialUploadList['CreateAt']; ?></td>
        <td class="small"><?php echo $row_Rs_GetMeterialUploadList['UpdateAt']; ?></td>
        <td><?php echo $row_Rs_GetMeterialUploadList['ShareWith']; ?></td>
      </tr>
      <?php } while ($row_Rs_GetMeterialUploadList = mysql_fetch_assoc($Rs_GetMeterialUploadList)); ?>
  </table>
</div> <?php }?>
<p>&nbsp;</p>
<?php
mysql_free_result($Rs_GetLibrary);

mysql_free_result($Rs_GetMeterialUploadList);
}// End of  if($totalRows_Rs_GetLibrary<=0) {
?>
