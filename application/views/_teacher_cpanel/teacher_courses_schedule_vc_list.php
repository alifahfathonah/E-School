<?php require_once("application/controllers/_teacher_cpanel/".basename( __FILE__ )); ?>
<h2> Your Scheduled Classes </h2>
<div class="detail_view">
<table width="100%" border="1" cellpadding="3" cellspacing="3">
     <tr class="header_caption_row">
    <td>Action</td>
    <td>Class ID</td>
    <td>Start Time</td>
    <td>Duration</td>
    <td>View Class</td>
    <td>Download Recording</td>
    <td>Create At</td>
    <td>UpdateAt</td>
    </tr>
    <?php
	$i=0;
	 do {
		$i++;
		if(($i%2)==0) $row_bg="dark"; else $row_bg="light";
	 ?>
      <tr class="<?php echo $row_bg; ?>">
      <td><?php echo $row_RsGetMyScheduledClasses['ClassID']; ?></td>
      <td><?php echo $row_RsGetMyScheduledClasses['WizIQ_class_id']; ?></td>
      <td><?php echo $row_RsGetMyScheduledClasses['WizIQ_start_time']; ?></td>
      <td><?php echo $row_RsGetMyScheduledClasses['WizIQ_duration']; ?></td>
      <td><a href="<?php echo $row_RsGetMyScheduledClasses['WizIQ_presenter_url']; ?>" target="_blank">Start Class</a></td>
      <td><a href="<?php echo $row_RsGetMyScheduledClasses['WizIQ_recording_url']; ?>" target="_blank">Download</a></td>
      <td class="small"><?php echo $row_RsGetMyScheduledClasses['CreateAt']; ?></td>
      <td class="small"><?php echo $row_RsGetMyScheduledClasses['UpdateAt']; ?></td>
    </tr>
    <?php } while ($row_RsGetMyScheduledClasses = mysql_fetch_assoc($RsGetMyScheduledClasses)); ?>
</table>
</div>
<?php
mysql_free_result($RsGetMyScheduledClasses);
?>
