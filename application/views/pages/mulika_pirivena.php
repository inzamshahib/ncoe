<div class="mb-5">
	<h2><?= $title; ?></h2>
</div>
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>
<span style="color: red;"><?php //echo validation_errors(); ?></span>
<?php // echo form_open_multipart('olresults/checkolres'); ?>
<form action="<?php echo site_url(); ?>mulikaPirivena/checkmulres" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<label><i>(<span style="color:red">*</span>This is relevant only for the applicants to apply for the course <b>“Buddhism”</b>)</i></label>  
<div class="form-group"> 
      <label for="attempts">Please Select Number of Attempts You've Sat for Mulika Pirivena Examination<span style="color:red">* </span></label>
      <select name="sel1" class="form-control" id="sel1">
        <option id="def" selected value="">Number of Attempts</option>
        <option id="1" value="1">1</option>
        <option id="2" value="2">2</option>
        <option id="3" value="3">3</option>
      </select>
      <br>
    
  <div class="form-group">
      <label for="emailindex" style="display :none">Mulika Pirivena Index Number:</label>
      <select class="form-control" id="year1" placeholder="Year" name="year1" style="display :none">
						<option value="">Year</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
            <option value="2017">2017</option>
						<option value="2016">2016</option>
            <option value="2015">2015</option>
						<option value="2014">2014</option>
            <option value="2013">2013</option>
						<option value="2012">2012</option>
            <option value="2011">2011</option>
						<option value="2010">2010</option>
				</select>
      <input type="text" class="form-control" id="index1" placeholder="Enter Mulika Pirivena Examination Index Number" name="index1" style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">Mulika Pirivena Index Number:</label>
      <select class="form-control" id="year2" placeholder="Year" name="year2" style="display :none">
						<option value="">Year</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
            <option value="2017">2017</option>
						<option value="2016">2016</option>
            <option value="2015">2015</option>
						<option value="2014">2014</option>
            <option value="2013">2013</option>
						<option value="2012">2012</option>
            <option value="2011">2011</option>
						<option value="2010">2010</option>
				</select>
      <input type="text" class="form-control" id="index2" placeholder="Enter Mulika Pirivena Examination Index Number" name="index2"  style="display :none">
    </div>

    <div class="form-group">
      <label for="emailindex" style="display :none">Mulika Pirivena Index Number:</label>
      <select class="form-control" id="year3" placeholder="Year" name="year3" style="display :none">
						<option value="">Year</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
            <option value="2017">2017</option>
						<option value="2016">2016</option>
            <option value="2015">2015</option>
						<option value="2014">2014</option>
            <option value="2013">2013</option>
						<option value="2012">2012</option>
            <option value="2011">2011</option>
						<option value="2010">2010</option>
				</select>
      <input type="text" class="form-control" id="index3" placeholder="Enter Mulika Pirivena Examination Index Number" name="index3" style="display :none">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>
<br>
<br>
<div class="row">
  <div class="col-sm-4">
    <!-- <a href="<?php echo site_url(); ?>/olpirivena" class="btn btn-primary">Mulika Pirivena</a> -->
  </div>
</div>
</div>
</div>

<br>
<footer class="footer">
    <!-- <div class="container"> -->
        <span><h4>©2020 Data Management Branch, Ministry of Education, Sri Lanka.</h4></span>
    <!-- </div> -->
</footer>
<script src="<?php echo site_url(); ?>assets/js/ol.js"></script>

