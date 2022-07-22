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
            <img src="aroma1.jpg" alt="Aroma Therapy" class="d-block" style="width:100%" height="695">
            <div class="carousel-caption">
            <h3>Aroma Therapy</h3>
            <p>The therapy is scientifically proven to reduce stress. It calms the nervous system, 
            lowering blood pressure, heart rate, and rewires brain waves to help you become more relaxed.</p>
        </div>
        </div>
    
        <div class="carousel-item">
            <img src="aroma2.jpg" alt="Aroma Therapy" class="d-block" style="width:100%" height="695">
            <div class="carousel-caption">
            <h3>Aroma Therapy</h3>
            <p>Clients reported less pain and depression, and results confirmed that massage with this 
            therapy has stronger healing power when it comes to pain and depression management compared to massage alone.</p>
        </div> 
        </div>
    
        <div class="carousel-item">
            <img src="aroma3.jpg" alt="Aroma Therapy" class="d-block" style="width:100%" height="695">
            <div class="carousel-caption">
            <h3>Aroma Therapy</h3>
            <p>The therapy has a greater positive impact compared to placebos or control treatments, when it comes to decreasing
            pain – specifically, gynecological, postoperative and obstetrical pain.</p>
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
