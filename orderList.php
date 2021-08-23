<?php

    include("includes/config.php");

    $query = mysqli_query($con, "SELECT * FROM `transaction`");

    if(mysqli_num_rows($query) > 0){ ?>
        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">User Id</th>
                                <th scope="col">Property Id Id</th>
                                <th scope="col">Purchase Date</th>
                            </tr>
                        </thead>
                        <tbody>
       <?php while($row = mysqli_fetch_array($query)){
            echo '                         
                            <tr>
                                <th scope="row">'.$row["id"].'</th>
                                <td>'.$row["userId"].'</td>
                                <td>'.$row["propertyId"].'</td>
                            </tr>';
        }
    }
    else{
        echo 'There is nothing to show!!';
    }

?>
    </tbody>
</table>