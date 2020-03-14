<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy- My-reviews</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
        <style>
        	.my_prof_reviews .nam{
        		text-transform: capitalize;
				font-size: 20px;
				font-weight: bold;
				/*padding: 10px 0;*/
				letter-spacing: 1px;
				color: #0551a3;
        	}
        	.my_prof_reviews .des p{
        		font-size: 13px;
				letter-spacing: 2px;
				text-align: justify;
				line-height: 1.8;
        	}
        </style>
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper chat_request_form my_prof_reviews">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">my reviews</h3>
						</div>
						<div class="card-wrap">
							<div class="row">
								<div class="col-lg-8 offset-lg-2 col-md-6">
									<div class="user_form">
										<!-- <div class="log_btn text-right">
                                            <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
                                        </div> -->
                                        <!-- <div class="pro_info"> -->
											<div class="row">
												<div class="col-md-10 offset-md-1">
													<form class="" method="" action="" id="">
	                                                    <div class="text-center img_user">
	                                                        <div class="pos_rel pic_top">
	                                                            <img src="img/client-2.jpg" class="img-fluid" alt="">
	                                                            <h3 class="nam">mike andrewson</h3>
	                                                        </div>
	                                                    </div>	                                                    
	                                                </form>
													<div class="all-reviews">
														<div class="row">
															<div class="col-sm-12">
																<ul class="reviews" type="none">
																	<li>
																		<div class="avatar-img">
																			<div class="title-avatar positive">
																				<img src="img/client-2.jpg" class="img-fluid">
																			</div>
																		</div>
																		<div class="name_rates">
																			<div class="name">
																				<span class="nam"> Tom </span>
																			</div>
																			<div class="avatar-ratings">
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																		<div class="date text-right">
																			19 Mar
																		</div>
																		<div class="des">
																			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
																			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
																		</div>
																	</li>
																	<li>
																		<div class="avatar-img">
																			<div class="title-avatar positive">AB</div>
																		</div>
																		<div class="name_rates">
																			<div class="name">
																				<span class="nam"> Tom </span>
																			</div>
																			<div class="avatar-ratings">
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																			</div>
																		</div>
																		<div class="date text-right">
																			19 Mar
																		</div>
																		<div class="des">
																			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
																			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
																		</div>
																	</li>
																	<li>
																		<div class="avatar-img">
																			<div class="title-avatar positive">AB</div>
																		</div>
																		<div class="name_rates">
																			<div class="name">
																				<span class="nam"> Adelie </span>
																			</div>
																			<div class="avatar-ratings">
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fa fa-star"></i>
																				<i class="fas fa-star-half-alt"></i>
																				<i class="fas fa-star-half-alt"></i>
																			</div>
																		</div>
																		<div class="date text-right">
																			15 Apr
																		</div>
																		<div class="des">
																			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
																			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
																		</div>
																	</li>																	
																</ul>
															</div>
														</div>														
													</div>
												</div>
											</div>
                                        <!-- </div> -->
									</div>
								</div>
							</div>
						</div>
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