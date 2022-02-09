<?php
$get = $_GET['id'];

$result = file_get_contents('https://masgimenz.my.id/tiktok/?url='.$get);
$data = json_decode($result);

$profile = $data->aweme_details[0]->video->origin_cover->url_list[1];
$desc = $data->aweme_details[0]->desc;
$name = $data->aweme_details[0]->music->owner_nickname;
$dw1 = $data->aweme_details[0]->video->bit_rate[0]->play_addr->url_list[0];
$dw2 = $data->aweme_details[0]->video->play_addr->url_list[0];

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <!-- MyCSS -->
    <link rel="stylesheet" href="style.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    

    <title>Hello, world!</title>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
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
                  Download Video Tiktok Tanpa Watermark
                </h2>
              </div>
              
              
            </div>
          
          
          


        </div>
      

    </div>
    

    <!-- end card -->


    </div>
  </div>
  <!-- jumbotron end -->

  <div class="jumbotron jumbotron-fluid bg-white jumbotron2">
    <div class="container">

  <!-- Card -->
  <div class="container">
    <div class="row justify-content-center data">
      <div class="card" style="width: 18rem;">
        <!--<img class="card-img-top" src="<?=$profile?>" alt="Card image cap">-->
        <div class="card-body">
          <h5 class="card-title"><?=$name?></h5>
          <p class="card-text"><?=$desc?></p>
          <center>
          <a href="<?=$dw1?>" type="button" class="btn btn-primary btn-sm btn-link">Download 1</a>
          <a href="<?=$dw2?>" type="button" class="btn btn-secondary btn-sm btn-link">Download 2</a>
          </center>
          
          
          
        </div>
      </div>
    
      </div>
      <center>
      <a href="index.php" type="button" class="btn btn-success">Download Lainnya</a>
      </center>
    </div>
    
  </div>
  
  <!-- End Card -->
  
  
  
</div>
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>