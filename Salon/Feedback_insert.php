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
        $fullName =  $_POST['fullName'];
        $email = $_POST['email'];
        $bookSystem =  $_POST['bookSystem'];
        $visitComfortable = $_POST['visitComfortable'];
        $happyTreat = $_POST['happyTreat'];
        $friRecommend = $_POST['friRecommend'];
        $otherTreat = $_POST['otherTreat'];
        
        // Performing insert query execution
        // here our table name is college
        $qry = "INSERT INTO `feedback`(`fullName`, `email`, `bookSystem`, `visitComfortable`, `happyTreat`, `friRecommend`, `otherTreat`) 
                VALUES ('$fullName','$email','$bookSystem','$visitComfortable','$happyTreat','$friRecommend','$otherTreat')";
                
        $insert = mysqli_query($con,$qry);

        if (!$insert){
            $_SESSION['message'] = 'Form failed to save, Please try again.';
            header("Location:Feedback_Ranveer's Touch.php");  
        }
        else{
            $_SESSION['message'] = 'Form submitted, Thank You.';
            header("Location:Feedback_Ranveer's Touch.php"); 
        }
        
?>
