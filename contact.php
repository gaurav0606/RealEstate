<?php 
    include("includes/config.php"); 
    include("includes/pageSections/header.php");
 ?>


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg.jpg">
		<div class="container text-white">
			<h2>Contact Us</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href=""><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Contact Us</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			
			<div class="contact-info-warp">
				<p><i class="fa fa-map-marker"></i>401-208 Vasai,Mumbai.</p>
				<p><i class="fa fa-envelope"></i>mauryapraveen454@gmail.com</p>
				<p><i class="fa fa-phone"></i>(+91)7030743262</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="img/contact.jpg" alt="">
				</div>
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Browse houses and flats for sale and to rent in your area</p>
						</div>
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" id="name" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" id="email" placeholder="Your email">
								</div>
								<div class="col-md-12">
									<textarea id="message"  placeholder="Your message"></textarea>
									<button class="btn" onclick="contactSubmit()">SUMMIT NOW</button>	
								</div>
								<p id="msg"></p>
							</div>
						</form>
					</div>
				</div>
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

<script>

	function contactSubmit(){

		var name = $("#name").val();
		var email = $("#email").val();
		var message = $("#message").val();
		if(name != "" && email != "" && message != ""){
			alert("Your message has been sent! You'll be contacted within 24hrs.");
		}
		else{
			alert("Please fill all the details properly.");
		}
	}
</script>


<?php 
	include("includes/pageSections/footer.php");
 ?>