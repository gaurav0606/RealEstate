<?php  

    include("includes/pageSections/header.php");
    session_start();    
    session_destroy();

    echo 'You have been logged out.';

    include("includes/pageSections/footer.php");
?>