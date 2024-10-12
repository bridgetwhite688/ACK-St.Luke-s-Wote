<?php
session_start();
require_once('../functions/reusableQuery.php');
require_once('../config/config.php');
require_once('../helpers/auth.php');
require_once('../helpers/messages.php');
require_once('../partials/headf.php');
?>

<body>
	<div id="container">
		<div id="firstHeader">
			<div class="row">
				<div class="col-sm-12">
					<div class="rowFirstHeader">
						<p></p>
						<p><img src="../public/ack/images1/envelope svg.png" id="svg" class="img-fluid" alt=""> ackwotetownship@yahoo.com &emsp; &emsp;</p>
						<p> <img src="../public/ack/images1/call svg.png" id="svg" class="img-fluid" alt=""> 0743865970 &emsp; &emsp;</p>
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
								<a id="homeButton1" class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a id="navButton" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									About Us
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="#profile">School Profile</a></li>
									<li><a class="dropdown-item" href="#visionAndMission">Vision an Mission</a></li>
									<li><a class="dropdown-item" href="departments">Departments</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="history">School History</a></li>
									<li><a class="dropdown-item" href="sponsor">Sponsor</a></li>
									<li><a class="dropdown-item" href="management">Board of Management</a></li>

								</ul>
							</li>
							<!-- <li class="nav-item dropdown"> 
                        <a id="navButton" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="#profile">School Profile</a></li>
                          <li><a class="dropdown-item" href="#visionAndMission">Vision and Mission</a></li>
                          <li><a class="dropdown-item" href="departments">Departments</a></li>
                          <li><hr class="dropdown-divider"></li>

                          
                          <li><a class="dropdown-item" href="history">Shool History</a></li>
                          <li><a class="dropdown-item" href="sponsor">Sponsor</a></li>
                          <li><a class="dropdown-item" href="management">Board of Management</a></li>
                        </ul>
                      </li> -->
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="academics ">Academics</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="boarding">Boarding</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#newsAndUpdates">News</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="contactus">Inquiries</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="#testimonials">Success Stories</a>
							</li>
							<li class="nav-item">
								<a id="navButton" class="nav-link active" aria-current="page" href="contactus">Contact Us</a>
							</li>
							<li class="nav-item">
								<a id="navButton" data-toggle="modal" data-target="#loginUserr" class="nav-link active" aria-current="page" href="">Login</a>
							</li>

						</ul>

					</div>
				</div>
			</nav>
		</div>
		<div id="body">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="../public/ack/hero-carousel/admin8.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/gate.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/bus.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/images1/students13.jpg" alt="Fourth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/science.jpg" alt="Fifth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/comp lab.jpg" alt="Sixth slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="../public/ack/hero-carousel/sponsor1.jpg" alt="Seventh slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div id="profile">
				<h2></h2>
				<div class="row">
					<div class="col-sm-6">
						<img id="schoolImage" src="../public/ack/images1/principal.jpg" class="img-fluid" alt="">
					</div>
					<div class="col-sm-6">
						<h2>Welcome to ACK St.Lukes Wote Township</h2>
						<p>ACK St. Luke’s Wote Township is a premier institution renowned
							for its excellence in both day and boarding primary education,
							as well as Junior Secondary education. Sponsored by the Anglican
							Church of Kenya, the school is located in Wote Town, along Wote Malivani Road.
							<br> <br>
							As a Christian school, ACK St. Luke’s is dedicated to providing
							high-quality education rooted in strong Christian values. It stands
							out as one of the top-performing schools in the Ukambani region.
							<br> <br>
							The school boasts a team of highly qualified teachers who are
							registered with the Teachers Service Commission (TSC). Our dedicated
							educators are committed to fostering a supportive and enriching learning environment.
							<br> <br>
							ACK St. Luke’s is well-equipped with essential learning resources,
							including state-of-the-art science laboratories, a modern computer
							lab, agriculture farms, and high-speed internet connectivity. These
							facilities ensure that our students receive a comprehensive and contemporary education.
						</p>
					</div>
				</div>
			</div> <br>
			<div id="visionAndMission">
				<div class="row">
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Vision</h5>
								<p class="card-text"> To be a centre for excellence and lead the leaders.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Mission</h5>
								<p class="card-text">Producing all round and God fearing citizens.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Core Values</h5>
								<p class="card-text">
								<div class="row1">
									<div class="coreValues1">
										<p>Honesty</p>
										<p>Respect</p>
										<p>Efficiency</p>
										<p>Team Work</p>
									</div>
									<div class="coreValues2">
										<!-- <p>Team work</p> -->
										<p>Self-discipline</p>
										<p>Confidence</p>
										<p>Integrity</p>
										<p>Commitment</p>
									</div>
								</div>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card">
							<!-- <img src="../public/ack/https://via.placeholder.com/150" class="card-img-top" alt="..."> -->
							<div class="card-body">
								<h5 class="card-title">Motto</h5>
								<p class="card-text">Strive for Excellence</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- news and updates -->
	<div id="newsAndUpdates">
		<h2>News and Updates</h2>
		<div id="theNews" class="row">
			<h2>News and Updates</h2>
			<div id="" class="col-12 col-md-6 ml-24">
				<h1 id="theH1">2025 INTAKE INTERVIEW ADVERT</h1>
				<img src="../public/ack/images1/intake advert.jpg" id="intakeImage" class="img-fluid h-80 w-100" alt="">
				<!-- <p>The 2025 intake interview will be conducted on 2nd Nov 2024 at our school premises</p> -->
			</div>

			<?php
			$fetch_records_sql = mysqli_query(
				$mysqli,
				"SELECT * FROM news
				WHERE published_status = 'On'
				"												
			);
			if (mysqli_num_rows($fetch_records_sql) > 0) {
				$cnt =  1;
				while ($rows = mysqli_fetch_array($fetch_records_sql)) {
			?>
				<!-- notice container -->
				<div id="" class="col-12 col-md-6 ml-24">
					<h1 id="theH1"><?php echo $rows['news_subject']; ?></h1>
					<p><?php echo $rows['news_message']; ?></p>
				</div>

			<?php } }?>
		</div>
	</div>

	<div id="facilities">
		<h2>Facilities</h2>
		<div class="row2">
			<div class="col-sm-6">
				<div class="card-group">
					<div class="card">
						<div class="card-body">
							<p class="card-text">
							<ul>Science labs</ul>
							<ul>Computer laboratory</ul>
							<ul>High internet connectivity</ul>
							<ul>Fully stocked library</ul>
							<ul>School bus</ul>
							<ul>agriculture farm</ul>
							<ul>Sports field</ul>
							<ul>Fully equipped Kitchen</ul>
							<ul>Dining hall</ul>
							<ul>Borehole</ul>
							<ul>Water Storage tanks</ul>
							<ul>Girls Hostels</ul>
							<ul>Boys Hostels</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="row2">
					<img src="../public/ack/images1/library.jpeg" id="facilitiesImage" class="card-img-top" alt="...">
					<img src="../public/ack/images1/comp lab1.jpg" id="facilitiesImage1" class="card-img-top" alt="...">
				</div> <br>
				<div class="row2">
					<img src="../public/ack/images1/school bus3.jpg" id="facilitiesImage2" class="card-img-top" alt="...">
					<img src="../public/ack/images1/playground.jpeg" id="facilitiesImage" class="card-img-top" alt="...">
				</div>
			</div>
		</div>
	</div>
	<div id="management">
		<h2>Messages from the School Management</h2>
		<div id="customCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#customCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#customCarousel" data-slide-to="1"></li>
				<li data-target="#customCarousel" data-slide-to="2"></li>
				<li data-target="#customCarousel" data-slide-to="3"></li>
				<li data-target="#customCarousel" data-slide-to="4"></li>
				<li data-target="#customCarousel" data-slide-to="5"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div>
						<h3>Mr. Onesmus Wambua- Head Teacher</h3>
						<p>"Welcome to our school! We’re committed to providing a supportive and
							enriching environment for your child’s growth and learning."</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3>Mr. Nicholas Mutava-Deputy Head Teacher</h3>
						<p>Our dedicated staff is here to ensure your child excels academically and personally.
							Thank you for entrusting us with their education.</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3>Madam Elizabeth Nzioka-Deputy Head Teacher</h3>
						<p>Support and communication are key. We’re here to assist with any issues
							and to ensure your child’s well-being and academic success.</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3>Mr. Paul Mwalusa-Dean of Curriculum</h3>
						<p>Our curriculum is designed to challenge and inspire. We’re here to support students
							in mastering their subjects and reaching their goals.</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3>Madam Purity Mwakavi- Boarding Mistress</h3>
						<p>Our goal is to make the boarding experience as nurturing as possible.
							I’m here to support your child and ensure their well-being.</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3>Mr. Daniel Mutua-Boarding Master</h3>
						<p>We strive to create a positive environment in the boarding houses.
							Feel free to contact us with any questions or if your child needs assistance.</p>
					</div>
				</div>
			</div>
			<a id="carouselManagement" class="carousel-control-prev" href="#customCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a id="carouselManagement" class="carousel-control-next" href="#customCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div id="testimonials">
		<h2>Success Stories</h2>
		<div id="textCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#textCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#textCarousel" data-slide-to="1"></li>
				<li data-target="#textCarousel" data-slide-to="2"></li>
				<li data-target="#textCarousel" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div>
						<h3 id="testimonialsHeader">Pauline Musyimi.-Alumni</h3>
						<p id="testimonialsBody">It was a nice place where I got molded, didn't regret.</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3 id="testimonialsHeader">Charles Mutua-Alumni</h3>
						<p id="testimonialsBody"> It's simply awesome! The best public boarding primary school within the country.</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3 id="testimonialsHeader">Geoffrey Husein-Parent</h3>
						<p id="testimonialsBody">Nice and good place for anyone they mould and bring up good well
							learned citizens who are tomorrow's leaders thumbs up</p>
					</div>
				</div>
				<div class="carousel-item">
					<div>
						<h3 id="testimonialsHeader">Purity Muiva-Alumni</h3>
						<p id="testimonialsBody">It's a school which builds the whole person.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#textCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#textCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	</div>
	<div id="firstFooter">
		<div id="footer1" class="row">
			<div id="ImportantLinks" class="col-sm-4">
				<h3>Important Links</h3>
				<a id="anchorTag" href="#academics">Academics</a> <br>
				<a id="anchorTag" href="boarding">Boarding</a> <br>
				<a id="anchorTag" href="departments">Departments</a> <br>
				<a id="anchorTag" href="history">School History</a> <br>
				<a id="anchorTag" href="sponsor">Sponsor</a> <br>
				<a id="anchorTag" href="management">Board of Management</a>

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
		<p>Copyright &copy; 2024 ACK ST. Luke's Wote Township. All rights reserved.</p>
		<button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
		<br>
	</div>
	</div>
	<!-- scripts -->
	<?php include("../modals/loging.php") ?>
	<?php include("../partials/scriptf.php") ?>

</body>

</html>