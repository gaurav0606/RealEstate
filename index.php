<?php 

	include("includes/config.php"); 
	include("includes/pageSections/header.php"); 

	

	$query = mysqli_query($con, "SELECT * FROM property");

	if(mysqli_num_rows($query) > 0){
		while($row = mysqli_fetch_array($query)){
			
		}
	}	

?>

	<!-- Hero section -->
	<!-- <section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container hero-text text-white">
			<h2>find your place with our local life style</h2>
			<p>Search real estate property records, houses, condos, land and more on leramiz.com®.<br>Find property info from the most comprehensive source data.</p>
			<a href="#recent" class="site-btn">VIEW DETAIL</a>
		</div>
	</section> -->

	<div class="container-fluid hero">
		<div class="welcomeText">
			<h2>Find your place with our local life style</h2>
			<p><br>Find property info from the most comprehensive source data.</p>
			<a href="#recent" class="site-btn">VIEW DETAIL</a>
		</div>
	</div>
	<!-- Hero section end -->


	<!-- Filter form section -->
	<!-- <div class="filter-search">
		<div class="container">
			<form class="filter-form">
				<input type="text" placeholder="Enter a street name, address number or keyword">
				<select>
					<option value="City">City</option>
				</select>
				<select>
					<option value="City">State</option>
				</select>
				<button class="site-btn fs-submit">SEARCH</button>
			</form>
		</div>
	</div> -->
	<!-- Filter form section end -->



	<!-- Properties section -->
	<section class="properties-section spad" id="recent">
		<div class="container">
			<div class="section-title text-center">
				<h3>RECENT PROPERTIES</h3>
				<p>Discover the recent properties added for you</p>
			</div>
			<div class="row">

				<?php    
				
					$query = mysqli_query($con, "SELECT * FROM property, images WHERE property.id = images.propertyId ORDER BY property.id LIMIT 0,4");
					if(mysqli_num_rows($query) > 0){
						while($row = mysqli_fetch_array($query)){							
							echo '
								<div class="col-md-6">
									<div class="propertie-item set-bg" data-setbg="'.$row['filename'].'">
										<div class="sale-notic">FOR SALE</div>
										<div class="propertie-info text-white">
											<div class="info-warp">
												<h5>'.$row['name'].'</h5>
												<p><i class="fa fa-map-marker"></i> '.$row['location'].'</p>
											</div>
											<div class="price"><a href="single-list.php?id='.$row['id'].'" class="room-price">More Details</a></div>
										</div>
									</div>
								</div>
							';
						}
					}

				?>
			</div>
		</div>
	</section>
	<!-- Properties section end -->


	<!-- Services section -->
	<section class="services-section spad set-bg" data-setbg="img/service-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="img/service.jpg" alt="">
				</div>
				<div class="col-lg-5 offset-lg-1 pl-lg-0">
					<div class="section-title text-white">
						<h3>OUR SERVICES</h3>
						<p>We provide the perfect service for </p>
					</div>
					<div class="services">
						<div class="service-item">
							<i class="fa fa-comments"></i>
							<div class="service-text">
								<h5>Consultant Service</h5>
								<p>We helps you to find the best environment for your living.</p>
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-home"></i>
							<div class="service-text">
								<h5>Properties Management</h5>
								<p>We look after the buildings,housing,industrial spaces and other property to make sure it is in good working order,
								looks clean and well-maintained and everything is in working order.</p> 
							</div>
						</div>
						<div class="service-item">
							<i class="fa fa-briefcase"></i>
							<div class="service-text">
								<h5>Renting and Selling</h5>
								<p>Here you can find the different types of property for renting and selling as well.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->


	<!-- feature section -->
	<section class="feature-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Featured Listings</h3>
				<p>Browse houses and flats for sale and to rent in your area</p>
			</div>
			<div class="row">
				
					<!-- feature -->

					<?php 
						$query2 = mysqli_query($con, "SELECT * FROM property, images WHERE property.id = images.propertyId ORDER BY property.id LIMIT 5,10");
						if(mysqli_num_rows($query2)>0){
							while($row = mysqli_fetch_array($query2)){
								$date = $row['uploadedOn'];
								$postDate = round((strtotime('now') - strtotime($date))/60/60/24);
								$id= $row['id'];
								echo '
								<div class="col-lg-4 col-md-6">
									<div class="feature-item">
										<div class="feature-pic set-bg" data-setbg="'.$row['filename'].'">
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
														<p><i class="fa fa-bed"></i> '.$row['bedroom'].' Bedroom</p>
													</div>
													<div class="rf-right">
														<p><i class="fa fa-car"></i> 2 Garages</p>
														<p><i class="fa fa-bath"></i> '.$row['bathroom'].' Bathroom</p>
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
											<a href="single-list.php?id='.$id.'" class="room-price">More Details</a>
										</div>
									</div>
								</div>
								';
							}
						}
					
					?>
	
				
			</div>
		</div>
	</section>
	<!-- feature section end -->



	<!-- feature category section -->
	<section class="feature-category-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>LOOKING PROPERTY</h3>
				<p>What kind of property are you looking for? We will help you</p>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 f-cata">
					<a href="">
						<img src="img/feature-cate/1.jpg" alt="">
						<h5>Apartment for rent</h5>
					</a>
					</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<a href="">
						<img src="img/feature-cate/2.jpg" alt="">
						<h5>Family Home</h5>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<a href="">
						<img src="img/feature-cate/3.jpg" alt="">
						<h5>Resort Villas</h5>
					</a>
				</div>
				<div class="col-lg-3 col-md-6 f-cata">
					<a href="">
						<img src="img/feature-cate/4.jpg" alt="">
						<h5>Office Building</h5>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- feature category section end-->


	<!-- Gallery section -->
	<section class="gallery-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h3>Popular Places</h3>
				<p>We understand the value and importance of place</p>
			</div>
			<div class="gallery">
				<div class="grid-sizer"></div>
				<a href="city.php?city=NewYork" class="gallery-item grid-long set-bg" data-setbg="img/gallery/1.jpg">
					<div class="gi-info">
						<h3>New York</h3>
						<p>118 Properties</p>
					</div>
				</a>
				<a href="city.php?city=Florida" class="gallery-item grid-wide set-bg" data-setbg="img/gallery/2.jpg">
					<div class="gi-info">
						<h3>Florida</h3>
						<p>112 Properties</p>
					</div>
				</a>
				<a href="city.php?city=SanJose" class="gallery-item set-bg" data-setbg="img/gallery/3.jpg">
					<div class="gi-info">
						<h3>San Jose</h3>
						<p>72 Properties</p>
					</div>
				</a>
				<a href="city.php?city=StLouis" class="gallery-item set-bg" data-setbg="img/gallery/4.jpg">
					<div class="gi-info">
						<h3>St Louis</h3>
						<p>50 Properties</p>
					</div>
				</a>
				
			</div>
		</div>
	</section>
	<!-- Gallery section end -->



	


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

	<?php include("includes/pageSections/footer.php"); ?>

	