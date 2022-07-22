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
        $phoneNum = $_POST['phoneNum'];
        $email2 =  $_POST['email2'];
        $message = $_POST['message'];
        
        // Performing insert query execution
        // here our table name is college
        $qry = "INSERT INTO `contact`(`fullName2`, `phoneNum`, `email2`, `message`) VALUES ('$fullName2','$phoneNum','$email2','$message')";
        
        $insert = mysqli_query($con,$qry);

        if (!$insert){
            $_SESSION['message'] = 'Form failed to save, Please try again.';
            header("Location:Contact_Ranveer's Touch.php");  
        }
        else{
            $_SESSION['message'] = 'Form submitted, Thank You.';
            header("Location:Contact_Ranveer's Touch.php"); 
        }
        
        ?>
