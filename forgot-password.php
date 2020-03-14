<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy---Forgot Password</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper sign_up_acc login_page forgot_pwd">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">Forgot Password</h3>
						</div>
						<div class="sign-pc">
							<div class="row">
								<div class="col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-sm-12">
									<div class="sign-bg">
										<div class="sign-wrap">
											<div class="row">
												<div class="col-5 col-md-5">
													<div class="sign-info">
														<!-- <img src="logo/logow.png" class="img-fluid"> -->
														<!-- Enter some content -->
													</div>
												</div>
												<div class="col-7 col-md-7">
													<div class="sign-form">
														<div class="sign-inr-p10 text-center">
															<img src="logo/logo.png" class="img-fluid">
															<!-- <h3>welcome to EventMploy</h3> -->
														</div>
														<p class="reset">Please enter your registered email and you will receive a password reset link.</p>
														<div class="sinform-cp">
															<form class="hide-form-nh">
																<div class="form-group">
																	<input type="text" name="email" class="form-control" placeholder="Email">
																</div>																
																<!-- <div class="custom-control custom-checkbox">
																    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
																    <label class="custom-control-label" for="customCheck">Remember me</label>
															    </div> -->
																<div class="form-group side_btn text-center">
																	<a href="#for_modl" class="btn btn-primary" data-toggle="modal">submit</a>
																</div>
															</form>
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

        <!-- Forgot Modal start -->

			<div class="container">
			    <div class="modal fade" id="for_modl">
			        <div class="modal-dialog for_log">
			            <div class="modal-content">
			            	<div class="modal-header">
			            		<div class="modl_img text-center">
			            			<img src="img/checkmark.gif" class="img-fluid">
			            		</div>
					        	<!-- <h4 class="modal-title">Modal Heading</h4> -->
					        	<!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
					    	</div>            
			                <div class="modal-body text-center">
			                    <div class="modal-para text-center">
			                       <p>Thank you! for submitting your email, please check your inbox for the password reset link.</p>                    
			                    </div>
			                </div>
			                <div class="modal-footer">
			                    <div class="row">
			                        <div class="col-sm-12">
			                        	<div class="form-group side_btn text-center">
											<a href="javascript:;" class="btn btn-primary" data-dismiss="modal">ok</a>
										</div>                
			                        </div>                        
			                    </div>                    
			                </div>                
			            </div>           
			        </div>
			    </div>
			</div>

		<!-- Modal End -->

	</body>
</html>