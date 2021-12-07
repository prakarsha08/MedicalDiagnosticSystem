
<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
     server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "mysql", "info");
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    // Escape user inputs for security
    $name = mysqli_real_escape_string($link, $_REQUEST['name']);
    $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $dob = mysqli_real_escape_string($link, $_REQUEST['dob']);
    $percent = mysqli_real_escape_string($link, $_REQUEST['percent']);
    $doa = mysqli_real_escape_string($link, $_REQUEST['doa']);
    $message = mysqli_real_escape_string($link, $_REQUEST['message']);
    
    // Attempt insert query execution
    //$link1 = "thanks.html"; // Link goes here!
    
    $sql = "INSERT INTO patients (name, phone, email, dob, percent, doa, message) VALUES ('$name', '$phone', '$email', '$dob', '$percent', '$doa', '$message')";
    if(mysqli_query($link, $sql)){
        echo "Thank you for using safebeat. Your request has been subbmitted" ;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    
    // Close connection
    mysqli_close($link);
    ?>
