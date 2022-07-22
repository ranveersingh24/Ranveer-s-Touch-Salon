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
        <li><a href="Appointment_Ranveer's Touch.php">Appointment</a>
        <li><a class="active" href="Feedback_Ranveer's Touch.php">Feedback</a>
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
    
    <!-- Feedback -->
    <section id="feedback" class="feedback-section">
    <h1>Feedback</h1>
    <form action="Feedback_insert.php" method="POST">
        <div class="container"> 
        <label for="fullName">Your Name</label> <br>
        <input type="text" name="fullName" placeholder="Ranveer" required><br><br>

        <label for="email">Your Gmail</label> <br>
        <input type="text" name="email" placeholder="ranveer@gmail.com" required pattern=".+@gmail\.com"><br><br>

        <label for="bookSystem">How was our appointment booking system?</label>
        <br><select id="bookSystem" name="bookSystem" required>
            <option value="None">None</option>
            <option value="Very Satisfied">Very Satisfied</option>
            <option value="Satisfied">Satisfied</option>
            <option value="Neutral">Neutral</option>
            <option value="Unsatisfied">Unsatisfied</option>
            <option value="Very Unsatisfied">Very Unsatisfied</option>
        </select><br><br>
        
        <label for="visitComfortable">How comfortable did we make you feel during your visit?</label>
        <br><select id="visitComfortable" name="visitComfortable" required>
            <option value="None">None</option>
            <option value="Very Satisfied">Very Satisfied</option>
            <option value="Satisfied">Satisfied</option>
            <option value="Neutral">Neutral</option>
            <option value="Unsatisfied">Unsatisfied</option>
            <option value="Very Unsatisfied">Very Unsatisfied</option>
        </select><br><br>
        
        <label for="happyTreat">How happy were you with your treatment(s) you received?</label>
        <br><select id="happyTreat" name="happyTreat" required>
            <option value="None">None</option>
            <option value="Very Satisfied">Very Satisfied</option>
            <option value="Satisfied">Satisfied</option>
            <option value="Neutral">Neutral</option>
            <option value="Unsatisfied">Unsatisfied</option>
            <option value="Very Unsatisfied">Very Unsatisfied</option>
        </select><br><br>
        
        <label for="friRecommend">Would you recommend us to a friend?</label> <br>
        <input type="radio" name="friRecommend" value="yes">Yes<br>
        <input type="radio" name="friRecommend" value="no">No<br><br>
        
        <label for="otherTreat">What other treatments would you like to see on our treatment menu?</label> <br>
        <textarea name="otherTreat" placeholder="Enter your comments here" cols="40" rows="2" maxlength="200" required></textarea><br><br>
        
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
        </div>
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
