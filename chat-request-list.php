<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy- Chat request list</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper chat_request_form">
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
					<li><a href="javascript:;">Accept jobs</a></li>
					<li><a href="javascript:;">My conversations</a></li>
					<li><a href="javascript:;">Logout</a></li>
				</ul>
			</div>

			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">chat requests received</h3>
						</div>
						<div class="card-wrap">
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<div class="first-cp">
										<div class="first-img">
											<img src="img/client-3.jpg" class="rounded-circle">
										</div>
										<div class="first-info">
											<h3 class="text-center">mark henry</h3>
											<div class="side_btn d-flex justify-content-around">
												<a href="#reply-msg" class="btn btn-primary" data-toggle="modal">reply with message</a>
												<a href="chat.php" class="btn btn-primary">chat</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="first-cp">
										<div class="first-img">
											<img src="img/client-2.jpg" class="rounded-circle">
										</div>
										<div class="first-info">
											<h3 class="text-center">john redcliff</h3>
											<div class="side_btn d-flex justify-content-around">
												<a href="#reply-msg" class="btn btn-primary" data-toggle="modal">reply with message</a>
												<a href="chat.php" class="btn btn-primary">chat</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="first-cp">
										<div class="first-img">
											<img src="img/Sound relief 1.jpg" class="rounded-circle">
										</div>
										<div class="first-info">
											<h3 class="text-center">kane ray</h3>
											<div class="side_btn d-flex justify-content-around">
												<a href="#reply-msg" class="btn btn-primary" data-toggle="modal">reply with message</a>
												<a href="chat.php" class="btn btn-primary">chat</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="first-cp">
										<div class="first-img">
											<img src="img/client-2.jpg" class="rounded-circle">
										</div>
										<div class="first-info">
											<h3 class="text-center">john redcliff</h3>
											<div class="side_btn d-flex justify-content-around">
												<a href="#reply-msg" class="btn btn-primary" data-toggle="modal">reply with message</a>
												<a href="chat.php" class="btn btn-primary">chat</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="first-cp">
										<div class="first-img">
											<img src="img/Sound relief 1.jpg" class="rounded-circle">
										</div>
										<div class="first-info">
											<h3 class="text-center">kane ray</h3>
											<div class="side_btn d-flex justify-content-around">
												<a href="#reply-msg" class="btn btn-primary" data-toggle="modal">reply with message</a>
												<a href="chat.php" class="btn btn-primary">chat</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="first-cp">
										<div class="first-img">
											<img src="img/client-3.jpg" class="rounded-circle">
										</div>
										<div class="first-info">
											<h3 class="text-center">kane ray</h3>
											<div class="side_btn d-flex justify-content-around">
												<a href="#reply-msg" class="btn btn-primary" data-toggle="modal">reply with message</a>
												<a href="chat.php" class="btn btn-primary">chat</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="feed_pagination text-center">
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
                            </div>
						</div>
					</div>
				</div>
			</section>

			<!-- Footer section -->
        	<?php include('include/footer.php') ?>
        	<!-- Footer section -->

        	<!-- Reply Message -->

			<div class="container">
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
			</div>

		<!-- Modal End -->
	</div>
</div>
		<!-- script files -->
        <?php include('include/scripts.php') ?>
        <!-- script files -->

	</body>
</html>