<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
    <style>
   
    </style>
  </head>
  <body style="background-image:url('https://www.amtrak.com/content/dam/projects/dotcom/english/public/images/heros/Route_MichiganServices_HeroBanner_5.jpg/_jcr_content/renditions/cq5dam.web.2125.1195.jpeg');background-repeat:no-repeat;background-size:cover;overflow:hidden;z-index:0;">
   <div class="container">
   <div class="row justify-content-center">
   <div class="p-5 shadow m-5 w-50 h-50" style="background-color:rgba(255,255,255,0.5);">
  <center> <img class="img-responsive" height="40" src="http://www.detroitphoenixcenter.org/images/layer%200.png?crc=3873543260"><br><br>
  <h5>Administrative login</h5></center>
  <?php   if(isset($_GET['login']) && $_GET['login'] == 'failure'){ ?>
      <div class="alert alert-danger" role="alert">
        Invalid  Username or Password.
      </div>
  <?php } ?>
  <form action="alogin.php" method="POST">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1">@</span>
  </div>
  <input type="text" class="form-control" required name="usr" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>
   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  </div>
  <input type="password" name="pwd" required class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
</div>
    <!-- <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div> -->
    <button type="submit" name="alogin" class="btn btn-primary">Submit</button>
  </form>
  </div>
  </div>
</div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
