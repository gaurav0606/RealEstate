<?php

    include("includes/config.php");

    $query = mysqli_query($con, "SELECT * FROM `users`");

    if(mysqli_num_rows($query) > 0){ ?>
        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Email</th>
                                <th scope="col">City</th>
                            </tr>
                        </thead>
                        <tbody>
       <?php while($row = mysqli_fetch_array($query)){
            echo '                         
                            <tr>
                                <th scope="row">'.$row["id"].'</th>
                                <td>'.$row["firstName"].'</td>
                                <td>'.$row["lastName"].'</td>
                                <td>'.$row["contact"].'</td>
                                <td>'.$row["email"].'</td>
                                <td>'.$row["city"].'</td>
                            </tr>';
        }
    }
    else{
        echo 'There is nothing to show!!';
    }

?>
    </tbody>
</table>