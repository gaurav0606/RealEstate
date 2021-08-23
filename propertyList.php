<?php

    include("includes/config.php");

    $query = mysqli_query($con, "SELECT * FROM `property`,images WHERE property.id = images.propertyId");

    if(mysqli_num_rows($query) > 0){ ?>
        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Area(Sq. Ft.)</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date Added</th>
                            </tr>
                        </thead>
                        <tbody>
       <?php while($row = mysqli_fetch_array($query)){
            echo '                         
                            <tr>
                                <th scope="row">'.$row["id"].'</th>
                                <td>'.$row["name"].'</td>
                                <td>'.$row["location"].'</td>
                                <td>'.$row["area"].'</td>
                                <td>'.$row["price"].'</td>
                                <td>'.$row["uploadedOn"].'</td>
                            </tr>';
        }
    }
    else{
        echo 'There is nothing to show!!';
    }

?>
    </tbody>
</table>