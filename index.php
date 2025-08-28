<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="stylesheet" href="style.css">
    <script defer src="java.js"></script>
    <title>Portfolio</title>
</head>
<body>
    <header class="bg-danger d-flex  justify-content-between">
        <div></div>
    <p class="h1 text-center color-success">Portfolio</p>
    <button type="button" class="m-2 btn btn-success text-end" data-bs-toggle="modal" data-bs-target="#myModal">
        Yhteystiedot
      </button>
      
      <!-- The Modal -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
      
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Yhteystiedot</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
      
            <!-- Modal body -->
            <div class="modal-body">
                Puhelin numero: +358 44 2351415<br>
                Email: eero@bertling.fi<br>
                Asuinkaupunki: Tampere, FI
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer">
                <p>Jos haluat tarkempia tietoja laiti minulle viesti</p>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
      
          </div>
        </div>
      </div>
    </header>
    
    <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides">
    <div class="numbertext">1 / 3</div>
    <img src="kuvat/resp.png" style="width:100%" alt="">
    <div class="text">Reseptit</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 3</div>
    <img src="kuvat/kategoria.png" style="width:100%">
    <div class="text">Kategoriat</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 3</div>
    <img src="kuvat/uusiresp.png" style="width:100%">
    <div class="text">Uuden reseptin lomake</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div><br>
<a class="btn btn-warning m-2 text-center" href="http://reseptit.eerber24.treok.io/etusivu">link</a><br>
    <footer>

    </footer>
</body>
</html>