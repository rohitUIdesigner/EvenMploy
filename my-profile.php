<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy- My-profile</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper chat_request_form my_user_profile">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">my profile</h3>
						</div>
						<div class="card-wrap">
							<div class="row">
								<div class="col-lg-8 offset-lg-2 col-md-6">
									<div class="user_form">
										<div class="log_btn text-right">
                                            <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
                                        </div>
                                        <div class="pro_info">
											<div class="row">
												<div class="col-md-10 offset-md-1">
													<form class="" method="" action="" id="">
	                                                    <div class="text-center img_user">
	                                                        <div class="pos_rel pic_top">
	                                                            <img src="img/client-2.jpg" class="img-fluid" alt="">
	                                                        </div>
	                                                    </div>
	                                                    <div class="row">
	                                                        <div class="col-6 col-xs-12">
	                                                            <div class="form-group">
	                                                                <label>First Name</label>
	                                                                <input type="text" class="form-control" value="James">
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-6 col-xs-12">
	                                                            <div class="form-group">
	                                                                <label>Last Name</label>
	                                                                <input type="text" class="form-control" value="Fredman">
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-6 col-xs-12">
	                                                            <div class="form-group">
	                                                                <label>User Name</label>
	                                                                <input type="text" class="form-control" value="Fredman041">
	                                                            </div>
	                                                        </div>
	                                                        <div class="col-6 col-xs-12">
	                                                            <div class="form-group">
	                                                                <label>Mobile Number</label>
	                                                                <input type="text" class="form-control" value="2321556545">
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                    <div class="form-group">
	                                                        <label>Email Address</label>
	                                                        <input type="email" class="form-control" value="James.fred@gmail.com">
	                                                    </div>
	                                                    <div class="form-group">
	                                                        <label>Address</label>
	                                                        <input type="text" class="form-control" value="4 Sale-Heyfield, Victoria, Australia" autocomplete="off">
	                                                    </div>
	                                                    <div class="form-group">
	                                                        <label>My Skills</label>
	                                                        <input type="text" class="form-control" value="skill 1, skill 2, skill 3" autocomplete="off">
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