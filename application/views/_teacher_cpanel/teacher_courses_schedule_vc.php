<?php require_once("application/controllers/_teacher_cpanel/".basename( __FILE__ )); ?>
<h2> Add Teacher's Courses Virtual Class Schedule </h2>
<div class="data_entry_view">
  <form action="?page_id=_teacher_cpanel/teacher_courses_schedule_vc_show_dates" method="post" name="frmClassSchedule" id="frmClassSchedule" accept-charset="utf-8">
   <fieldset>
   <legend> Schedule your Course</legend>
    <table width="100%" align="center">
      <tr valign="baseline">
        <td>Course Name:</td>
        <td colspan="6">&nbsp;</td>
      <tr valign="baseline">
        <td colspan="7"><select name="CourseID">
          <?php 
do {  
?>
          <option value="<?php echo $row_RsGetTeachersCourses['CourseID']?>" ><?php echo $row_RsGetTeachersCourses['CourseName']?></option>
          <?php
} while ($row_RsGetTeachersCourses = mysql_fetch_assoc($RsGetTeachersCourses));
?>
        </select></td>
      <tr class="header_caption_row">
        <td>Timings</td>
        <td>Duration</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr class="header_caption_row">
        <td><select name="ClassTimingsM" id="ClassTimingsM">
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <?php
			for ($i=10;$i<=59;$i++) {
               echo  "<option value=\"$i\">$i</option>";
			}
           ?>
        </select>
          <select name="ClassTimingsH" id="ClassTimingsH">
            <option value="00">00</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <?php
			for ($i=10;$i<=23;$i++) {
            echo  "<option value=\"$i\">$i</option>";
			}
           ?>
        </select></td>
        <td><select name="ClassDuration" id="ClassDuration">
          <option value="45">45 Minutes</option>
          <option value="60">1 Hour</option>           
        </select></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr class="header_caption_row">
        <td>Sunday</td>
        <td>Monday</td>
        <td>Tuesday</td>
        <td>Wednesday</td>
        <td>Thursday</td>
        <td>Friday</td>
        <td>Saturday</td>
      </tr>
      <tr valign="baseline">
        <td><input type="checkbox" name="WeekDay0" value="1" ></td>
        <td><input type="checkbox" name="WeekDay1" value="1" /></td>
        <td><input type="checkbox" name="WeekDay2" value="1" /></td>
        <td><input type="checkbox" name="WeekDay3" value="1" /></td>
        <td><input type="checkbox" name="WeekDay4" value="1" /></td>
        <td><input type="checkbox" name="WeekDay5" value="1" /></td>
        <td><input type="checkbox" name="WeekDay6" value="1" /></td>
      </tr>
      <tr valign="baseline">
        <td><input name="btnCreateSchedule" type="submit" id="btnCreateSchedule" value="Create Schedule"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
    <input type="hidden" name="MM_insert" value="form1">
   
  </form>

</div>
<?php
mysql_free_result($RsGetTeachersCourses);
?>
<script type="text/javascript">

$("#frmClassSchedule").submit(function(){
    var checked = $("#frmClassSchedule input:checked").length > 0;
    if (!checked){
        alert("Please check at least one checkbox");
        return false;
    }
});
</script>