<?php  
    include("includes/config.php"); 
    include("includes/pageSections/header.php"); 
    include("includes/Classes/Property.php"); 
    
    if(!isset($_SESSION['userId'])){
        header("Location: login");
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        header("Location: /leramiz");
    }
    
    $property = new Property($con, $id);

    $type = $property->getType();

    if(isset($_POST['btnPay'])){
        $card = $_POST['card'];
        $expire = $_POST['expire'];
        $cvv = $_POST['cvv'];
        $owner =$_POST['owner'];
        $userId = $_SESSION['userId'];

        if($card != "" && $expire != "" && $cvv != "" && $owner != "" && strlen($card) == 16 && strlen($expire) == 5 && strlen($cvv) == 3){
            $insertTracsaction = mysqli_query($con, "INSERT INTO transaction(propertyId, userId) VALUES('$id', '$userId')");
            if($insertTracsaction){
                header("Location: success.php?id=".$id);
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
                    There is some error. Please try again.
                </div>';
            }
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Please fill all the correct details.
            </div>';
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 ">
            <div class="propertyDetails">
                <div class="propertyName">
                    <h4><?php echo $property->getName(); ?></h4>
                    <p><?php echo $property->getLocation(); ?></p>
                </div>
                <div class="metaData">
                    <h5>Property Details</h5><hr>
                    <h6>Bedroom: <?php echo $property->getBedroom(); ?></h6><br>
                    <h6>Bathroom: <?php echo $property->getBathroom(); ?></h6><br>
                    <h6>Area: <?php echo $property->getArea(); ?></h6><br>
                    <h6>Amount: $<?php echo $property->getPrice(); ?></h6><br>
                    <h6>Token Amount Payable: $1000 </h6>
                </div>
            </div>
        </div>
            <div class="col-md-6 ">
                <form action="" method="POST">
                    <div class="card">
                        <h1 class="h3 mb-3 font-weight-normal" style="margin-left: 13px;">Card Details</h1><hr>
                        <div class="col-md-12">
                            <label for="card" class="sr-only">First Name</label>
                            <input type="text" id="card" name="card" class="form-control" placeholder="Card Number" maxlength="16" required autofocus>
                        </div>
                        <div class="row" style="margin-left: 0px; margin-right: 0px;">
                            <div class="col-md-6">
                                <label for="expire" class="sr-only">Expire Date</label>
                                <input type="text" id="expire" name="expire" class="form-control" placeholder="Expire Date" maxlength="5" required autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="cvv" class="sr-only">CVV</label>
                                <input type="password" id="cvv" name="cvv" class="form-control" placeholder="CVV" maxlength="3" required autofocus>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="owner" class="sr-only">Card Owner</label>
                            <input type="text" id="owner" name="owner" class="form-control" placeholder="Card Owner Name" required autofocus>
                        </div>
                        <button class="btn btn-primary payBtn" name="btnPay" id="btnPay">Pay</button>                
                    </div>
                </form>
            </div>
        </div>
</div>


<?php  

include("includes/pageSections/footer.php"); 

?>