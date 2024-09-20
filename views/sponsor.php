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
            <p><img src="images1/envelope svg.png" id="svg" class="img-fluid" alt=""> ackwotetownship@yahoo.com &emsp; &emsp;</p>
          <p>  <img src="images1/call svg.png" id="svg" class="img-fluid" alt=""> 0743865970 &emsp; &emsp;</p>
           <p> <img src="images1/location1.webp" id="svg" class="img-fluid" alt=""> 
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
                    <a id="homeButton1" class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  
                  <li class="nav-item">
                    <a id="navButton" class="nav-link active" aria-current="page" href="history.html">School History</a>
                  </li>
                  <li class="nav-item">
                    <a id="navButton" class="nav-link active" aria-current="page" href="management.html">Board of Management</a>
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
        <img src="images1/principal3.jpg" class="img-fluid" alt="">
        <div class="col-sm-12">
            <h2>A Message from the School Sponsor</h2>
<p>It gives me great pleasure to write these welcome
 remarks to Ack St. Lukes Wote Township Boarding
  Primary and Junior School. <br> <br> 
Ack St. Lukes Wote Township Boarding Primary and 
Junior School started as a nursery school at the
 Ack Wote Church compound in 1990after which church
  elders felt it wise to progress to a public primary 
  school. Through the wise guidance and advice from
   the Bishop of Machakos, Bishop Emiritus Joseph
    m. Kanuku and Thomas Malinda, the Nursery School
     was converted into a Public Primary School in 1996. <br><br>
We have seen the school grow and we appreciate the
 journey it has taken this far. Through team work by 
 all the stakeholders, the school has developed 
 infrastructure that provides a conducive environment
  for learning which is seen through its academic performance. 	
With Blessings, welcome all…
<br> <br>
<strong>The Rt. Rev. Francis M. Matui
    Diocesan Bishop – ACK Diocese of Makueni (Sponsor)</strong>
</p>
        </div>
    </div>
    <div id="firstFooter">
        <div id="footer1" class="row">
            <div id="ImportantLinks" class="col-sm-4">
              <h3>Important Links</h3>
              <a id="anchorTag" href="index.html">Home</a> <br>
              <a id="anchorTag" href="departments.html">Departments</a> <br>
              <a id="anchorTag" href="boarding.html">Boarding</a> <br>
              <a id="anchorTag" href="management.html">Board of Management</a> <br>
             
              <a id="anchorTag" href="sponsor.html">Sponsor</a>
            </div>
            <div class="col-sm-4">
              <h3>Contact Us</h3>
              <p>Call Us on 0743865970</p>
              <h3>Visit Us</h3>
             <p><img src="images1/location1.webp" id="svg" class="img-fluid" alt=""> Wote town along Wote Malivani road</p>

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
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- scripts -->
<?php include("../partials/scriptn.php"); ?>
</body>
</>