<?php
session_start();
require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../helpers/messages.php');
require_once('../partials/headn.php');
?>
<body>
   <div class="container">
    <div id="firstHeader">
      <div class="row">
        <div class="col-sm-12">
          <div class="rowFirstHeader">
            <p></p>
            <p><img src="..public/ack/images1/envelope svg.png" id="svg" class="img-fluid" alt=""> ackwotetownship@yahoo.com &emsp; &emsp;</p>
          <p>  <img src="..public/ack/images1/call svg.png" id="svg" class="img-fluid" alt=""> 0743865970 &emsp; &emsp;</p>
           <p> <img src="..public/ack/images1/location1.webp" id="svg" class="img-fluid" alt=""> 
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
                    <a id="navButton" class="nav-link active" aria-current="page" href="contacts">Contact Us</a>
                  </li>
                  
                </ul>
                
              </div>
            </div>
          </nav>
    </div>
    <div id="body">
        <img src="../public/ack/images1/science10.jpg" id="departmentsImage" class="img-fluid" alt="">
        <h2>Departments</h2>
        <div class="row">
          <div class="col-sm-4">
            <h3>Science Department</h3>
            <p>The Science Department at ACK ST. Luke's Primary
               School is dedicated to fostering a strong foundation
                of scientific knowledge for all students. We offer a
                 variety of science lessons, experiments, and activities 
                 to help students develop their critical thinking and problem-solving skills.</p>
          </div>
          <div class="col-sm-4">
            <h3>Mathematics Department</h3>
            <p>The Mathematics Department at ACK ST. Luke's 
              Primary School is committed to providing students
               with a strong foundation of mathematical skills.
                We offer a variety of mathematics lessons, 
                experiments, and activities to help students
                 develop their critical thinking and problem-solving skills.</p>
          </div>
          <div class="col-sm-4">
            <h3>ICT Department</h3>
            <p>The ICT Department at ACK ST. Luke's Primary School is 
              dedicated to providing students with a strong foundation
               of computer skills. We offer a variety of computer lessons,
                experiments, and activities to help students develop their 
                critical thinking and problem-solving skills.</p>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h3>Guidance and Counselling Department</h3>
          <p>The Guidance and Counselling Department at ACK ST. 
            Luke's Primary School is dedicated to providing students
             with a strong foundation of counselling skills. We offer a 
             variety of counselling services, including speech therapy,
              counselling, and psychotherapy to help students develop 
              their emotional and mental well-being.</p>
        </div>
        <div class="col-sm-4">
          <h3>Sports</h3>
          <p>The Sports Department at ACK ST. Luke's Primary School
             is dedicated to providing students with a strong foundation 
             of sports skills. We offer a variety of sports lessons,
              experiments, and activities to help students develop
               their critical thinking and problem-solving skills.</p>
        </div>
        <div class="col-sm-4">
          <h3>Clubs and Movements</h3>
          <p>The clubs and Movements department at ACK ST.Luke's Primary School 
            allows students to form and participate in clubs activities. Some of the Clubs
            at our school are debating, scouting, music, environment, red cross, young developers club among others.
          </p>
        </div>
    </div>
    <div id="firstFooter">
        <div id="footer1" class="row">
            <div id="ImportantLinks" class="col-sm-4">
              <h3>Important Links</h3>
              <a id="anchorTag" href="home">Home</a> <br>
              <a id="anchorTag" href="academics">Academics</a> <br> 
               <a id="anchorTag" href="boarding">Boarding</a> <br>
               <a id="anchorTag" href="history">School history</a> <br>
               <a id="anchorTag" href="management">Board of Management</a> <br> 
              <a id="anchorTag" href="sponsor">Sponsor</a>
            </div>
            <div class="col-sm-4">
              <h3>Contact Us</h3>
              <p>Call Us on 0743865970</p>
              <h3>Visit Us</h3>
             <p><img src="..public/ack/images1/location1.webp" id="svg" class="img-fluid" alt=""> Wote town along Wote Malivani road</p>

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
<?php include("../partials/scriptn.php"); ?>
</body>
</html>