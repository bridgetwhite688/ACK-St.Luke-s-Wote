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
                    <a id="navButton" class="nav-link active" aria-current="page" href="contacts">Contact Us</a>
                  </li>
                  
                </ul>
                
              </div>
            </div>
          </nav>
    </div>
    <div id="body">
        <img src="../public/ack/images1/admin.jpg" class="img-fluid" alt="">
        <div class="col-sm-12">
            <h2>School History.</h2>
            <p>ACK Wote Township Boarding Primary school is a public boarding primary school which was started in 1996 under the sponsorship of the Anglican
                Church of Kenya. The school started at St. Emmanuel ACK church compound in Wote town. Later in 1999, it was allocated land by the District 
                Development Committee-Makueni at its present site. The year 2001 saw the school move from the compound to its allocated land and began operations
                as a boarding school from class four to class eight. In 2003, the late Thomas Malinda donated more land to the school bringing the total land coverage to About 
                8 acres. In 2010, the school purchased additional land. The school currently has a total land area of about 12 acres. <br> <br>
                The school started with a low enrollment but has continued to grow by the years. The school has pupils across the country with a majority of the pupils coming from the 
                greater Ukambani region. In 2010, the school had a population of 500 pupils. The population of the school has grown tremendously to 646 pupils in 2014 and 663 pupils in 2016. Currently
                the school has a population of 700 pupils with 349 boys and 351 girls. The first class eight pupils sat for KCPE in 2003 and had an enrollment of 16 pupils. 
                The KCPE candidature of the school has continued to grow greatly over the years. In 2006, the candidature increased to 77. In 2009 it grew to 109. 
                In 2012 it was 127 pupils and 133 candidates in 2015. While in 2016 it was 144 pupils . In 2017 the school has registered 160 pupils for KCPE. To date (2003-2017) a
                total of 1515 pupils have successfully completed their primary level education in the school.
                <br><br>
                The school has been performing well in both internal (school based) and external examination(Zonal-National level). It is a notable centre of excellence withing the county and greater
                Ukambani region. The first class sat for KCPE in 2003 and had a mean score of 378.06. Over the years the school has been producing some of the top scorers in the national examinations.
                The mean score of various years has been good though varied depending on different abilities of different classes. The table below shows the school performance over the years.  
            </p>
        </div>
        <h2>KCPE Performance over the years.</h2>
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- <th>#</th> -->
                                <th>YEAR</th>
                                <th>CANDIDATURE</th>
                                <th>MEAN SCORE- KCPE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Generate 23 rows -->
                            <tr>
                                <!-- <th scope="row">1</th> -->
                                <td>2003</td>
                                <td>16</td>
                                <td>378.06</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">2</th> -->
                                <td>2004</td>
                                <td>24</td>
                                <td>353.61</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">3</th> -->
                                <td>2005</td>
                                <td>34</td>
                                <td>385.05</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">4</th> -->
                                <td>2006</td>
                                <td>77</td>
                                <td>358.61</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">5</th> -->
                                <td>2007</td>
                                <td>80</td>
                                <td>364.24</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">6</th> -->
                                <td>2008</td>
                                <td>86</td>
                                <td>385.36</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">7</th> -->
                                <td>2009</td>
                                <td>109</td>
                                <td>364.24</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">8</th> -->
                                <td>2010</td>
                                <td>118</td>
                                <td>353.42</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">9</th> -->
                                <td>2011</td>
                                <td>123</td>
                                <td>382.85</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">10</th> -->
                                <td>2012</td>
                                <td>127</td>
                                <td>342.12</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">11</th> -->
                                <td>2013</td>
                                <td>128</td>
                                <td>356.53</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">12</th> -->
                                <td>2014</td>
                                <td>156</td>
                                <td>359.64</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">13</th> -->
                                <td>2015</td>
                                <td>133</td>
                                <td>378.09</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">14</th> -->
                                <td>2016</td>
                                <td>144</td>
                                <td>357.36</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">15</th> -->
                                <td>2017</td>
                                <td>160</td>
                                <td>373.3</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">16</th> -->
                                <td>2018</td>
                                <td>163</td>
                                <td>380.78</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">17</th> -->
                                <td>2019</td>
                                <td>174</td>
                                <td>370.6</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">18</th> -->
                                <td>2020</td>
                                <td>188</td>
                                <td>382.6</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">19</th> -->
                                <td>2021</td>
                                <td>192</td>
                                <td>376.4</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">20</th> -->
                                <td>2022</td>
                                <td>206</td>
                                <td>365.63</td>
                            </tr>
                            <tr>
                                <!-- <th scope="row">21</th> -->
                                <td>2023</td>
                                <td>242</td>
                                <td>383.0</td>
                            </tr>
                        </tbody>
                    </table>
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