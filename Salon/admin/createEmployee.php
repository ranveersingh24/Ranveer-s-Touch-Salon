<?php

include_once('dbconnect.php');

$username = "";
$password = "";        
$roles = "";

$errorMessage = "";
$successMessage =  "";      

if ($_SERVER['REQUEST_METHOD']== 'POST')
{    
$username = $_POST['username'];
$password = $_POST['password'];
$roles = $_POST['roles'];

    do{
        if (empty($username) || empty($password) || empty($roles)){
            $errorMessage = "All the fields are required";
            break;
        }
        
        // add new client to database
        
        $qry = "INSERT INTO 'employee'('username', 'password', 'roles') VALUES ('$username','$password','$roles')";
        $insert = mysqli_query($con,$qry);
        
        $username = "";
        $password = "";        
        $roles = "";
        
        
        $successMessage = "Employee added correctly";
        
        header("location:adminEmployee.php");
        exit;
        
        
    } while (false);
}


?>

<!doctype html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="styleAdmin.css" rel="stylesheet" type="text/css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Admin - Creating New Employee Details</title>    
    </head>

        <div class="container my-5">
            <h1>New Employee</h1><br>
        
        <?php
        if (!empty($errorMessage)){
            echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
        
        ?>
        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
                </div> 
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
                </div> 
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Roles</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name="roles" value="<?php echo $roles; ?>">
                </div> 
            </div> 
                
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div><br>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="adminEmployee.php" role="button">Cancel</a>
                </div>
            </div>
            <?php
            if (!empty($successMessage)){
            echo " 
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>$successMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                        </div>
                </div   
            ";
            }
            ?>
            
        </form>
    </body>
</html>
