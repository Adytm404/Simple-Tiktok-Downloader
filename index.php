<?php
$get = $_GET['id'];

$result = file_get_contents('https://masgimenz.my.id/tiktok/?url='.$get);
$data = json_decode($result);

$vt = $data->aweme_details[0]->author->avatar_medium->url_list[1];
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- MyCSS -->
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    

    <title>Download Video Tiktok Tanpa Watermark</title>
  </head>
  <body>

    <!-- Style -->
    <style type="text/css">
        html, body {
          overflow: hidden;
        }
    </style>
    <!-- End Style -->

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">DownTIK</a>
        <button id="input-button" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
        </div>
    </nav>
  <!-- end navbar -->

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid bg-primary">
    <div class="container">


      <!-- card -->
    <div class="container">

      
          <div class="row justify-content-center">
            <div class="col-lg-7">


              <div class="mx-auto">
                <h2>
                  Download Video Tiktok
                </h2>
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukan Link Tiktok..." id="link">
                <button class="btn btn-success" type="button" id="tombol" >Download</button>
              </div>
            </div>
          
          
          


        </div>
      

    </div>
    

    <!-- end card -->


    </div>
  </div>
  <!-- jumbotron end -->

    
  <!-- Text -->
  <div class="container">
    <div class="card">
      <div class="card-body text1">
        <strong>DownTIK</strong> adalah salah satu TikTok Downloader terbaik yang tersedia online untuk TikTok tanpa tanda air. Anda tidak perlu menginstal perangkat lunak apa pun di komputer atau ponsel Anda, yang Anda butuhkan hanyalah tautan video TikTok, dan semua pemrosesan dilakukan di pihak kami, sehingga Anda dapat unduh video Tik tok dengan sangat cepat ke perangkat Anda dengan satu klik.
      </div>
    </div>
  </div>
  
  <img src="<?=$vt?>">
  


  
  <!-- End Text -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>