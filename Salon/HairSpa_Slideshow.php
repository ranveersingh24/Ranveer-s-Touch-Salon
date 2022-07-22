<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ranveer's Touch - Beauty Hair Salon</title>
        <link rel = "icon" href = "Salon_Logo.jpg" type = "image/x-icon">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script>
        // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
        
        <style>
            body {
                background-color: black;
            }
        </style>
    </head>

    <body>
        
        <a href="Services_Ranveer's Touch.php" class="btn btn-secondary btn-lg active" data-bs-toggle="tooltip" title="Return to Services Page" role="button" aria-pressed="true">&#8249; Back</a>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
    
        <div class="carousel-item active">
            <img src="hairspa1.jpg" alt="Expert Hair Spa" class="d-block" style="width:100%" height="695">
            <div class="carousel-caption">
            <h3>Expert Hair Spa</h3>
            <p>Hair spa treatments involve the use of essential oils and moisturizing ingredients to promote a healthy and hydrated scalp. 
                Hair masks are packed with hydrating properties that prevent dryness and frizz.</p>
        </div>
        </div>
    
        <div class="carousel-item">
            <img src="hairspa2.jpg" alt="Expert Hair Spa" class="d-block" style="width:100%" height="695">
            <div class="carousel-caption">
            <h3>Expert Hair Spa</h3>
            <p>It aims at balancing the pH levels of your scalp. This is important to promote healthy hair and maintain a 
                healthy scalp. The ingredients used fight dandruff and dandruff-causing microbes as well.</p>
        </div> 
        </div>
    
        <div class="carousel-item">
            <img src="hairspa3.jpg" alt="Expert Hair Spa" class="d-block" style="width:100%" height="695">
            <div class="carousel-caption">
            <h3>Expert Hair Spa</h3>
            <p>Apart from being a feel-good factor, the massages help enhance blood flow to your scalp. This brings nutrients to the follicles
                that makes them firmer and stronger. It can eventually result in voluminous hair as well.</p>
        </div>  
        </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    
    </div>

</body>
</html>
