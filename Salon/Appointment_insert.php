<?php
 
        $host="localhost";
        $user="root";
        $pass="";
        $db="salon";
        
        $con=new mysqli($host,$user,$pass,$db);
        if (!$con)
        {
            echo "Error! Couldn't connect to database";
        }
        
        session_start();
         
        // Taking all 5 values from the form data(input)
        $fullName2 =  $_POST['fullName2'];
        $gender = $_POST['gender'];
        $phoneNum =  $_POST['phoneNum'];
        $email2 = $_POST['email2'];
        $services = $_POST['services'];
        $apDate = $_POST['apDate'];
        $apTime = $_POST['apTime'];
        $a=implode(',',$services);
        
        // Performing insert query execution
        // here our table name is college
        $qry =  "INSERT INTO `appointment`(`fullName2`, `gender`, `phoneNum`, `email2`, `services`, `apDate`, `apTime`) 
                VALUES ('$fullName2','$gender','$phoneNum','$email2','$a','$apDate','$apTime')";
                
        $insert = mysqli_query($con,$qry);

        if (!$insert){
            $_SESSION['message'] = 'Form failed to save, Please try again.';
            header("Location:Appointment_Ranveer's Touch.php");  
        }
        else{
            $_SESSION['message'] = 'Form submitted, Thank You.';
            header("Location:Appointment_Ranveer's Touch.php"); 
        }
        
?>

