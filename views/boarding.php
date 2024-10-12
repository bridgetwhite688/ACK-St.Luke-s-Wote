<?php
session_start();
require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../helpers/messages.php');
require_once('../partials/headf.php');
?>
<body>
   <div class="container">
    <div id="firstHeader">
      <div class="row">
        <div class="col-sm-12">
          <div class="rowFirstHeader">
            <p></p>
            <p><img src="../public/ack/images1/envelope svg.png" id="svg" class="img-fluid" alt=""> ackwotetownship@yahoo.com &emsp; &emsp;</p>
          <p>  <img src="../public/ack/images1/call svg.png" id="svg" class="img-fluid" alt=""> 0743865970 &emsp; &emsp;</p>
           <p> <img src="../public/ack/images1/location1.webp" id="svg" class="img-fluid" alt=""> 
            Wote town along Wote-Malivani road &emsp; &emsp; </p>
           <p> P.O BOX 253-90300 Wote-Makueni</p>
          </div>
        </div>
      </div>
    </div>
    <div id="secondHeader">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a id="homeButton" class="navbar-brand" href="#">ACK St.Luke's Wote Township <br> Day and Boarding Primary <br> and Junior School <br> <span id="navButton1">Strive For Excellence.</span></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a id="homeButton1" class="nav-link active" aria-current="page" href="index">Home</a>
                  </li>
                  <li class="nav-item">
                    <a id="navButton" class="nav-link active" aria-current="page" href="history">School history</a>
                  </li>
                  <li class="nav-item">
                    <a id="navButton" class="nav-link active" aria-current="page" href="management">Board of Management</a>
                  </li>
                  <li class="nav-item">
                    <a id="navButton" class="nav-link active" aria-current="page" href="#firstFooter">Contact Us</a>
                  </li>
                  
                </ul>
                
              </div>
            </div>
          </nav>
    </div>
    <div id="body">
        <h2>Boarding.</h2>
        <div class="row">
          <div class="col-sm-6">
            <img id="boardingImage" src="../public/ack/images1/hostel1.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-sm-6">
      <h3>Why board at ACK ST.Luke's Wote Township.</h3>
      <p>The ACK Wote Township Boarding Program is like a second home for students.
         They have plenty of time to study both in the evenings and in the mornings.
          The school provides balanced meals to keep them healthy, and there’s always 
          enough water and electricity. If a student gets sick, there is a
         trained nurse to help them. Additionally, there’s a guidance and counseling
          team available to support students if they need help with anything. 
          Our boarding program is available for students in grades 4 to 9.</p>
          <p>For more information Call 0743865970 or click <a href="contacts">here</a> to submit and inquiry.</p>
          </div>
        </div>
        <div class="row">
      <div class="col-sm-4">
        <h3>Boarding houses.</h3>
        <p>Our boarding houses offer a 
          safe and nurturing environment for students.
           We have separate houses for boys and girls, 
           with specific rules to ensure everyone’s
            safety and privacy. Each house is well-equipped
             with all the necessary amenities to create a
              comfortable and supportive living space for students.</p>
      </div>
      <div class="col-sm-4">
        <h3>Boarders Well-being</h3>
        <p>We understand that being away 
          from home can be challenging for students,
           so we have various measures in place to
            support their well-being. Our boarding master
             and boarding mistress are available to assist
              with any needs. Additionally, our experienced
               and caring staff in the boarding houses are
                there to look after the students. Besides their
                 studies, students are encouraged to participate 
                 in sports and other extracurricular activities 
                 to help them relax and enjoy their time away from home.</p>
      </div>
      <div class="col-sm-4">
        <h3>Faith and Religion</h3>
        <p>As an ACK-sponsored school, we have a chaplain who supports 
          our students in growing their faith while they are at school.
           We are dedicated to nurturing their
           faith and helping them develop strong morals and values as 
           they grow. Students also have the opportunity to attend Sunday service every week.</p>
      </div>
        </div>
    </div>
    <div id="firstFooter">
        <div id="footer1" class="row">
            <div id="ImportantLinks" class="col-sm-4">
              <h3>Important Links</h3>
              <a id="anchorTag" href="index">Home</a> <br>
              <a id="anchorTag" href="departments">Departments</a> <br>
              <!-- <a id="anchorTag" href="#inquiry">Inquiries</a> <br> -->
             <a id="anchorTag" href="management">Board of Management</a> <br> 
              <a id="anchorTag" href="sponsor">Sponsor</a>
            </div>
            <div class="col-sm-4">
              <h3>Contact Us</h3>
              <p>Call Us on 0743865970</p>
              <h3>Visit Us</h3>
             <p><img src="../public/ack/images1/location1.webp" id="svg" class="img-fluid" alt=""> Wote town along Wote Malivani road</p>

            </div>
            <div class="col-sm-4">
              <h3>Address</h3>
              <p>P.O BOX 253-90300</p>
              <p>Wote-Makueni</p>
            </div>
          </div>
    </div>
    <div id="secondFooter">
        <p>Copyright &copy; 2024 ACK ST. Luke's Primary School. All rights reserved.</p>
    </div>
   </div> 

  	<!-- scripts -->
	<?php include("../modals/loging.php") ?>
	<?php include("../partials/scriptf.php") ?>

</body>
</html>