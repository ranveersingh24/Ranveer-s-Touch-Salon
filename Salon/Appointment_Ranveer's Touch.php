<!DOCTYPE html>
<html>
    <head>
        <title>Ranveer's Touch - Beauty Hair Salon</title>
        <link rel = "icon" href = "Salon_Logo.jpg" type = "image/x-icon">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS_Salon.css" rel="stylesheet" type="text/css"/>
    </head>
    
    <body>
    <!-- Navigation menu -->
    <ul class="navbar">
        <li><a href="BeautyHairSalon.php">Home</a>
        <li><a href="Services_Ranveer's Touch.php">Services</a>
        <li><a class="active" href="Appointment_Ranveer's Touch.php">Appointment</a>
        <li><a href="Feedback_Ranveer's Touch.php">Feedback</a>
        <li><a href="About_Ranveer's Touch.php">About</a>
        <li><a href="Contact_Ranveer's Touch.php">Contact</a>
        <li><a href="admin/login-page.php">Admin</a>    
    </ul>
    
    <!-- Title -->
    <section id="title" class="title-section">
    <table class="title" id="title_types">
    <tr>
        <th><img src="Salon_Logo.jpg" height="250" alt="Logo of Ranveer's Touch" /></th>
        <td><h1>Ranveer's Touch - Beauty Hair Salon</h1></td>
        <td><img src="Salon_Logo2.jpg" height="250" alt="Logo of Ranveer's Touch" /></td>
    </tr>
    </table>
    </section>
    
    <!-- Appointment -->
    <section id="appointment" class="appointment-section">
    <h1>Appointment</h1>
    <form action="Appointment_insert.php" method="POST">
        <div class="container"> 
        <label for="fullName2">Your Name</label> <br>
        <input type="text" name="fullName2" placeholder="Ranveer" required><br><br>
        
        <label for="gender">Your Gender</label> <br>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="female">Female<br><br>
        
        <label for="phoneNum">Your Phone Number</label> <br>
        <input type="text" name="phoneNum" placeholder="0123456789" required minlength="8" maxlength="10"><br><br>
        
        <label for="email2">Your Gmail</label> <br>
        <input type="text" name="email2" placeholder="ranveer@gmail.com" pattern=".+@gmail\.com" required><br><br>

        <label for="gender">Services Interested</label> <br>
        <input type="checkbox" name="services[]" value="Aroma Therapy">Aroma Therapy (MYR 8.54 for 20 minutes)<br>
        <input type="checkbox" name="services[]" value="Body Spa">Body Spa (MYR 50.73 for 30 minutes)<br>
        <input type="checkbox" name="services[]" value="Expert Hair Spa">Expert Hair Spa (MYR 20.00 for 20 minutes)<br>
        <input type="checkbox" name="services[]" value="Massage">Massage (MYR 70.50 for 1 hour)<br>
        <input type="checkbox" name="services[]" value="Manicure">Manicure (MYR 20.00 for 20 minutes)<br>
        <input type="checkbox" name="services[]" value="Wedding Makeup">Wedding Makeup (MYR 45.00 for 1 hour)<br><br>
        
        <label for="apDate">Appointment Date</label> <br>
        <input type="date" id="apDate" name="apDate" required><br><br>
        
        <label for="apTime">Appointment Time</label> <br>
        <input type="time" id="apTime" name="apTime" required><br><br>

        </div>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
        <br><br>
        <?php session_start();
                        if(isset($_SESSION['message']) && $_SESSION['message'] != ''){
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);}
        ?>
    </form>
    </section>
    
    <br>
    <br>
    <br>
    <br>
    
    <!-- Footer -->
    <section id="footer" class="footer-section">
    <footer>
        <p>Ranveer's Touch - Beauty Hair Salon</p>
        <p>Facebook: Ranveers Touch</p>
        <p>Instagram: Salon_Ranveers_Touch</p>
        <p>Twitter: Ranveers Touch</p>
    </footer>
    </section>
        
    </body>
</html>
