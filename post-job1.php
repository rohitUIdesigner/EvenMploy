<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy- Post Jobs</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper chat_request_form post_job">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">post job</h3>
						</div>
						<div class="card-wrap">
							<div class="row">
								<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12">
									<div class="first-cp">
										 <div class="progress_bar">
                                            <a href="javascript:;" class="change_step current float-left">
                                                <span class="circleSteps">1</span>
                                            </a>
                                            <span class="spaceDots float-left">..........................................................</span>

                                            <a href="javascript:;" class="change_step float-left">
                                                <span class="circleSteps">2</span>
                                            </a>
                                            <span class="spaceDots float-left">..........................................................</span>

                                            <a href="javascript:;" class="change_step float-left">
                                                <span class="circleSteps">3</span>
                                            </a>
                                            <!-- <span class="spaceDots float-left">.....................</span>

                                            <a href="javascript:;" class="change_step float-left">
                                                <span class="circleSteps">4</span>
                                            </a>
                                            <span class="spaceDots float-left">.....................</span>

                                            <a href="javascript:;" class="change_step float-left">
                                                <span class="circleSteps">5</span>
                                            </a> -->
                                            <div class="StepText">
                                                <span class="txtstep1 circleStepText float-left textHighlighted">Enter Your <br /> Personal Details</span>
                                                <span class="txtstep2 circleStepText float-left">Event Details</span>
                                                <span class="txtstep3 circleStepText float-left">Requirements</span>
                                                <!-- <span class="txtstep4 circleStepText float-left">Videos</span>
                                                <span class="txtstep5 circleStepText float-left">Status</span> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-10 offset-md-1">
		                                        <div class="job_head text-center">
		                                        	<h3>enter your personal details</h3>
		                                        </div>
		                                        <form>
		                                        	<div class="form-group">
		                                        		<label>Full Name</label>
		                                        		<input type="text" name="name" class=" form-control" placeholder="Enter your full name">
		                                        	</div>
		                                        	<div class="form-group">
		                                        		<label>Contact Number</label>
		                                        		<input type="tel" name="number" class=" form-control" placeholder="Enter your contact number">
		                                        	</div>
		                                        	<div class="form-group">
		                                        		<label>Australian Business Number</label>
		                                        		<input type="tel" name="number" class=" form-control" placeholder="Enter your business number">
		                                        	</div>
		                                        	<div class="form-group">
		                                        		<label>Email Address</label>
		                                        		<input type="text" name="email" class=" form-control" placeholder="Enter your email address">
		                                        	</div>
		                                        	<div class="form-group">
		                                        		<label>Address</label>
		                                        		<textarea class="form-control" rows="5" placeholder="Enter address here..."></textarea>
		                                        	</div>
													<div class="side_btn text-center">
														<a href="javascript:;" class="btn btn-primary">Next</a>
													</div>
		                                        </form>
                                        	</div>
                                        </div>
									</div>
								</div>
							</div>
							<!-- <div class="feed_pagination text-center">
                                <ul class="pagination modal-2">
                                    <li><a href="javascript:;" class="prev">&laquo;</a></li>
                                    <li><a href="javascript:;">1</a></li>
                                    <li> <a href="javascript:;">2</a></li>
                                    <li> <a href="javascript:;">3</a></li>
                                    <li> <a href="javascript:;" class="active">4</a></li>
                                    <li> <a href="javascript:;">5</a></li>
                                    <li> <a href="javascript:;">6</a></li>
                                    <li> <a href="javascript:;">7</a></li>
                                    <li> <a href="javascript:;">8</a></li>
                                    <li><a href="javascript:;" class="next">&raquo;</a></li>
                                </ul>
                            </div> -->
						</div>
					</div>
				</div>
			</section>

			<!-- Footer section -->
        	<?php include('include/footer.php') ?>
        	<!-- Footer section -->


        	<!-- Forgot Modal start -->

			<!-- <div class="container">
			    <div class="modal fade" id="reply-msg">
			        <div class="modal-dialog reply">
			            <div class="modal-content">
			            	<div class="modal-header">
					        	<h3 class="modal-title text-center">enter your message</h3>
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					    	</div>            
			                <div class="modal-body text-center">
			                    <div class="form-group">
			                    	<textarea class="form-control" rows="5" placeholder="Write your message here.."></textarea>
			                    </div>
			                </div>
			                <div class="modal-footer">
			                    <div class="row">
			                        <div class="col-sm-12">
			                        	<div class="form-group side_btn text-center">
											<a href="javascript:;" class="btn btn-primary" data-dismiss="modal">send</a>
										</div>                
			                        </div>                        
			                    </div>                    
			                </div>                
			            </div>           
			        </div>
			    </div>
			</div> -->

		<!-- Modal End -->
	</div>
</div>
		<!-- script files -->
        <?php include('include/scripts.php') ?>
        <!-- script files -->

	</body>
</html>