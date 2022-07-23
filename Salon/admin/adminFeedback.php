
<!doctype html>
<html>
    
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "icon" href = "../Salon_Logo.jpg" type = "image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="styleAdmin.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <title>Admin Feedback Details</title>    
    </head>
    
    <body style="margin:50px;">
        <a class="btn btn-secondary btn-lg" href="adminMain.php" role="button">Back</a><br><br>
        <h1>Feedback Form Details</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>How was our appointment booking system?</th>
                    <th>How comfortable did we make you feel during your visit?</th>
                    <th>How happy were you with your treatment(s) you received?</th>
                    <th>Would you recommend us to a friend?</th>
                    <th>What other treatments would you like to see on our treatment menu?</th>
                    <th>Action</th>
                </tr> 
            </thead>
            
            <tbody>
                <?php
                 include_once('dbconnect.php');
                 
                $sql = "SELECT * FROM feedback;";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result))
                    {
                       echo "<tr>
                           <td>" . $row["id"] . "</td>
                           <td>"  . $row["fullName"] . "</td>
                           <td>"  . $row["email"] . "</td>
                           <td>"  . $row["bookSystem"] . "</td>
                           <td>"  . $row["visitComfortable"] . "</td>
                           <td>"  . $row["happyTreat"] . "</td>
                           <td>"  . $row["friRecommend"] . "</td>
                           <td>"  . $row["otherTreat"] . "</td>
                           <td>
                               <a class ='btn-danger btn-sm' href='deleteFeedback.php?id=$row[id]'> Delete </a>
                           </td>
                       </tr>";
                    }
                 ?>
            </tbody>

        </table> 
    </body>
</html>
