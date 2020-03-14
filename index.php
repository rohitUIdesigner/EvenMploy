<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper">
			<div class="sidebar">
				<div class="right_side_content">
	    			<span class="right_bars">
	                    <i class="fas fa-bars right"></i>
	                    <i class="fas fa-times cross"></i>
	                </span>
	    		</div>
				<div class="user-prof">
					<div class="user-pic">
						<img src="img/client-2.jpg" class="img-fluid">
					</div>
					<div class="user_name">
						<h3>Mark Henry</h3>
					</div>						
				</div>
				<ul type="none">
					<li><a href="javascript:;">My Profile</a></li>
					<li><a href="javascript:;">View list of jobs</a></li>
					<li><a href="chat-request-list.php">Chat request received</a></li>
					<li><a href="javascript:;">My completed jobs</a></li>
					<li><a href="javascript:;">My conversations</a></li>
					<li><a href="javascript:;">Logout</a></li>
				</ul>
			</div>
			<section class="slider_sec">
				<div class="swiper_main">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="img/Wedding.jpg" class="img-fluid" alt="Image slider">
			        		<div class="slider_caption">
								<div class="container">
									<div class="slider_txt">
				        				<h3>eventMploy connecting event organisers with event professionals</h3>
									</div>
			        			</div>
			        		</div>
						</div>
						<div class="swiper-slide">
							<img src="img/concert.jpg" class="img-fluid" alt="Image slider">
			        		<div class="slider_caption">
								<div class="container">
									<div class="slider_txt">        				
				        				<h3>eventMploy connecting event organisers with event professionals</h3>
				        			</div>
			        			</div>
			        		</div>
						</div>
						<div class="swiper-slide">
							<img src="img/Sound Relief-196.jpg" class="img-fluid" alt="Image slider">
			        		<div class="slider_caption">
								<div class="container">
									<div class="slider_txt">
				        				<h3>eventMploy connecting event organisers with event professionals</h3>
			        				</div>
			        			</div>
			        		</div>
						</div>
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</section>

			<section class="info_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="side1_info">
								<div class="info_head text-center">
									<h3>find event Work </h3>
								</div>
								<div class="img_side text-center">
									<img src="img/EventMploy_looking for work.jpg" class="img-fluid fadeInLeft wow">
								</div>
								<div class="side2_info">
									<h3>then this is the time to apply for these positions</h3>
									<p>Chance for Freelancers to get Job Opportunities<br />Create your profile now and grab that chance.</p>
									<div class="side_btn">
										<a href="javascript:;" class="btn btn-primary">create profile</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="search_freelance">
								<div class="info_head text-center">
									<h3>find event freelancers</h3>
								</div>
								<div class="seac-img">
									<div class="img_side text-center">
										<img src="img/freelancers.jpg" class="img-fluid fadeInRight wow">
									</div>
								</div>
								<form class="hide-form-nh">
									<div class=freelance-pb>
										<div class="form-group new_info">
											<input type="text" name="date" class="form-control dtpckr" placeholder="Select Date">
										</div>
										<div class="form-group new_info">
											<input type="text" name="loc" class="form-control" placeholder="Event Location..">
										</div>
										<div class="form-group new_info">
											<select class="niceselc form-control">
												<option>Skills</option>
												<option>Skills</option>
												<option>Skills</option>
												<option>Skills</option>
												<option>Skills</option>
											</select>
										</div>
										<div class="form-group">
											<div class="flanc-bt">
												<button type="button" class="btn btn-primary">search</button>
											</div>
										</div>
									</div>
								</form>
							</div>		
						</div>
					</div>
				</div>
					<div class="bg-img">
						<img src="img/cir.png" class="img-fluid circle">
						<img src="img/tri.png" class="img-fluid tri">
					</div>
			</section>

			<section class="client-info">
				<div class="container">
					<div class="cl-3 text-center">
						<h3>testimonial</h3>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="test1">
								<div class="box">
									<div class="content">
										<h2>mark henry</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
										<a href="javascript:;" class="btn btn-primary">Read more</a>
									</div>
									<div class="box-img">
										<img src="img/client-2.jpg" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="test1">
								<div class="box">
									<div class="content">
										<h2>cristina</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
										<a href="javascript:;" class="btn btn-primary">Read more</a>
									</div>
									<div class="box-img">
										<img src="img/client-3.jpg" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="test1">
								<div class="box">
									<div class="content">
										<h2>alisia</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua.</p>
										<a href="javascript:;" class="btn btn-primary">Read more</a>
									</div>
									<div class="box-img">
										<img src="img/Sound relief 1.jpg" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="map_section">
				<div class="container-fluid">
					<div class="map_info text-center">
						<h3>event professionals across the world</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3810727.312822419!2d132.1438603372993!3d-21.13594071965487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1569320991306!5m2!1sen!2sin" width="1320" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
					</div>
				</div>
			</section>
			<!-- Footer section -->
        	<?php include('include/footer.php') ?>
        	<!-- Footer section -->
	</div>
</div>
		<!-- script files -->
        <?php include('include/scripts.php') ?>
        <!-- script files -->
	</body>
</html>