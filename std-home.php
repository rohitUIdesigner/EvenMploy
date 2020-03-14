<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width= device-width, initial-scale= 1.0">
	<title>Totop | student:home</title>
	<?php include('include/master-css.php'); ?>
	<style>
		.give-revw-totop .theme-btn{
			display: block;
			width: 100% !important;
			text-align: center;
		}
		.give-reviews-totop .avatar-img {
		    width: 12%;
		    float: left;
		}
		.give-reviews-totop .name_rates {
		    width: 88%;
		    float: left;
		}
		.give-reviews-totop .add-review svg {
		    font-size: 14px;
		}
		#giveReviewToTop .modal-footer .theme-btn{
			border: unset;
		}
		.view-tut-reviews {
		    margin-top: 5px;
		}
		.view-tut-reviews a {
		    font-size: 12px;
		    text-decoration: underline;
		}

		/*modal*/
		.modal-post-body{
    background: #f9f9f9;
}
.add-post {
    /*border-bottom: 1px solid #ddd;*/
    padding: 10px;
}
.add-post ul li {
    padding: 0px 9px;
}
.add-post li svg {
    font-size: 17px;
    color: #5d5d5d;
}
.nw-theme-btn{
    padding: 2px 40px; 
}
.post-img {
    width: 10%;
    float: left;
}
.post-nam {
    width: 70%;
    float: left;
}
.post-dots {
    width: 20%;
    float: left;
}
.post-body {
    width: 100%;
    float: left;
}
.post-img img {
    height: 50px;
    width: 50px;
    border-radius: 100%;
    object-fit: cover;
}
.post-nam h4 {
    color: #0e76a8;
    font-size: 17px;
}
.my-post-view {
    border: 1px solid #e1e1e1;
    width: 100%;
    float: left;
    padding: 15px;
    border-radius: 3px;
    margin: 15px 0px;
}
.post-tym {
    font-size: 12px;
    color: #737373;
}
.post-main-img img {
    border-radius: 10px;
    margin: 15px 0px;
    box-shadow: 0 0 10px #b7b7b7;
    height: 300px;
    width: 100%;
    object-fit: cover;
}
.post-footer {
    border-top: 1px solid #e1e1e1;
    width: 100%;
    float: left;
    margin: 10px 0px;
}
.post-footer ul li {
    margin: 0px 20px 0px 0px;
    cursor: pointer;
    color: #8e8e8e;
}
.add-comment {
    margin: 15px 0px 0px;
    position: relative;
}
.camera{
    position: absolute;
    top: 0;
    right: 0;
}
.camera {
    position: absolute;
    top: 3px;
    right: 10px;
    font-size: 20px;
    color: #8e8e8e;
}
	</style>
</head>
	<!-- <div class="wrapper"> -->
		<!-- <div class="container-fluid"> -->
		<?php include('include/inner-header.php');?>
		<!-- </div> -->
	<!-- </div> -->

		<body>
			<div class="row">
				<!-- <div class="col-sm-12"> -->
					<div class="common-pg find-tut-pg std-home-pg">
						<section class="tut-inner-content">
							<div class="inner-area">
								<div class="container">
									<div class="welcome-div">
										<div class="row">
											<div class="welcm-nam"> Welcome Jeniffer </div>
										</div>
									</div>
									<div class="msg-div">
										<div class="row">
											<div class="col-sm-2 text-center">
												<div class="ico-div">
													<i class="far fa-thumbs-up"></i>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="wel-msg-div">
													<h4> Suraj Singh needs to approve your account </h4>
													<p> Ask Suraj Singh to click the link in the approval email we sent them </p>
												</div>
											</div>
											<div class="col-sm-3 text-right">
												<div class="resnd-app">
													<a href="javascript:;" class="theme-btn"> Resend approval email </a>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-9">
											<div class="unread-msgs">
												<div class="unread-msg-headng">
													<div class="row">
														<div class="col-sm-6">
															<h5> Unread Messages </h5>
														</div>
														<div class="col-sm-6 text-right">
															<a href="message-list.php"> See all Messages </a>
														</div>
													</div>
												</div>
												<div class="unread-msg-box">
													<div class="no-msg text-center">
														<img src="images/unread-msg.png" width="200px">
														<p> You’re all caught up. No unread messages </p>
													</div>
												</div>
											</div>
											<div class="listing-area">
												<h5> Recently Viewed </h5>
												<ul type="none">
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://cdn.mytutor.co.uk/images/tutor-profiles/7721820.180_1-1_10.jpg?v=15" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://tutorful.co.uk/img/online-tutoring/online-promo-top-left.jpg" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://www.goodtutorsfinder.com/wp-content/uploads/2019/04/image-tutor-laptop-light-1024x683.png" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://cdn.mytutor.co.uk/images/tutor-profiles/7721820.180_1-1_10.jpg?v=15" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://tutorful.co.uk/img/online-tutoring/online-promo-top-left.jpg" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://www.goodtutorsfinder.com/wp-content/uploads/2019/04/image-tutor-laptop-light-1024x683.png" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://cdn.mytutor.co.uk/images/tutor-profiles/7721820.180_1-1_10.jpg?v=15" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://tutorful.co.uk/img/online-tutoring/online-promo-top-left.jpg" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
													<li class="single-item">
														<div class="row">
															<div class="col-sm-2">
																<div class="img">
																	<img src="https://www.goodtutorsfinder.com/wp-content/uploads/2019/04/image-tutor-laptop-light-1024x683.png" class="img-fluid">
																</div>
															</div>
															<div class="col-sm-7">
																<div class="detail-div">
																	<h4>
																		<span class="name"> Cora B. </span>
																		<span class="price"> £22 - £24 /hr </span>
																	</h4>
																	<p class="studies">PPE (Bachelors) - Warwick University</p>
																	<div class="ratings">
																		<span class="rates">5.0</span>
																		<span class="inner-stars">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																		</span>
																	</div>
																</div>
															</div>
															<div class="col-sm-3">
																<div class="btn-div">
																	<a href="tutor-profile.php" class="theme-btn"> View Profile </a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
											<div class="pagination-div">
												<nav aria-label="Page navigation example">
													<div class="text-center">
														<ul class="pagination">
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Previous">
																	<span aria-hidden="true">&laquo;</span>
																	<span class="sr-only">Previous</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#">1</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#">2</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#">3</a>
															</li>
															<li class="page-item">
																<a class="page-link" href="#" aria-label="Next">
																	<span aria-hidden="true">&raquo;</span>
																	<span class="sr-only">Next</span>
																</a>
															</li>
														</ul>
													</div>
												</nav>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="side-area side-area-2 std-side-area">
												<h3> Need help? We’re here </h3>
												<p> Speak to the London-based team. Our office is open 8am to 7pm Mon-Thurs, 8am to 5:30pm Fri. </p>
												<a href="contact.php"> Contact Us </a>
											</div>
											<div class="give-revw-totop">
												<a href="#giveReviewToTop" data-toggle="modal" class="theme-btn">Give Reviews to Totop</a>
											</div>
											<!-- <div class="view-tut-reviews text-right">
												<a href="javascript:;">View all reviews</a>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</section>
						
						<?php include('include/footer.php');?>
					</div>
				<!-- </div> -->
			</div>
			<div class="modal" tabindex="-1" role="dialog" id="giveReviewToTop">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Give reviews to Totop</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<ul type="none" class="give-reviews-totop" style="padding: 0px;">
								<li>
									<div class="avatar-img">
										<div class="title-avatar positive">AB</div>
									</div>
									<div class="name_rates">
										<div class="name">
											<span class="nam"> Tom </span>
											<span class="designation"> student </span>
										</div>
									</div>
									<!-- <div class="date text-right">
										19 Mar
									</div> -->
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
										<div class="reviews">
											<textarea class="form-control" row="2">Add your Reviews...</textarea>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="modal-footer">
							<button type="button" class="theme-btn">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</body>
		<?php include('include/scripts.php'); ?>
</html>