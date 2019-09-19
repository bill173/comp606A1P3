<?php

$firstname = $_POST['firstname'];
$motivation = $_POST['motivation'];
$surname = $_POST['surname'];
$typeofmassage = $_POST['typeofmassage'];
$gender = $_POST['gender'];
$dateofbirth = $_POST['dateofbirth'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$address = $_POST['address'];
$expecteddate = $_POST['expecteddate'];
$city = $_POST['city'];
$timeslot = $_POST['timeslot'];


    if(!empty ($firstname) || !empty ($motivation) || !empty ($surname) || !empty ($typeofmassage) || 
    !empty ($gender) || !empty ($dateofbirth) || !empty ($phonenumber) || !empty ($email) || 
    !empty ($address) || !empty ($expecteddate) || !empty ($city) || !empty ($timeslot)){
        $host = "localhost";
        $dbUsername = "root";
        $dbpassword = "";
        $dbname = "booking";

        //connection

        $conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
        if(mysqli_connect_error()){
            die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
        else{
            $SELECT = "SELECT expecteddate From customer Where timeslot = ? Limit 1";
            $INSERT = "INSERT Into customer (firstname, motivation, surname, typeofmassage, gender
            , dateofbirth, phonenumber, email, address, expecteddate, city, timeslot
            ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

                //prepare statement
                $pst = $conn->prepare($SELECT);
                $pst->bind_param("s", $expecteddate);
                $pst->execute();
                $pst->bind_result($expecteddate);
                $pst->store_result();
                $rnum = $pst->num_rows;
            
                if($rnum == 0){
                    $pst->close();
                    $pst = $conn->prepare($INSERT);
                    $pst->bind_param("ssssssssssss", $firstname, $motivation, $surname, $typeofmassage, $gender
                    , $dateofbirth, $phonenumber, $email, $address, $expecteddate, $city, $timeslot);
                    $pst->execute();

                    echo "Your Booking is Confirmed!";
                }
                else{
                    echo "This Time is Booked up!";
                }
                $pst->close();
                $conn->close();
        }
    }
    else{
        echo "Fields Are Required";
die();
    }

?>