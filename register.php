<?php 
    include("includes/config.php"); 
    include("includes/pageSections/header.php");
    
    if(isset($_POST["btnReg"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $city = $_POST["city"];
        $contact = $_POST["contact"];

        if($fname != "" && $lname != "" && $email != "" && $password != "" && $city != "" && $contact != "" && $cpassword != "" && $password == $cpassword){
            $query = mysqli_query($con,"INSERT INTO users(firstName, lastName, contact, email, city, password) VALUES ('$fname','$lname','$contact','$email','$city','$password')");
            if($query){
                echo '<div class="alert alert-success" role="alert">
                    You have succesfully registered. Now you can <a href="login.php">login</a>
                </div>';
            }
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            There is some error. Please try again.
            </div>';
        }
        

    }

    
?>


<div class="container">
    <div class="row">
        <form class="form-signup" action="register.php" method="POST">
            
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="fname" class="sr-only">First Name</label>
            <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name" required autofocus>
            <label for="lname" class="sr-only">Last Name</label>
            <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name" required>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
            <label for="contact" class="sr-only">Contact</label>
            <input type="text" id="contact" name="contact" class="form-control" placeholder="Contact" maxlength="10" required>
            <label for="city" class="sr-only">City</label>
            <input type="text" id="city" name="city" class="form-control" placeholder="City" required>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Confirm Password</label>
            <input type="password" id="inputPassword" name="cpassword" class="form-control" placeholder="Confirm Password" required>
            
            <button class="btn btn-lg btn-primary btn-block" name="btnReg" type="submit">Sign up</button>
            
        </form>
    </div>
</div>



<?php 
    include("includes/pageSections/footer.php");
 ?>