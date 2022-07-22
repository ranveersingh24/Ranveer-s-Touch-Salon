
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
    <title>Admin Contact Details</title>    
    </head>
    
    <body style="margin:50px;">
        <a class="btn btn-secondary btn-lg" href="adminMain.php" role="button">Back</a><br><br>
        <h1>Contact Form Details</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr> 
            </thead>
            
            <tbody>
                <?php
                 include_once('dbconnect.php');
                 
                $sql = "SELECT * FROM contact;";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result))
                    {
                       echo "<tr>
                           <td>" . $row["id"] . "</td>
                           <td>"  . $row["fullName2"] . "</td>
                           <td>"  . $row["phoneNum"] . "</td>
                           <td>"  . $row["email2"] . "</td>
                           <td>"  . $row["message"] . "</td>
                           <td>
                               <a class ='btn-danger btn-sm' href='delete.php?id=$row[id]'> Delete </a>
                           </td>
                       </tr>";
                    }
                 ?>
            </tbody>

        </table> 
    </body>
</html>