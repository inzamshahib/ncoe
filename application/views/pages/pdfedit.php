<?php
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 12);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
// var_dump($alresult);
// we can have any view part here like HTML, PHP etc
?>    
    <h1>National Colleges of Education (NCoE) Admission</h1>
    <h2>&nbsp;&nbsp;01.Personal Information</h2>
    
    <div class="container mt-5" style="padding-top: 0px;">
           
            <?php foreach($personal as $person){ ?>
            <table style="width:100%">    
            <tr> 
            
           
            <td style="width:30%"><label for="fullname"><b>Name in Full</b></label></td>
            <td style="width:5%"><b>:</b></td> 
            <td style="width:60%"><?php echo $person['fullname']; ?></td>
            </tr>
            <br>
            <br>

            <tr>
            <td style="width:1%"></td>
         
            <td style="width:30%"><label for="initials"><b>Name with Initials</b></label></td>
            <td style="width:5%"><b>:</b></td> 
            <td style="width:60%"><?php echo $person['namewithinitials']; ?></td>
            </tr>
            <br>

            <tr>
            <td style="width:1%"></td>
          
            <td style="width:30%"><label for="gender"><b>Gender</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo ucfirst($person['Gender']); ?></td>
            </tr>
            <br>

            <tr>
            <td style="width:1%"></td>
         
            <td style="width:30%"><label for="title"><b>Title</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['Title']; ?></td>
            </tr>
            <br>

            <tr>
            <td style="width:1%"></td>
            
            <td style="width:30%"><label for="ethnicity"><b>Ethnicity</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['Ethnicity']; ?></td>
            </tr>
            <br>

            <tr>
            <td style="width:1%"></td>
            
            <td style="width:30%"><label for="nic"><b>NIC Number</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['NIC'];?></td>
            </tr>
            <br>

            <tr>
            <td style="width:1%"></td>
            
            <td style="width:30%"><label for="dob"><b>Date of Birth</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['dob']?></td> 
            </tr>
            <br>


            <tr>
                <br>

            <td style="width:70%"><h2>&nbsp;02.Contact Information</h2></td>
            </tr>
            <br>

            <tr>
            <td style="width:1%"></td>
        
            <td style="width:30%"><label for="address"><b>Permanent Address</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['Addressl1']; ?>
            <?php echo $person['Addressl2']; ?>
            <?php echo $person['Addressl3']; ?>
            <?php echo $person['Addressl4']; ?>
            </td>
            </tr>
            <br>
            <br>

            <tr>
            <?php 
                $districts = array('16' => 'Ampara', "20" => 'Anuradhapura',"22" => 'Badulla',"15" => 'Batticaloa',"01" => 'Colombo',"07" => 'Galle',"02" => 'Gampaha',"09" => 'Hambantota',"10" => 'Jaffna',"03" => 'Kaluthara',"04" => 'Kandy',"25" => 'Kegalle',"11" => 'Kilinochchi',"18" => 'Kurunegala',"12" => 'Mannar',"05" => 'Matale',"08" => 'Matara',"23" => 'Monaragala',"14" => 'Mullaitivu',"06" => 'Nuwara Eliya',"21" => 'Polonnaruwa',"19" => 'Puttalam',"24" => 'Ratnapura',"17" => 'Trincomalee',"13" => 'Vavuniya');
            
                foreach ($districts as $key => $value) {
                    if ($key == $person['Resdistrict']) { 
                        echo "<td style='width:1%'></td><td style='width:30%'><label for='district'><b>District</b></label></td> <td style='width:5%'><b>:</b></td><td>".$key." - " .$value."</td></tr>";
                    }
                }?>
              <?php break; } ?>
            
           <br>
            <tr>
            <td style="width:1%"></td>
           
            <td style="width:30%"><label for="mobile"><b>Mobile Phone No</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['Mobile']; ?></td>
            </tr>
            <br>


            <tr>
            <td style="width:1%"></td>
            
            <td style="width:30%"><label for="home"><b>Home Tel</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['home']; ?></td>
            </tr>
            <br>
            
            <tr>
            <td style="width:1%"></td>
         
            <td style="width:30%"><label for="email"><b>Email</b></label></td>
            <td style="width:5%"><b>:</b></td>
            <td style="width:60%"><?php echo $person['email']; ?></td>
            </tr>
            
           
           
            <!-- <label for="Sripada">12. Are you applying for Sripada NCoE? </label><br>
            <label for="state">13. Are your parents are State Workers? </label><br><br> -->
            
            <h2><b>&nbsp;&nbsp;03.A/L Details: </b></h2>
            <?php foreach($alresult as $alres){ //var_dump($alres);?> <br>
           
            <label for="alindex"><b>&nbsp;A/L Index No &nbsp;:&nbsp;</b></label><?php echo $alres['AL_index']; ?><br><br>
            <?php if(array_key_exists('Year', $alres)){
                 echo '<label for="alyear"><b>&nbsp;A/L Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </b></label>'.$alres['year'].'<br><br>';
                }else{
                    echo '<label for="alyear"><b>&nbsp;A/L Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; </b></label>2018<br><br>';
                }?>

            <label for="alstream"><b>&nbsp;Stream&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b></label>
            <?php if($alres['stream']==1){ ?>
                <?php echo "Physical Science" ?>
                <?php }elseif($alres['stream']==2){ ?>
                <?php echo "Biological Science" ?>
                <?php }elseif($alres['stream']==3){ ?>
                <?php echo "Commerce" ?>
                <?php }elseif($alres['stream']==4){ ?>
                <?php echo "Arts" ?>
                <?php }elseif($alres['stream']==5){ ?>
                <?php echo "Technology" ?>
                <?php }elseif($alres['stream']==6){ ?>
                <?php echo "Common" ?>
                <?php } ?>
               <br>
               <br>
                



               <label for="almedium"><b>&nbsp;Medium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b></label>

               <?php if($alres['medium'] == 'S'){ ?>
                <?php echo "Sinhala" ?>
                <?php }elseif($alres['medium'] == 'T'){ ?>
                <?php echo "Tamil" ?>
                <?php }elseif($alres['medium'] == 'E'){ ?>
                <?php echo "English" ?>
                <?php } ?>
                <br>
                <br>

                <?php 
                     $alsubs = array(1 => 'Physics', 2 =>	'Chemistry' ,7 => 'Mathematics' ,8 => 'Agricultural Science' ,9 => 'Biology' ,10 => 'Combind Mathematics' ,11 => 'Higher Mathematics' ,12 => 'Common General Test'	,13 => 'General English',14 => 'Civil Technology' ,15 => 'Mechanical Technology ',16 => 'Eletrical,Electronic and Information Technology'	,17 => 'Food Technology' ,18 => 'Agro Technology'	,19 => 'Bio- Resource Technology' ,20 => 'Information & Communication Technology' ,21 => 'Economics' ,22 => 'Geography' ,23 => 'Political Science' ,24 => 'Logic and Scientific Method'	,25 => 'History'	,28 => 'Home Economics'	,29 => 'Communication & Media Studies' ,31 => 'Business Statistics'	,32 => 'Business Studies' ,33 => 'Accounting'	,41 => 'Buddhism' ,42 => 'Hinduism' ,43 => 'Christianity' ,44 => 'Islam'				, 45 => 'Buddhist Civilization', 46 => 'Hindu Civilization', 47 => 'Islam Civilization', 48 => 'Greek & Rooman Civilization', 49 => 'Christian Civilization', 51 => 'Art', 52 => 'A Dancing (Indigenous  -Kandyan)', 52 => 'B Dancing (Indigenous  -Low country)', 52 => 'C Dancing (Indigenous Sabaragamu)', 53 => 'Dancing (Bharata)', 54 => 'Oriental Music', 55 => 'Carnatic Music', 56 => 'Western Music', 57 => 'Drama and Theatre (Sinhala)', 58 => 'Drama and Theatre (Tamil)', 59 => 'Drama and Theatre (English)', 65 => 'Engineering Technology', 66 => 'Bio Systems Technology', 67 => 'Science fot Technology', 71 => 'Sinhala', 72 => 'Tamil', 73 => 'English', 74 => 'pali', 75 => 'Sanskrit', 78 => 'Arabic', 79 => 'Malay', 81 => 'French', 82 => 'German', 83 => 'Russian', 84 => 'Hindi', 86 => 'Chinese', 87 => 'Japanese');
                 ?> 
    
    <label for="alattempt"><b>&nbsp;Attempt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;</b></label><?php echo $alres['attempt'] ?>
    <h2><b>&nbsp;&nbsp;04.A/L Results: </b></h2>
                <table style="width: 100%">
                <tr>
                    <th style="width: 10%"><b>&nbsp;&nbsp;No</b></th>
                    <th><b>Subject</b></th>
                    <th><b>Grade</b></th>
                </tr>
                <br>
                <tr>
                    <td>&nbsp;&nbsp;01. </td>
                    <?php 
          if (!array_key_exists($alres['sub1'], $alsubs)) {
            // echo "<td>". $alresult['sub1'] ."</td>";
          }
          foreach($alsubs as $key => $value){
            if($key == $alres['sub1']){
              echo "<td>". $value ."</td>";
            }
          }
          ?>
                    <td><?php echo $alres['grade1'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;02. </td>
                    <?php 
          if (!array_key_exists($alres['sub2'], $alsubs)) {
            // echo "<td>". $alresult['sub2'] ."</td>";
          }
          foreach($alsubs as $key => $value){
            if($key == $alres['sub2']){
              echo "<td>". $value ."</td>";
            }
          }
        ?>
                    <td><?php echo $alres['grade2'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;03. </td>
                    <?php 
          if (!array_key_exists($alres['sub3'], $alsubs)) {
            // echo "<td>". $alresult['sub3'] ."</td>";
          }
          foreach($alsubs as $key => $value){
            if($key == $alres['sub3']){
              echo "<td>". $value ."</td>";
            }
          }
        ?>
                    <td><?php echo $alres['grade3'] ?></td>
                </tr>
                <tr>
                    <td>&nbsp;&nbsp;04. </td>
                    <?php 
          if (!array_key_exists($alres['sub4'], $alsubs)) {
            // echo "<td>". $alresult['sub3'] ."</td>";
          }
          foreach($alsubs as $key => $value){
            if($key == $alres['sub4']){
              echo "<td>". $value ."</td>";
            }
          }
        ?>
                    <td><?php echo $alres['grade4'] ?></td>
                </tr>
                </table>
    
    
    
                <div style="height: 10px;"></div>
                
                <label><b>&nbsp;&nbsp;&nbsp;Z-score: </b></label><?php echo $alres['zscore'] ?><br>
            <?php break; } ?>
                

            <h2><b>&nbsp;&nbsp;05.O/L Details: </b></h2>
             <br>
            <?php foreach($personal as $person){ ?>

                <label for="olindex"><b>&nbsp;Index Number 1: </b><?php echo $person["OLindex1"]; ?><br><br>
                
            <?php }?>
            <?php foreach($olresults1 as $olresult1){ if( $olresult1["OL_index"] != "N/A"){?><br>
                <br>
                <h4><b>O/L Results: </b></h4>
                <table style="width: 100%">
                    <tr>
                        <th style="width: 10%"></th>
                        <th><b>Subject</b></th>
                        <th><b>Grade</b></th>
                    </tr>
                    <tr>
                        <td>01. </td>
                        <td><?php echo $olresult1['sub1']; ?></td>
                        <td><?php echo $olresult1['grade1']; ?></td>
                    </tr>
                    <tr>
                        <td>02. </td>
                        <td><?php echo $olresult1['sub2']; ?></td>
                        <td><?php echo $olresult1['grade2']; ?></td>
                    </tr>
                    <tr>
                        <td>03. </td>
                        <td><?php echo $olresult1['sub3']; ?></td>
                        <td><?php echo $olresult1['grade3']; ?></td>
                    </tr>
                    <tr>
                        <td>04. </td>
                        <td><?php echo $olresult1['sub4']; ?></td>
                        <td><?php echo $olresult1['grade4']; ?></td>
                    </tr>
                    <tr>
                        <td>05. </td>
                        <td><?php echo $olresult1['sub5']; ?></td>
                        <td><?php echo $olresult1['grade5']; ?></td>
                    </tr>
                    <tr>
                        <td>06. </td>
                        <td><?php echo $olresult1['sub6']; ?></td>
                        <td><?php echo $olresult1['grade6']; ?></td>
                    </tr>
                    <tr>
                        <td>07. </td>
                        <td><?php echo $olresult1['sub7']; ?></td>
                        <td><?php echo $olresult1['grade7']; ?></td>
                    </tr>
                    <tr>
                        <td>08. </td>
                        <td><?php echo $olresult1['sub8']; ?></td>
                        <td><?php echo $olresult1['grade8']; ?></td>
                    </tr>
                    <tr>
                        <td>09. </td>
                        <td><?php echo $olresult1['sub9']; ?></td>
                        <td><?php echo $olresult1['grade9']; ?></td>
                    </tr>
                </table><br>
            <?php } break; } ?>

            <?php foreach($personal as $person){ ?>
                <label for="olindex"><b>&nbsp;Index Number 2: </b><?php echo $person["OLindex2"]; ?><br><br>
            <?php }?>
            <?php foreach($olresults2 as $olresult2){ if( $olresult2["OL_index"] != "N/A"){?>
            <br>
            <h4>O/L Results: </h4>
            <table>
                <tr>
                    <th></th>
                    <th><b>Subject</b></th>
                    <th><b>Grade</b></th>
                </tr>
                <tr>
                    <td>01. </td>
                    <td><?php echo $olresult2['sub1']; ?></td>
                    <td><?php echo $olresult2['grade1']; ?></td>
                </tr>
                <tr>
                    <td>02. </td>
                    <td><?php echo $olresult2['sub2']; ?></td>
                    <td><?php echo $olresult2['grade2']; ?></td>
                </tr>
                <tr>
                    <td>03. </td>
                    <td><?php echo $olresult2['sub3']; ?></td>
                    <td><?php echo $olresult2['grade3']; ?></td>
                </tr>
                <tr>
                    <td>04. </td>
                    <td><?php echo $olresult2['sub4']; ?></td>
                    <td><?php echo $olresult2['grade4']; ?></td>
                </tr>
                <tr>
                    <td>05. </td>
                    <td><?php echo $olresult2['sub5']; ?></td>
                    <td><?php echo $olresult2['grade5']; ?></td>
                </tr>
                <tr>
                    <td>06. </td>
                    <td><?php echo $olresult2['sub6']; ?></td>
                    <td><?php echo $olresult2['grade6']; ?></td>
                </tr>
                <tr>
                    <td>07. </td>
                    <td><?php echo $olresult2['sub7']; ?></td>
                    <td><?php echo $olresult2['grade7']; ?></td>
                </tr>
                <tr>
                    <td>08. </td>
                    <td><?php echo $olresult2['sub8']; ?></td>
                    <td><?php echo $olresult2['grade8']; ?></td>
                </tr>
                <tr>
                    <td>09. </td>
                    <td><?php echo $olresult2['sub9']; ?></td>
                    <td><?php echo $olresult2['grade9']; ?></td>
                </tr>
            </table><br>
            <?php } break; }; ?>

            <?php foreach($personal as $person){ ?>
                <label for="olindex"><b>&nbsp;Index Number 3: </b><?php echo $person["OLindex3"]; ?><br><br>
            <?php }?>
            <?php foreach($olresults3 as $olresult3){ if( $olresult3["OL_index"] != "N/A"){?>
            <br>
            <h4><b>O/L Results: </b></h4>
            <table>
                <tr>
                    <th></th>
                    <th><b>Subject</b></th>
                    <th><b>Grade</b></th>
                </tr>
                <tr>
                    <td>01. </td>
                    <td><?php echo $olresult3['sub1']; ?></td>
                    <td><?php echo $olresult3['grade1']; ?></td>
                </tr>
                <tr>
                    <td>02. </td>
                    <td><?php echo $olresult3['sub2']; ?></td>
                    <td><?php echo $olresult3['grade2']; ?></td>
                </tr>
                <tr>
                    <td>03. </td>
                    <td><?php echo $olresult3['sub3']; ?></td>
                    <td><?php echo $olresult3['grade3']; ?></td>
                </tr>
                <tr>
                    <td>04. </td>
                    <td><?php echo $olresult3['sub4']; ?></td>
                    <td><?php echo $olresult3['grade4']; ?></td>
                </tr>
                <tr>
                    <td>05. </td>
                    <td><?php echo $olresult3['sub5']; ?></td>
                    <td><?php echo $olresult3['grade5']; ?></td>
                </tr>
                <tr>
                    <td>06. </td>
                    <td><?php echo $olresult3['sub6']; ?></td>
                    <td><?php echo $olresult3['grade6']; ?></td>
                </tr>
                <tr>
                    <td>07. </td>
                    <td><?php echo $olresult3['sub7']; ?></td>
                    <td><?php echo $olresult3['grade7']; ?></td>
                </tr>
                <tr>
                    <td>08. </td>
                    <td><?php echo $olresult3['sub8']; ?></td>
                    <td><?php echo $olresult3['grade8']; ?></td>
                </tr>
                <tr>
                    <td>09. </td>
                    <td><?php echo $olresult3['sub9']; ?></td>
                    <td><?php echo $olresult3['grade9']; ?></td>
                </tr>
            </table>
            <?php } break; }; ?>
            
    <h2><b>&nbsp;&nbsp;06.Selected Courses: </b></h2>
    <ol>
    
        <?php 

        
        foreach($selection as $select){
            foreach($courses as $course){ 
                
                if($course['course_no'] == $select['pref1'] )
                {      
                    echo "<li>".$select['pref1']." - ".$course['name']."</li>";
                   
                }
            }
        
        // foreach($selection as $select){
            foreach($courses as $course){ 
                if($course['course_no'] == $select['pref2']){
                    echo "<li>".$select['pref2']." - ".$course['name']."</li>";
                }
            }
        // }
        // foreach($selection as $select){
            foreach($courses as $course){ 
                if($course['course_no'] == $select['pref3']){
                    echo "<li>".$select['pref3']." - ".$course['name']."</li>";
                    
                }
            }
        break; }
        ?>
    </ol>
    <?php
    foreach($personal as $person){ 
        // var_dump($person['pemarks']);
        if($person['pemarks'] != NULL){ ?>
            <label for="pemarks">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical Education Marks:</label><?php echo $person['pemarks']; ?><br><br>
    <?php } break; }?>
    <?php 
    foreach($selection as $select){
        if($select['gitmarks'] != NULL){ ?>
            <label for="gitmk">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GIT Grades: </label><?php echo $select['gitmarks']; ?><br><br>
    <?php } break; } ?>
    <!-- <h5>Declaration: </h5>
        <p style="text-align: justify">I am aware that I have forwarded my application in accordance with paragraph10.0 of the Gazette Notification, after reading and comprehending the Gazette Notification well. I certify that I have already acquired the qualifications mentioned in the Gazette Notification relevant to the Courses that have been applied by me. I am aware that the particulars furnished in the application by me are true and correct. I am aware that if any particulars given by me in this application are found to be false or incorrect or contradictory to the Gazette Notification, I am liable to be disqualified before selection or to be discontinued after selection. I certify that I have not registered to follow a course in a University/University Institute/any other Higher Education Institute/ I am not currently following a relevant course in an afore mentioned institute. I further certify that I agree to be discontinued from the course if It is found that the section 8.4 of the Gazette Notification has been/is violated by me. I declare that I agree to accept any punishment pronounced by the disciplinary board of the National College of Education and the Ministry of Education if I am found and proven to have been engaged in any action against the code of conduct of National Colleges of Education.</p>
        <div style="text-align:center">
            <strong> I Agreed </strong> <br/>
        </div> -->
    </div>

<?php
$content = ob_get_contents();
ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('Report.pdf', 'I');
?>
