<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy--Complete form</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper complte_form">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">complete form</h3>
						</div>
						<div class="sign-pc">
							<div class="row">
								<div class="col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-sm-12">
									<div class="sign-bg">
										<div class="sign-wrap">
											<div class="sign-form">
												<div class="sinform-cp">
													<form class="hide-form-nh">
														<div class="date_avial">
															<label>Dates Availability</label>
															<div class="dates_sel">
																<div class="row">
																	<div class="col-4 col-md-4">
																		<div class="form-group">
																			<label>Start Date</label>
																			<input type="text" name="date" class="form-control dtpckr" value="30/09/2019">
																		</div>																
																	</div>
																	<div class="col-4 col-md-4">
																		<div class="form-group">
																			<label>End Date</label>
																			<input type="text" name="date" class="form-control dtpckr" value="30/09/2019">
																		</div>																
																	</div>
																	<div class="col-4 col-md-4">
																		<div class="form-group add_btn text-center">
																			<a href="javascript:;" class="appnd">
																				<span><i class="fas fa-plus-circle"></i></span>
																			</a>
																			<!-- <button type="button" class=""><i class="fas fa-plus"></i></button> -->
																		</div>																
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>Accepted Minimum Rate</label>
															<input type="text" name="date" class="form-control" placeholder="Enter accepted rate">
														</div>
														<div class="form-group">
															<label>Preferred Work Location</label>
															<input type="text" name="date" class="form-control" placeholder="Enter work location">
														</div>
														<div class="form-group">
															<label>Australian Business Number</label>
															<input type="text" name="date" class="form-control" placeholder="Enter business number">
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-4">
																<div class="form-group">
																	<label>Right to work in Australia</label>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	<div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example2">
																	    <label class="custom-control-label" for="customCheck2">Yes</label>
																    </div>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	 <div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example3">
																	    <label class="custom-control-label" for="customCheck3">No</label>
																    </div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-4">
																<div class="form-group">
																	<label>Working with children check</label>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	<div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example4">
																	    <label class="custom-control-label" for="customCheck4">Yes</label>
																    </div>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	 <div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck5" name="example5">
																	    <label class="custom-control-label" for="customCheck5">No</label>
																    </div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-4">
																<div class="form-group">
																	<label>Australian Driving License</label>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	<div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck6" name="example6">
																	    <label class="custom-control-label" for="customCheck6">Yes</label>
																    </div>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	 <div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck7" name="example7">
																	    <label class="custom-control-label" for="customCheck7">No</label>
																    </div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-lg-6 col-md-4">
																<div class="form-group">
																	<label>Current Police Check</label>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	<div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck8" name="example8">
																	    <label class="custom-control-label" for="customCheck8">Yes</label>
																    </div>
																</div>
															</div>
															<div class="col-lg-3 col-md-4">
																<div class="form-group">
																	 <div class="custom-control custom-checkbox">
																	    <input type="checkbox" class="custom-control-input" id="customCheck9" name="example9">
																	    <label class="custom-control-label" for="customCheck9">No</label>
																    </div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label>License/Qualification</label>
															<select class="niceselc form-control">
																<option>Graduation</option>
																<option>Engineering</option>
																<option>Graduation</option>
																<option>Graduation</option>
															</select>
														</div>
														<div class="form-group">
															<label>Biography</label>
															<textarea class="form-control" rows="5" placeholder="Enter detail"></textarea>
														</div>
														<div class="form-group">
															<label>Upload CV</label>
															<input type="file" name="file" class="form-control">
														</div>
														<div class="form-group">
															<label>Skills</label>
															<select class="niceselc form-control">
																<option>skill</option>
																<option>skill</option>
																<option>skill</option>
																<option>skill</option>
															</select>
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