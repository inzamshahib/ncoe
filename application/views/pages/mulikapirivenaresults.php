<h2><?= $title; ?></h2><br>
<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
  // print_r($_SESSION);

?>
<div class="row">
<?php if( $olresults1 != "" && $olresults2 ==""){foreach($olresults1 as $olresult1): ?>
  
 
  
  <div class="container1" id="con1" >

    <table class="table" style="width:100%">
      <tr>
        <td style="width:120px;"><p class="font-weight-bold">Index No </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['index_no']; ?></p></td>
       
      </tr>
      <tr>
        <td><p class="font-weight-bold">Name </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['name']; ?></p></td>
      </tr>
      <tr>
        <td><p class="font-weight-bold">Year </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['year']; ?></p></td>
      </tr>
    </table>
    <hr>
    &nbsp;
    <table class="table" style="100%">
      <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 1</td>
        <td><?= $olresult1['RESUBGRD1'] ?></td>
    </tr>
    <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 2</td>
        <td><?= $olresult1['RESUBGRD2'] ?></td>
  </tr>
  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 3</td>
        <td><?= $olresult1['RESUBGRD3'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 4</td>
        <td><?= $olresult1['RESUBGRD4'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 5</td>
        <td><?= $olresult1['RESUBGRD5'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 6</td>
        <td><?= $olresult1['RESUBGRD6'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 7</td>
        <td><?= $olresult1['RESUBGRD7'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 8</td>
        <td><?= $olresult1['RESUBGRD8'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 9</td>
        <td><?= $olresult1['RESUBGRD9'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 10</td>
        <td><?= $olresult1['RESUBGRD10'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 11</td>
        <td><?= $olresult1['RESUBGRD11'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 12</td>
        <td><?= $olresult1['RESUBGRD12'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 13</td>
        <td><?= $olresult1['RESUBGRD13'] ?></td>
  </tr>
  <tr>
        <td style="width:120px;" class="font-weight-bold">Result</td>
        <td><?= $olresult1['RESULT'] ?></td>
    </tr>
  
    </table> 
  <div>
  <hr>
  &nbsp;
  
  <?php endforeach;} ?>

 
  <?php if( $olresults2 != "" && $olresults3==""){foreach($olresults2 as $olresult2): ?>
    <?php if( $olresults1 != ""){foreach($olresults1 as $olresult1): ?>
     
  <div class="container2" id="con2" >
 
    <table class="table" style="width:100%">
      <tr>
        <td style="width:120px;"><p class="font-weight-bold">Index No </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['index_no']; ?></p></td>
        <td style="width:120px;"><p class="font-weight-bold">Index No </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult2['index_no']; ?></p></td>
      </tr>
      <tr>
      <td><p class="font-weight-bold">Name </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['name']; ?></p></td>
        <td><p class="font-weight-bold">Name </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult2['name']; ?></p></td>
      </tr>
      <tr>
      <td><p class="font-weight-bold">Year </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['year']; ?></p></td>
        <td><p class="font-weight-bold">Year </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult2['year']; ?></p></td>
      </tr>
    </table>
    <hr>
    &nbsp;
  <table class="table" style="width:100%">
      <tr>
       <td style="width:120px;" class="font-weight-bold">Subject 1</td>
        <td><?= $olresult1['RESUBGRD1'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 1</td>
        <td><?= $olresult2['RESUBGRD1'] ?></td>
    </tr>
    <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 2</td>
        <td><?= $olresult1['RESUBGRD2'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 2</td>
        <td><?= $olresult2['RESUBGRD2'] ?></td>
  </tr>
  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 3</td>
        <td><?= $olresult1['RESUBGRD3'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 3</td>
        <td><?= $olresult2['RESUBGRD3'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 4</td>
        <td><?= $olresult1['RESUBGRD4'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 4</td>
        <td><?= $olresult2['RESUBGRD4'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 5</td>
        <td><?= $olresult1['RESUBGRD5'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 5</td>
        <td><?= $olresult2['RESUBGRD5'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 6</td>
        <td><?= $olresult1['RESUBGRD6'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 6</td>
        <td><?= $olresult2['RESUBGRD6'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 7</td>
        <td><?= $olresult1['RESUBGRD7'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 7</td>
        <td><?= $olresult2['RESUBGRD7'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 8</td>
        <td><?= $olresult1['RESUBGRD8'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 8</td>
        <td><?= $olresult2['RESUBGRD8'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 9</td>
        <td><?= $olresult1['RESUBGRD9'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 9</td>
        <td><?= $olresult2['RESUBGRD9'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 10</td>
        <td><?= $olresult1['RESUBGRD10'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 10</td>
        <td><?= $olresult2['RESUBGRD10'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 11</td>
        <td><?= $olresult1['RESUBGRD11'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 11</td>
        <td><?= $olresult2['RESUBGRD11'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 12</td>
        <td><?= $olresult1['RESUBGRD12'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 12</td>
        <td><?= $olresult2['RESUBGRD12'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 13</td>
        <td><?= $olresult1['RESUBGRD13'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 13</td>
        <td><?= $olresult2['RESUBGRD13'] ?></td>
  </tr>
  <tr>
        <td style="width:120px;" class="font-weight-bold">Result</td>
        <td><?= $olresult1['RESULT'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Result</td>
        <td><?= $olresult2['RESULT'] ?></td>
    </tr>
  
    </table> 
    
  </div>
  <hr>
  &nbsp;
  
  <?php endforeach;} ?>
  <?php endforeach;} ?>


<?php if( $olresults3 != ""){foreach($olresults3 as $olresult3): ?>
  <?php if( $olresults2 != ""){foreach($olresults2 as $olresult2): ?>
    <?php if( $olresults1 != ""){foreach($olresults1 as $olresult1): ?>
  <div class="container3" id="con3" >
 
    <table class="table" style="width:100%">
      <tr>
      <td style="width:120px;"><p class="font-weight-bold">Index No </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['index_no']; ?></p></td>
        <td style="width:120px;"><p class="font-weight-bold">Index No </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult2['index_no']; ?></p></td>
        <td style="width:120px;"><p class="font-weight-bold">Index No </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult3['index_no']; ?></p></td>
      </tr>
      <tr>
      <td><p class="font-weight-bold">Name </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['name']; ?></p></td>
        <td><p class="font-weight-bold">Name </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult2['name']; ?></p></td>
        <td><p class="font-weight-bold">Name </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult3['name']; ?></p></td>
      </tr>
      <tr>
      <td><p class="font-weight-bold">Year </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult1['year']; ?></p></td>
        <td><p class="font-weight-bold">Year </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult2['year']; ?></p></td>
        <td><p class="font-weight-bold">Year </td><td>:</p></td>
        <td><p class="font-weight-bold"><?= $olresult3['year']; ?></p></td>
      </tr>
    </table>
    <hr>
    &nbsp;
  <table class="table" style="width:100%">
      <tr>
      <td style="width:120px;" class="font-weight-bold">Subject 1</td>
        <td><?= $olresult1['RESUBGRD1'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 1</td>
        <td><?= $olresult2['RESUBGRD1'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 1</td>
        <td><?= $olresult3['RESUBGRD1'] ?></td>
    </tr>
    <tr>
    <td style="width:120px;" class="font-weight-bold">Subject 2</td>
        <td><?= $olresult1['RESUBGRD2'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 2</td>
        <td><?= $olresult2['RESUBGRD2'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 2</td>
        <td><?= $olresult3['RESUBGRD2'] ?></td>
  </tr>
  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 3</td>
        <td><?= $olresult1['RESUBGRD3'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 3</td>
        <td><?= $olresult2['RESUBGRD3'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 3</td>
        <td><?= $olresult3['RESUBGRD3'] ?></td>
  </tr>

  <tr>
        <td style="width:120px;" class="font-weight-bold">Subject 4</td>
        <td><?= $olresult1['RESUBGRD4'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 4</td>
        <td><?= $olresult2['RESUBGRD4'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 4</td>
        <td><?= $olresult3['RESUBGRD4'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 5</td>
        <td><?= $olresult1['RESUBGRD5'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 5</td>
        <td><?= $olresult2['RESUBGRD5'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 5</td>
        <td><?= $olresult3['RESUBGRD5'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 6</td>
        <td><?= $olresult1['RESUBGRD6'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 6</td>
        <td><?= $olresult2['RESUBGRD6'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 6</td>
        <td><?= $olresult3['RESUBGRD6'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 7</td>
        <td><?= $olresult1['RESUBGRD7'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 7</td>
        <td><?= $olresult2['RESUBGRD7'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 7</td>
        <td><?= $olresult3['RESUBGRD7'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 8</td>
        <td><?= $olresult1['RESUBGRD8'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 8</td>
        <td><?= $olresult2['RESUBGRD8'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 8</td>
        <td><?= $olresult3['RESUBGRD8'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 9</td>
        <td><?= $olresult1['RESUBGRD9'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 9</td>
        <td><?= $olresult2['RESUBGRD9'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 9</td>
        <td><?= $olresult3['RESUBGRD9'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 10</td>
        <td><?= $olresult1['RESUBGRD10'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 10</td>
        <td><?= $olresult2['RESUBGRD10'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 10</td>
        <td><?= $olresult3['RESUBGRD10'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 11</td>
        <td><?= $olresult1['RESUBGRD11'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 11</td>
        <td><?= $olresult2['RESUBGRD11'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 11</td>
        <td><?= $olresult3['RESUBGRD11'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 12</td>
        <td><?= $olresult1['RESUBGRD12'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 12</td>
        <td><?= $olresult2['RESUBGRD12'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 12</td>
        <td><?= $olresult3['RESUBGRD12'] ?></td>
  </tr>

  <tr>
  <td style="width:120px;" class="font-weight-bold">Subject 13</td>
        <td><?= $olresult1['RESUBGRD13'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 13</td>
        <td><?= $olresult2['RESUBGRD13'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Subject 13</td>
        <td><?= $olresult3['RESUBGRD13'] ?></td>
  </tr>
  <tr>
  <td style="width:120px;" class="font-weight-bold">Result</td>
        <td><?= $olresult1['RESULT'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Result</td>
        <td><?= $olresult2['RESULT'] ?></td>
        <td></td>
        <td style="width:120px;" class="font-weight-bold">Result</td>
        <td><?= $olresult3['RESULT'] ?></td>
    </tr>
  
    </table> 
  </div>
  <?php endforeach;} ?>
  <?php endforeach;} ?>
  <?php endforeach;} ?>
  &nbsp;

  
 
    </div>
  <div style="text-align:right">
    <a class="btn btn-primary" href="<?php echo site_url(); ?>/sripada">Next</a>
  </div>
    
