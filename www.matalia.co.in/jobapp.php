<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$job_role= $_POST['job_role'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$date = $_POST['date'];


    $conn = new mysqli('localhost','root','','job');
	if($conn->connect_error){
    	echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("INSERT INTO application(first_name,last_name,email,service,address,city,pincode,date) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $first_name,$last_name,$email,$service,$address,$city,$pincode,$date);
        $execval = $stmt->execute();
        echo $execval;
        echo "<script> alert('Successfull') </script>";
                    
        $stmt->close();
        $conn->close();
    }
?>