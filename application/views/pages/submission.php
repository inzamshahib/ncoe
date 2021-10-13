<script>
function myFunction() {
  alert("Your Application is submitted. Thank you!");
}
</script>

<?php
// print_r($_SESSION);
if($_SESSION['pdfdone'] == 1)   // use if($_SESSION['pdfdone'] == 0) to view the submission1.php
{
  // session_destroy();
  $this->load->view('pages/submission1');
}
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
  //var_dump($_SESSION['pdfdone']);

?>
  <h2><?= $title; ?></h2>
<form action="<?php echo site_url(); ?>submission/submit" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <?php //echo form_open_multipart('submission/submit'); ?>
    <input type="hidden" value="<?php echo $_SESSION['alindex']; ?>" name="alindex">
    <input type="hidden" value="<?php echo $_SESSION['year']; ?>" name="year">
    <input type="hidden" value="<?php echo $_SESSION['syllabus']; ?>" name="syllabus">
    <input type="hidden" value="<?php echo $_SESSION['olindex1']; ?>" name="olindex1">
    <input type="hidden" value="<?php echo $_SESSION['year1']; ?>" name="year1">
    <input type="hidden" value="<?php echo $_SESSION['olindex2']; ?>" name="olindex2">
    <input type="hidden" value="<?php echo $_SESSION['year2']; ?>" name="year2">
    <input type="hidden" value="<?php echo $_SESSION['olindex3']; ?>" name="olindex3">
    <input type="hidden" value="<?php echo $_SESSION['year3']; ?>" name="year3">
    <input type="hidden" value="<?php echo $_SESSION['sripada']; ?>" name="sripada">
    <input type="hidden" value="<?php echo $_SESSION['sworker']; ?>" name="sworker">

    <input type="hidden" value="<?php echo $_SESSION['fullname']; ?>" name="fullname">
    <input type="hidden" value="<?php echo $_SESSION['namewithinitials']; ?>" name="namewithinitials">
    <input type="hidden" value="<?php echo $_SESSION['dob']; ?>" name="dob">
    <input type="hidden" value="<?php echo $_SESSION['addressline1']; ?>" name="addressline1">
    <input type="hidden" value="<?php echo $_SESSION['addressline2']; ?>" name="addressline2">
    <input type="hidden" value="<?php echo $_SESSION['addressline3']; ?>" name="addressline3">
    <input type="hidden" value="<?php echo $_SESSION['addressline4']; ?>" name="addressline4">

    <input type="hidden" value="<?php echo $_SESSION['district']; ?>" name="district">
    <input type="hidden" value="<?php echo $_SESSION['nic']; ?>" name="nic">
    <input type="hidden" value="<?php echo $_SESSION['gender']; ?>" name="gender">
    <input type="hidden" value="<?php echo $_SESSION['title']; ?>" name="title">
    <input type="hidden" value="<?php echo $_SESSION['ethnicity']; ?>" name="ethnicity">
    <input type="hidden" value="<?php echo $_SESSION['mobile']; ?>" name="mobile">
    <input type="hidden" value="<?php echo $_SESSION['home']; ?>" name="home">
    <input type="hidden" value="<?php echo $_SESSION['email']; ?>" name="email">

    <!-- <input type="hidden" value="<?php //echo $_SESSION['git']; ?>" name="git"> -->

    <input type="hidden" value="<?php echo $_SESSION['course1']; ?>" name="course1">
    <input type="hidden" value="<?php echo $_SESSION['course2']; ?>" name="course2">
    <input type="hidden" value="<?php echo $_SESSION['course3']; ?>" name="course3">
    <input type="hidden" value="<?php echo $_SESSION['pemarks1']; ?>" name="pemarks1">
    <input type="hidden" value="<?php echo $_SESSION['category']; ?>" name="category">
    <input type="hidden" value="<?php echo $_SESSION['gitmk']; ?>" name="gitmk">

    <?php if($_SESSION['pemarks1'] != NULL){  ?>
      <input type="hidden" value="<?php echo $_SESSION['pemarks1']; ?>" name="pemarks">
    <?php } ?>
    <div class="row">
      <div class="col-sm-3">
        &nbsp;
      </div>
      <div class="col-sm-3 form-group">
        <a href="<?php echo site_url(); ?>pages/view/editpersonal" class="btn btn-info" style="width: 100%; height: 4em">Recheck Personal Details</a>
      </div>
      <div class="col-sm-3 form-group">
        <a href="<?php echo site_url(); ?>courses/edit" class="btn btn-info" style="width: 100%; height: 4em">Recheck Choices</a>
      </div>
      <div class="col-sm-3">
        &nbsp;
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">&nbsp;</div>
      <div class="col-sm-4">
        <button style= "padding:20px;font-size:20px; width: 100%;" type="submit" name="btnprv" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Submit</button>
      </div>
      <div class="col-sm-4">&nbsp;</div>
    </div>
  </form>
</div>
<br>
<footer class="footer">
    <div class="container">
        <span><h4>©2020 Data Management Branch, Ministry of Education, Sri Lanka.</h4></span>
    </div>
</footer>
