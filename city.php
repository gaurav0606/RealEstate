<?php 

include("includes/config.php"); 
include("includes/pageSections/header.php"); 

if(isset($_GET['city'])){
    $city = $_GET['city'];

    echo $city;
}


include("includes/pageSections/footer.php"); 
?>