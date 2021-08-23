<?php 
    include("includes/config.php"); 
    include("includes/pageSections/header.php");
    
    if(isset($_POST["btnLogin"])){
        $email = $_POST["email"];
        $password = $_POST["password"];    
        $queryUser = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

        if(mysqli_num_rows($queryUser) > 0){
            header("Location:index.php");
            $_SESSION['email'] = $email;
            while($row = mysqli_fetch_array($queryUser)){
                $_SESSION['userId'] = $row['id'];
            }
        }
        else{
            echo '  <div class="alert alert-danger" role="alert">
                        Error. Please check your email Id or Password. 
                    </div>';
        }
    }

    
?>


<div class="container">
    <div class="row">
    <form class="form-signin" action="login.php" method="POST">
        
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" name="btnLogin" type="submit">Sign in</button>
        
    </form>
    </div>
</div>



<?php 
    include("includes/pageSections/footer.php");
 ?>