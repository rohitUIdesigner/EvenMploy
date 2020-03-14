<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy-Sign up</title>
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
			<section class="choose_sec_acc sign_up_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">sign up</h3>
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
														<!-- enter some content -->
													</div>
												</div>
												<div class="col-7 col-md-7">
													<div class="sign-form">
														<!-- <div class="sign-inr-p10">
															<h3 class="pos_rel">engage your events</h3>
														</div> -->
														<div class="sinform-cp">
															<form class="hide-form-nh">
																<div class="form-group">
																	<input type="text" name="fname" class="form-control" placeholder="First Name">
																</div>
																<div class="form-group">
																	<input type="text" name="lname" class="form-control" placeholder="Last Name">
																</div>
																<div class="form-group">
																	<input type="text" name="email" class="form-control" placeholder="Email">
																</div>
																<div class="form-group">
																	<input type="text" name="uname" class="form-control" placeholder="User Name">
																</div>
																<div class="form-group">
																	<input type="password" name="psw" class="form-control" placeholder="Password">
																</div>
																<div class="form-group">
																	<input type="password" name="cpsw" class="form-control" placeholder="Confirm Password">
																</div>
																<div class="form-group side_btn text-center">
																	<a href="javascript:;" class="btn btn-primary">submit</a>
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
	</body>
</html>