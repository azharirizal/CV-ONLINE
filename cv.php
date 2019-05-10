<!-- Designed By Muhamad Rizal Azhari -->
<!-- https://bit.ly/2vBKb8Y -->

<?php
include "conf/conn.php";
$id = $_GET['id'];
$mysqlquery = mysql_query("SELECT * FROM biodata WHERE id_biodata='".$id."'");
$row = mysql_fetch_array($mysqlquery);
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Curriculum Vitae</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">	
	
	<!-- Font -->
	
	<link href="css/allura.css" rel="stylesheet">
	
	<!-- Stylesheets -->
	
	<link href="common-css/bootstrap.css" rel="stylesheet">
	
	<link href="common-css/ionicons.css" rel="stylesheet">
	
	<link href="common-css/fluidbox.min.css" rel="stylesheet">
	
	<link href="css/styles.css" rel="stylesheet">
	
	<link href="css/responsive.css" rel="stylesheet">
	
</head>
<body>
	
	<header>
		<div class="container">
			<div class="heading-wrapper">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-location-outline"></i>
							<div class="right-area">
								<h5><?php echo $row['address']; ?></h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-telephone-outline"></i>
							<div class="right-area">
								<h5><?php echo $row['phone']; ?></h5>
								<h6>MIN - FRI,8AM - 7PM</h6>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
					
					<div class="col-sm-6 col-md-6 col-lg-4">
						<div class="info">
							<i class="icon ion-ios-chatboxes-outline"></i>
							<div class="right-area">
								<h5><?php echo $row['email']; ?></h5>
							</div><!-- right-area -->
						</div><!-- info -->
					</div><!-- col-sm-4 -->
				</div><!-- row -->
			</div><!-- heading-wrapper -->
			<a class="downlad-btn" href="file/<?php echo $row['resume']; ?>" title="Download Resume">Download Resume</a>
		</div><!-- container -->
	</header>
	
	<section class="intro-section" style="background-image: url(images/banner/<?php echo $row['banner']; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-md-1 col-lg-2"></div>
				<div class="col-md-10 col-lg-8">
					<div class="intro">
						<?php
						if($row['profile']!=NULL){
						echo "<div class='profile-img'><img src='cpanel-admin/img/profile/".$row['profile']."'></div>";	
						}else{
							if($row['gender']=="m"){ 
							echo "<div class='profile-img'><img src='cpanel-admin/img/profile-male.png'></div>";
							}elseif($row['gender']=="f"){
							echo "<div class='profile-img'><img src='cpanel-admin/img/profile-female.png'></div>";
							}else{
							echo "<div class='profile-img'><img src='cpanel-admin/img/profile.png'></div>";	
							}
						}
						?>
                        <h2><b><?php echo $row['fullname']; ?></b></h2>
						<h4 class="font-yellow"><?php echo $row['position']; ?></h4>
						<ul class="information margin-tb-30">
						<?php
							if($row['gender']=="m"){
							$gender="Male";
							$gendericon="male";
							}elseif($row['gender']=="f"){
							$gender="Female";
							$gendericon="female";
							}else{
							$gender="None";
							}
							?>
							<li><i class="ion-<?php echo $gendericon; ?>"></i> <?php echo $gender; ?></li>
                            <li><b><?php echo $row['birthplace']; ?></b>, <?php echo $row['birthdate']; ?></li>
						</ul>
						<ul class="social-icons">
							<li><a href="<?php echo $row['fb']; ?>" target="_blank"><i class="ion-social-facebook"></i></a></li>
							<li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="ion-social-twitter"></i></a></li>
							<li><a href="<?php echo $row['ig']; ?>" target="_blank"><i class="ion-social-instagram"></i></a></li>
							<li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="ion-social-linkedin"></i></a></li>
						</ul>
					</div><!-- intro -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- intro-section -->

	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>About me</b></h3>
						<h6 class="font-lite-black"><b>PROFESSIONAL PATH</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<p class="font-semi-white margin-b-50"><?php echo $row['aboutme']; ?></p>
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- about-section -->
	
	<section class="about-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Work Experience</b></h3>
						<h6 class="font-lite-black"><b>PREVIOUS JOBS</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<?php
					$queryjob=mysql_query("SELECT * FROM job WHERE id_biodata='".$id."' ORDER BY id_job DESC");
					while ($rowjob=mysql_fetch_array($queryjob))
					{
					?>
					<div class="experience margin-b-50">
						<h4><b><?php echo $rowjob['position']; ?></b></h4>
						<h5 class="font-yellow"><b><?php echo $rowjob['company']; ?></b></h5>
						<h6 class="margin-t-10"><?php echo $rowjob['workdate']; ?></h6>
						<p class="margin-tb-30">Activity :</p>
						<ul class="list margin-b-30">
							<li><?php echo $rowjob['activity']; ?></li>
						</ul>
					</div><!-- experience -->
					<?php } ?>
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- experience-section -->
	
	<section class="experience-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Education</b></h3>
						<h6 class="font-lite-black"><b>ACADEMIC CAREER</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="education-wrapper">
						<?php
						$queryedu=mysql_query("SELECT * FROM education WHERE id_biodata='".$id."' ORDER BY id_education DESC");
						while ($rowedu=mysql_fetch_array($queryedu))
						{
						?>
						<div class="education margin-b-50">
							<h4><b><?php echo $rowedu['title']; ?></b></h4>
							<h5 class="font-yellow"><b><?php echo $rowedu['institute']; ?> - <?php echo $rowedu['major']; ?></b></h5>
							<h6 class="font-lite-black margin-t-10">GRADUATED IN <?php echo $rowedu['graduate']; ?></h6>
							<p class="font-semi-white margin-tb-30"><?php echo $rowedu['description']; ?></p>
						</div><!-- education -->
						<?php } ?>
					</div><!-- education-wrapper -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
	</section><!-- about-section -->

	<section class="skills-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 center-text">
					<div class="heading">
						<h3><b>Technical Skills</b></h3>
						<h6 class="font-lite-black"><b>I'M GOOD AT</b></h6>
					</div>
				</div><!-- col-sm-12 -->
				<div class="col-md-12">
				<?php
				$queryskill=mysql_query("SELECT * FROM skill WHERE id_biodata='".$id."' ORDER BY id_skill DESC");
				while ($rowskill=mysql_fetch_array($queryskill))
				{
				?>
					<div class="line-progress margin-b-20" data-prog-percent=".<?php echo $rowskill['percent']; ?>"><div></div>
					<p class="progress-title"><b><?php echo $rowskill['skill']; ?></b></p></div><hr>
				<?php } ?>
				</div><!-- col-md-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- skills-section -->

	<section class="portfolio-section section">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="heading">
						<h3><b>Gallery</b></h3>
						<h6 class="font-lite-black"><b>MY JOURNEY</b></h6>
					</div>
				</div><!-- col-sm-4 -->
				<div class="col-sm-8">
					<div class="portfolioFilter clearfix margin-b-80">
						<b></b>
					</div><!-- portfolioFilter -->
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
		
		<div class="portfolioContainer">
            <?php
              $queryimage=mysql_query("SELECT * FROM gallery WHERE id_biodata='".$id."' ORDER BY id_gallery DESC");
              while ($rowimage=mysql_fetch_array($queryimage))
              {
            ?>
			<div class="p-item web-design">
				<a href="images/gallery/<?php echo $rowimage['image']; ?>" title="<?php echo $rowimage['description']; ?>" data-fluidbox>
					<img src="images/gallery/<?php echo $rowimage['image']; ?>" alt="<?php echo $rowimage['description']; ?>"></a>
			</div><!-- p-item -->
            <?php } ?>
		</div><!-- portfolioContainer -->
		
	</section><!-- portfolio-section -->
	<br>
	<section class="quoto-section" style="text-align:center;background-image: url(images/banner/<?php echo $row['banner']; ?>)">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<i class="icon ion-quote"></i>
					<h3 class="font-yellow"><b>Self Quotes</b></h3>
					<h3><b><?php echo $row['quote']; ?></b></h3>
				</div><!-- col-sm-12 -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- quoto-section -->
	<br>
	<footer>
		<p class="copyright">
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://bit.ly/2vBKb8Y" target="_blank">Rizal Azhari</a>. All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</p>

	</footer>
	
	
	<!-- SCRIPTS -->
	
	<script src="common-js/jquery-3.2.1.min.js"></script>
	
	<script src="common-js/tether.min.js"></script>
	
	<script src="common-js/bootstrap.js"></script>
	
	<script src="common-js/isotope.pkgd.min.js"></script>
	
	<script src="common-js/jquery.waypoints.min.js"></script>
	
	<script src="common-js/progressbar.min.js"></script>
	
	<script src="common-js/jquery.fluidbox.min.js"></script>
	
	<script src="common-js/scripts.js"></script>
	
</body>
</html>
