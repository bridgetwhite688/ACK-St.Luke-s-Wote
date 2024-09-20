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
                 
                  
                </ul>
                
              </div>
            </div>
          </nav>
    </div>
    <div id="body"> 
       <div class="row">
        <div class="col-sm-6">
            <div class="container mt-5">
                <h2>Inquiry Form</h2>
                <form>
                  <div class="row mb-3">
                    <div class="col">
                      <label for="firstName" class="form-label">First Name</label>
                      <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required>
                    </div>
                    <div class="col">
                      <label for="lastName" class="form-label">Last Name</label>
                      <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="contact" placeholder="Enter your contact number" required>
                  </div>
                  <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
                  </div>
                  <button type="submit" id="applyButton" class="btn btn-primary">Submit</button>
                </form>
              </div>
        </div>
        <div class="col-sm-6">
            <h2>Get In Touch</h2>
            <div class="getInTouch">
                <h3>Address</h3>
                <p>P.O BOX 253-90300 <br>
                Wote-Makueni</p>
                <h3>Phone</h3>
                <p>0743865970</p>
                <h3>Email</h3>
                <p>ackwotetownship@yahoo.com</p>
            </div>
        </div>
       </div>
    </div>
    <div id="firstFooter">
        <div id="footer1" class="row">
            <div id="ImportantLinks" class="col-sm-4">
              <h3>Important Links</h3>
              <a id="anchorTag" href="index">Home</a> <br>
              <a id="anchorTag" href="academics">Academics</a> <br> 
              <a id="anchorTag" href="departments">Departments</a> <br> 
              <a id="anchorTag" href="boarding">Boarding</a> <br> 
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