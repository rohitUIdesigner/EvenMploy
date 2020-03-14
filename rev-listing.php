<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy- Rating & Reviews</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
        <style type="text/css">
        	/*.rating_rev_sec{
        		padding: 0 0 40px;
        	}
        	.rr_full{
        		background: #fff;
				box-shadow: 0px 1px 11px 0px #d2d2d2;
				border-radius: 5px;
				padding: 20px 38px;
        	}
        	 .title-avatar {
		        width: 50px;
		        height: 50px;
		        border-radius: 100%;
		        text-align: center;
		        line-height: 46px;
		        color: #ffffff;
		    }
		    .title-avatar img{
		    	border-radius: 100%;
		    	object-fit: cover;
		    }
		    .positive{
		        background: #50b83c;        
		    }
		    .reviews {
		        padding: 0;
		        width: 100%;
		        float: left; 
		    }
		    .reviews li{
		        width: 100%;
		        float: left;
		        border-bottom: 1px solid #ddd;
		    }
		    .full-rates {
		        border-bottom: 1px solid #f4f4f4;
		        padding-bottom: 15px;
		    }
		    .all-reviews li{
		        padding: 15px 0px;
		    }
		    .avatar-img{
		        width: 10%;
		        float: left;
		    }
		    .name_rates{
		        width: 70%;
		        float: left;
		    }
		    .reviews .des{
		        width: 100%;
		        float: left;
		    }
		    .avatar-ratings {
		        color: #fac219;
		    }
		    .nam {
		        font-size: 26px;
		        font-weight: 600;
		        color: #0551a3;
		    }
		    .designation{
		        color: #6b7278;
		    }
		    .rev_link p{
		    	color: #f68421;
				text-decoration: underline;
				padding: 10px 0;
		    }
		    .rating_head h3 {
				color: #58595d;
				text-transform: capitalize;
				letter-spacing: 0.5px;
				font-size: 20px;
				padding: 0 0 27px 0;
				position: relative;
			}
			.rev_box{
				padding: 20px 0 0 ;
			}*/
        </style>
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper chat_request_form jobs_view">			
			
			<section class="choose_sec_acc rating_rev_sec">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">Ratings & Reviews</h3>
						</div>
						<div class="full-rates-reviews">
							<div class="col-sm-12">
								<div class="rr_full">
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
													<li>
														<div class="avatar-img">
															<div class="title-avatar positive">
																<img src="img/client-3.jpg" class="img-fluid">
															</div>
														</div>
														<div class="name_rates">
															<div class="name">
																<span class="nam"> Shira </span>
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
															10 Aug
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
																<span class="nam"> James </span>
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
															14 Sep
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
																<span class="nam"> Mark </span>
															</div>
															<div class="avatar-ratings">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="far fa-star"></i>
															</div>
														</div>
														<div class="date text-right">
															20 Oct
														</div>
														<div class="des">
															<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
															cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="rating_sec">
											<div class="review_content">
												<div class="rev_link">
													<a href="javascript:;" class="rat_click">
														<p>Give reviews to EventMploy</p>
													</a>
												</div>
												<div class="rating-body">
													<ul type="none" class="give-reviews-totop" style="padding: 0px;">
														<li>
															<div class="avatar-img">
																<div class="title-avatar positive">
																	<img src="img/client-2.jpg" class="img-fluid">
																</div>
															</div>
															<div class="rev_rates">
																<div class="name">
																	<span class="nam"> Mark Henry </span>
																</div>
															</div>
															<div class="add-review">
																<div class="rates">
																	<div class="avatar-ratings">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																	</div>
																</div>
																<div class="form-group rev_box">
																	<textarea class="form-control" rows="3" placeholder="Add your reviews..."></textarea>
																</div>
															</div>
														</li>
													</ul>
													<div class="side_btn text-right">
														<a href="javascript:;" class="btn btn-primary">submit</a>
													</div>
												</div>
											</div>
										</div>
									</div>
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