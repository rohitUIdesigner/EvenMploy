<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy- Edit-profile</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper chat_request_form my_user_profile edit_user_prof">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">edit profile</h3>
						</div>
						<div class="card-wrap">
							<div class="row">
								<div class="col-lg-8 offset-lg-2 col-md-6">
									<div class="user_form">
										<div class="log_btn text-right">
                                            <a href="change-password.php" class="btn btn-primary">change password</a>
                                        </div>
                                        <div class="pro_info">
											<div class="row">
												<div class="col-md-10 offset-md-1">
													<form class="" method="" action="" id="">
	                                                    <div class="text-center img_user">
                                                            <div class="pos_rel pic_top">
                                                                <span class="img_edtt pos_rel">
                                                                    <img src="img/client-2.jpg" class="img-fluid" id="prof_ch">
                                                                    <span class="edt_inpt">
                                                                        <i class="far fa-edit"></i>
                                                                        <input type="file" name="" class="file_img">
                                                                    </span>
                                                                </span>
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
	                                                        <select class="choose-amenity form-control" multiple="multiple">
                                                                <option>skill 1</option>
                                                                <option>skill 2</option>
                                                                <option>skill 3</option>
                                                                <option>skill 4</option>
                                                                <option>skill 5</option>
                                                                <option>skill 6</option>
                                                                <option>skill 7</option>
                                                                <option>skill 8</option>
                                                                <option>skill 9</option>
	                                                        </select>
	                                                    </div>
	                                                    <div class="log_btn text-center">
				                                            <a href="javascript:;" class="btn btn-primary">save changes</a>
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