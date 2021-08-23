<?php  
    include("includes/config.php"); 
    include("includes/pageSections/header.php"); 

    if(!isset($_SESSION['userId'])){
        header("Location: /leramiz");
    }
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		$query = mysqli_query($con,"DELETE FROM property WHERE id='$id'");

	}
	else{
		header("Location: /leramiz");
	}
	

?>

<div class="container">
    <div class="successMsg">
        <div class="alert alert-success" role="alert">
            You have succesfully paid the token amount for further payment contact our agents.
        </div>
    </div>
</div>

<section class="properties-section spad" id="recent">
		<div class="container">
			<div class="section-title text-center">
				<h3>Similar Properties</h3>
				<hr>
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

<?php  

    include("includes/pageSections/footer.php");    

?>