<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>EventMPloy---Active Plan</title>
        <!-- css here -->
       	<?php include('include/mastercss.php') ?>
        <!-- css here -->
        <style>
        	.row.act_plan {
				justify-content: center;
			}
			.plans_sdate, .plans_edate{
				display: flex;
				justify-content: space-between;
			}
			.plans_sdate{
				padding: 0 0 10px;
			}
			.plan_date .sdate, .edate{
				font-size: 14px;
				font-weight: 600;
				text-transform: capitalize;
				color: #505050;				
			}
			.plan_date .pdate{
				font-size: 13px;
				color: #505050;
			}
        </style>
</head>

<body>
	<div class="wrapper">
		<!-- header index -->
		<?php include('include/header.php') ?>
		<!-- header index -->
		<div class="home-page-wrapper choose_plans active_plans">
			<section class="choose_sec_acc">
				<div class="account-bp">
					<div class="container">
						<div class="first-head text-center">
							<h3 class="text-center">Active Plan</h3>
						</div>
						<div class="sign-pc">
							<div class="row">
								<div class="col-md-12">
										<div class="sign-wrap">
											<div class="row act_plan">
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="plan1 plan2 text-center">
														<div class="p1-info">
															<!-- <i class="fa fa-home"></i> -->
															<h3>basic plan</h3>
														</div>
														<div class="tg-price">
															<sup>$</sup>
															<h3 class="plan-p">5</h3>
															<sub>/ month</sub>
														</div>
														<div class="plan_date">
															<div class="plans_sdate">
																<span class="sdate">start date</span>
																<span class="pdate">20/02/2019</span>
															</div>
															<div class="plans_edate">
																<span class="edate">expire date</span>
																<span class="pdate">20/07/2019</span>
															</div>
														</div>
														<!-- <div class="flanc-bt">
															<button type="button" class="btn btn-primary">select plan</button>
														</div> -->
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