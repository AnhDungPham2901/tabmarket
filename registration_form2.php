<?php 
    if (!isset($_POST["agree"])) {
        echo "dmm";
    } else {
        echo "thank you ". $_POST["firstname"];
    }
    

?>