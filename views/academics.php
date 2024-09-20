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
                    <a id="homeButton1" class="nav-link active" aria-current="page" href="home">Home</a>
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
        <div class="col-sm-12">
            <p>ACK St. Luke’s Wote Township is proud to offer the 
              Competency-Based Curriculum (CBC) Kenya, ensuring that 
              our students receive an education tailored to developing 
              essential skills and competencies for the 21st century.
               This curriculum emphasizes holistic
               development, critical thinking, and practical skills,
                preparing our students for future academic and personal success.</p>
          </div>
            <div class="row">
              <div class="col-sm-4">
                <h3>Lower Primary School-Grades 1-3</h3>
                <img id="schoolImage" src="../public/ack/images1/students10.jpg" class="img-fluid" alt="">
                <p>At ACK St. Luke’s Wote Township, we provide a 
                  comprehensive educational program for Grades 1 
                  through 3. Our curriculum is designed to foster 
                  a solid academic foundation while developing 
                  essential skills and competencies. We are 
                  dedicated to creating a stimulating and supportive 
                  learning environment that encourages growth, 
                   curiosity, and a love for learning at every stage of early education.</p>
              </div>
              <div class="col-sm-4">
                <h3>Upper Primary-Grades 4-6</h3>
                <img id="schoolImage" src="../public/ack/images1/students2.jpg" class="img-fluid" alt="">
                <p>At ACK St. Luke’s Wote Township, we provide a
                   comprehensive educational program for Grades 4 
                   through 6. Our curriculum is designed to foster
                    a solid academic foundation while developing 
                    essential skills and competencies. We are
                     dedicated to creating a stimulating and supportive 
                  learning environment that encourages growth,
                   curiosity, and a love for learning at every stage of early education.</p>
                </div>
                <div class="col-sm-4">
                  <h3>Junior Secondary School- Grades 7-9</h3>
                  <img id="schoolImage" src="../public/ack/images1/students12.jpg" class="img-fluid" alt="">
                  <p>ACK St. Luke’s Wote Township is proud to 
                    offer education for CBC Junior Secondary 
                    School. Our program is designed to build 
                    on the foundational skills developed in
                     primary education, focusing on deeper 
                     knowledge, critical thinking, and
                      practical skills. We are committed to
                     providing a supportive and dynamic
                     learning environment that prepares students 
                     for future academic and personal success.</p>
                  </div>
            </div>
    </div>
    <div id="firstFooter">
        <div id="footer1" class="row">
            <div id="ImportantLinks" class="col-sm-4">
              <h3>Important Links</h3>
              <a id="anchorTag" href="home">Home</a> <br>
              <a id="anchorTag" href="departments">Departments</a> <br> 
              <a id="anchorTag" href="boarding">Boarding</a> <br>
              <a id="anchorTag" href="history">School history</a> <br>
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
<?php include("../partials/scriptn.php"); ?>
</body>
</html>