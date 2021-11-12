h2><?= $title; ?></h2><br>
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>
<span style="color: red;"><?php echo validation_errors(); ?></span>
<?php // echo form_open_multipart('olresults/checkolres'); ?>
<!-- <form action="<?php //echo site_url(); ?>olresults/checkpirolres" enctype="multipart/form-data" method="post" accept-charset="utf-8">
  <div class="form-group">
      <label for="attempts">How many times have you sat for O/L exam? <span style="color:red">* </span></label>
      <select name="sel1" class="form-control" id="sel1">
        <option id="def" selected value="">ATTEMPTS</option>
        <option id="1" value="1">1</option>
        <option id="2" value="2">2</option>
        <option id="3" value="3">3</option>
      </select>
      <br>
    
  <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="year1" placeholder="Year" name="year1" style="display :none">
      <input type="text" class="form-control" id="index1" placeholder="Enter your  1st index " name="index1" style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="year2" placeholder="Year" name="year2" style="display :none">
      <input type="text" class="form-control" id="index2" placeholder="Enter your 2nd index" name="index2"  style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">O/L index number:</label>
      <input type="text" class="form-control" id="year3" placeholder="Year" name="year3" style="display :none">
      <input type="text" class="form-control" id="index3" placeholder="Enter your 3rd index" name="index3" style="display :none">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form> -->
<a class="btn btn-primary" href="<?php echo site_url(); ?>/olresults">Enter O/L exam results</a>  
<a class="btn btn-primary" href="<?php echo site_url(); ?>/mulika_pirivena">Enter Mulika Pirivena exam results </a>  
  
<br>
<br>
<div class="row">
  <div class="col-sm-4">
    <!-- <a href="" class="btn btn-primary">Mulika Pirivena</a> -->
  </div>
</div>
</div>
</div>
<br>
<footer class="footer">
    <div class="container">
        <span><h4>©2020 Data Management Branch, Ministry of Education, Sri Lanka.</h4></span>
    </div>
</footer>
<script src="<?php echo site_url(); ?>assets/js/ol.js"></script>

