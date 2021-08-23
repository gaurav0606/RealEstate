<?php 

include("includes/config.php"); 
include("includes/pageSections/header.php"); 

?>


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Featured Listings</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Featured Listings</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">

				<?php  
				
					$queryFeatured = mysqli_query($con,"SELECT * FROM property ORDER BY date DESC");

					if(mysqli_num_rows($queryFeatured) > 0){
						while($row = mysqli_fetch_array($queryFeatured)){
							$date = $row['date'];
							$postDate = round((strtotime('now') - strtotime($date))/60/60/24);
							if($postDate < 0){
								$postDate = "Today";
							}
							echo '
							
							<div class="col-lg-4 col-md-6">
								<!-- feature -->
								<div class="feature-item">
									<div class="feature-pic set-bg" data-setbg="'.$row['image'].'">
										<div class="sale-notic">FOR SALE</div>
									</div>
									<div class="feature-text">
										<div class="text-center feature-title">
											<h5>'.$row['name'].'</h5>
											<p><i class="fa fa-map-marker"></i> '.$row['location'].'</p>
										</div>
										<div class="room-info-warp">
											<div class="room-info">
												<div class="rf-left">
													<p><i class="fa fa-th-large"></i> '.$row['area'].' Square foot</p>
													<p><i class="fa fa-bed"></i> '.$row['bedroom'].' Bedrooms</p>
												</div>
												<div class="rf-right">
													<p><i class="fa fa-car"></i> 2 Garages</p>
													<p><i class="fa fa-bath"></i> '.$row['bathroom'].' Bathrooms</p>
												</div>	
											</div>
											<div class="room-info">
												<div class="rf-left">
													<p><i class="fa fa-user"></i> '.$row['owner'].'</p>
												</div>
												<div class="rf-right">
													<p><i class="fa fa-clock-o"></i> '.$postDate.' days ago</p>
												</div>	
											</div>
										</div>
										<a href="single-list.php?id='.$row['id'].'" class="room-price">More Details</a>
									</div>
								</div>
							</div>

							';
						}
					}

				?>
			</div>
			<div class="site-pagination">
				<span>1</span>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</section>
	<!-- page end -->


	<!-- Clients section -->
	<div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div>
	<!-- Clients section end -->


<?php 

include("includes/pageSections/footer.php"); 

?>