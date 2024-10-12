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
                <!-- <a id="homeButton" class="navbar-brand" href="#">ACK St.Luke's Wote Township <br> Day and Boarding Primary and Junior School <br> <span id="navButton1">Strive For Excellence.</span></a> -->

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
        <img src="../public/ack/images1/sponsor.jpg" class="img-fluid" alt="">
        <div class="col-sm-12">
            <h2>A Message from the School Board of Manaement</h2>
<p>Welcome to the official website of our school. As the School Board of Management, we are delighted to extend our warmest greetings to students, parents, staff, and visitors.
<br> <br>
    Our role is to oversee the strategic direction of the school, ensuring that we uphold the highest standards of education and foster an environment where each student can excel. We are dedicated to supporting our school community by providing resources, setting policies, and championing initiatives that enhance both academic and extracurricular experiences.
    <br> <br>
    At Ack St. Lukes Wote Township, we believe in the power of education to transform lives and create a positive impact on the community. We are committed to cultivating a learning environment that promotes academic excellence, personal growth, and a sense of belonging for every student.
     Our collaborative efforts are focused on nurturing a vibrant school culture where students, teachers, and families work together towards common goals.
    <br> <br>
    Our website serves as a gateway to important information, updates, and resources. We encourage you to explore its various sections to learn more about our programs, events, and the opportunities available to our students. Your involvement and feedback are crucial to our continued success, and we welcome your engagement in shaping the future of our school.
    <br> <br>
    Thank you.
    
<br> <br>
<strong>Bishop Emiritus Rt. Rev Joseph M. Kanuku <br>
    Chairperson - School Board of Management</strong>
</p>
        </div>
    </div>
    <div id="firstFooter">
        <div id="footer1" class="row">
            <div id="ImportantLinks" class="col-sm-4">
              <h3>Important Links</h3>
              <a id="anchorTag" href="index">Home</a> <br>
              <a id="anchorTag" href="departments">Departments</a> <br>
              <a id="anchorTag" href="boarding">Boarding</a> <br>
              <a id="anchorTag" href="history">School History</a> <br>
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