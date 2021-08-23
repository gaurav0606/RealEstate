<?php 

    include("includes/config.php"); 
    include("includes/pageSections/header.php");

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 navigation">
            <div class="navbar">
                <ul>
                    <a href=""><li>Dashboard</li></a>
                    <a href="#users" id="users"><li id="users">Registered Users</li></a>
                    <a href="#property" id="property"><li id="property">Properties</li></a>
                    <a href="#orders" id="orders"><li id="orders" >Orders</li></a>
                </ul>
            </div>
        </div>
        <div class="col-md-8 dashWrapper" id="dashWrapper">
            <div class="row">
                <div class="col-md-4 totalCards users"><h4>Users</h4>
                    <?php 
                    
                        $queryUser = mysqli_query($con,"SELECT count(*) FROM users");
                        if(mysqli_num_rows($queryUser) > 0){
                            while($row = mysqli_fetch_array($queryUser)){
                                echo '
                                
                                    <div class="data">
                                        <h3>'.$row['0'].'</h3>
                                    </div>
                                
                                '; 
                            }
                        }
                    
                    ?>
                    
                </div>
                <div class="col-md-4 totalCards property"><h4>Properties</h4>
                    <?php 
                        
                        $queryProperty = mysqli_query($con,"SELECT count(*) FROM property");
                        if(mysqli_num_rows($queryProperty) > 0){
                            while($row = mysqli_fetch_array($queryProperty)){
                                echo '
                                
                                    <div class="data">
                                        <h3>'.$row['0'].'</h3>
                                    </div>
                                
                                '; 
                            }
                        }
                    
                    ?>
                </div>
                <div class="col-md-4 totalCards orders"><h4>Orders</h4>
                    <?php 
                        
                        $queryOrder = mysqli_query($con,"SELECT count(*) FROM `transaction`");
                        if(mysqli_num_rows($queryOrder) > 0){
                            while($row = mysqli_fetch_array($queryOrder)){
                                echo '
                                
                                    <div class="data">
                                        <h3>'.$row['0'].'</h3>
                                    </div>
                                
                                '; 
                            }
                        }
                    
                    ?>
                </div>
            </div>
        </div> 
    </div>
</div>


<script>

$(document).ready(function(){
    $("#orders").click(function(){
        $("#dashWrapper").load("orderList.php");
    });
    $(".col-md-4.totalCards.orders").click(function(){
        $("#dashWrapper").load("orderList.php");
    });
    $("#users").click(function(){
        $("#dashWrapper").load("userList.php");
    });
    $(".col-md-4.totalCards.users").click(function(){
        $("#dashWrapper").load("userList.php");
    });
    $("#property").click(function(){
        $("#dashWrapper").load("propertyList.php");
    });
    $(".col-md-4.totalCards.property").click(function(){
        $("#dashWrapper").load("propertyList.php");
    });
});


</script>

<?php include("includes/pageSections/footer.php");  ?>