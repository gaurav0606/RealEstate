<?php 
    include("includes/config.php"); 
    include("includes/pageSections/header.php");


    if(isset($_POST['submit']) && isset($_FILES['file'])){

        $errors= array();
        $file_name = $_FILES['file']['name'];
        $file_size =$_FILES['file']['size'];
        $file_tmp =$_FILES['file']['tmp_name'];
        $file_type=$_FILES['file']['type'];
        $value = explode(".",$file_name);
       // $ext = strtolower(array_pop($value));
        
    
        $ext = explode('.',$file_name);
    
        $file_ext=strtolower(end($ext));
    
        $extensions= array("jpeg","jpg","png");
        
        if(!in_array($file_ext,$extensions)){
           $errors[]="Extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }

        $name = $_POST['name'];
        $location = $_POST['location'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        $area = $_POST['area'];
        $bedroom = $_POST['bedroom'];
        $bathroom = $_POST['bathroom'];
        $owner = $_POST['owner'];
        $type= $_POST['type'];
        $city = $_POST['city'];
        $user = $_SESSION['userId'];

        if($name != "" && $location != "" && $desc != "" && $price != "" && $area != "" && $bedroom != "" && $bathroom != "" && $owner != "" && $type != "" && $city != "" && empty($errors))
        {

            if(move_uploaded_file($file_tmp,"img/propertie/".$file_name))
            {
                $path = "img/propertie/";
                $destination = $path.basename($file_name);
                $insertQuery = mysqli_query($con, "INSERT INTO property(name, location, description, price, area, bedroom, bathroom, owner, type, city, user,image) VALUES('$name','$location','$desc','$price','$area','$bedroom','$bathroom','$owner','$type','$city',$user,'$destination')");
                $insertQuery2 = mysqli_query($con, "INSERT INTO propertyHistory(name, location, description, price, area, bedroom, bathroom, owner, type, city, user,image) VALUES('$name','$location','$desc','$price','$area','$bedroom','$bathroom','$owner','$type','$city',$user,'$destination')");
                if($insertQuery && $insertQuery2){
                    echo '<div class="alert alert-success" role="alert">
                        Property has been uploaded. 
                        </div>';
                }
                else{
                    echo '<div class="alert alert-success" role="alert">
                        Could not upload into the database. 
                        </div>';
                }
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
                        Error. Please try again. 
                    </div>';
                echo mysqli_error($con);
            }
        }
        else{
            foreach($errors as $error){
            echo '
                <div class="alert alert-danger" role="alert">
                    '.$error.' 
                </div>';
            }
        }
    }


?>
<div class="mainContainer">
    <div class="formWrapper">
    
        <form action="" method="post" enctype="multipart/form-data" class="uploadPropertyForm">
            <h3 class="formTitle">Property Upload Form</h3>
            <label for="name" class="sr-only">Property Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Property Name" required autofocus>

            <label for="inputEmail" class="sr-only">Property Location</label>
            <input type="text" id="location" name="location" class="form-control" placeholder="Property Location" required>

            <textarea name="description" id="description" class="form-control" cols="30" rows="5" placeholder="Description of Property" required></textarea>

            <input type="text" name="price" class="form-control" placeholder="Price of Property" required>
            
            <input type="text" name="area" class="form-control" placeholder="Area of Property" required>

            <input type="text" name="bedroom" class="form-control" placeholder="No of Bedroom" required>

            <input type="text" name="bathroom" class="form-control" placeholder="No of Bathroom" required>

            <input type="text" name="owner" class="form-control" placeholder="Owner of Property" required>

            <select name="type" id="type" class="form-control" required>
                <option value="apartment">Apartment</option>
                <option value="family">Family</option>
                <option value="resort">Resort</option>
                <option value="office">Office</option>
            </select>
            <select name="city" id="city" class="form-control" required>
                <option value="mumbai">Mumbai</option>
                <option value="delhi">Delhi</option>
                <option value="kolkata">Kolkata</option>
                <option value="bengaluru">Bengaluru</option>
                <option value="chennai">Chennai</option>
                <option value="jaipur">Jaipur</option>
                <option value="pune">Pune</option>
                <option value="mysore">Mysore</option>
                <option value="surat">Surat</option>
                <option value="hyderabad">Hyderabad</option>
                <option value="agra">Agra</option>
                <option value="varanasi">Varanasi</option>
                <option value="udaipur">Udaipur</option>
                <option value="kochi">Kochi</option>
                <option value="ahmedabad">Ahmedabad</option>
                <option value="amritsar">Amritsar</option>
                <option value="srinagar">Srinagar</option>
                <option value="shimla">Shimla</option>
                <option value="patna">Patna</option>
                <option value="indore">Indore</option>
                <option value="vadodara">Vadodara</option>
                <option value="nashik">Nashik</option>
                <option value="nagpur">Nagpur</option>
                <option value="noida">Noida</option>
            </select>

            <label for="file">Select Image Files to Upload:</label> 
            <input type="file" id="file" name="file" class="form-control" required>
            <input type="submit" class="btn btn-primary submit" name="submit" value="UPLOAD" required>
        </form>
    </div>
</div>

<?php include("includes/pageSections/footer.php"); ?>