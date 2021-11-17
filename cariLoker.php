<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <?php
  // define empty value variables
  $floor = "";
  $loker = "";
  $found = "";
  ?>

<section class="container">
  <div class="card my-4">
    <div class="container">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row my-2">
        <div class="col-lg-2">
          Jumlah Lantai
        </div>
        <div class="col-lg-5">
          <input type="text" class="form-control" name="floor" required>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-lg-2">
          Nomor Loker
        </div>
        <div class="col-lg-5">
          <input type="text" class="form-control" name="loker" required>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-lg-7">
          <button type="submit" name="submit" class="btn btn-primary float-right"> Cari </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</section>

<section class="container">
  <div class="card my-2">
    <div class="my-2 mx-4">
      <?php
      if(isset($_POST['submit'])){
        $floor = $_POST['floor'];
        $loker = $_POST['loker'];
        cariLoker($floor, $loker);
      }

      function cariLoker($floor, $loker){
        $pattern = 5;
        $counter = 1;
        for($a=1; $a<=$floor; $a++){
          echo "Lantai ".$a." : ";
          for($i=0; $i < $pattern ; $i++){
            $cab = $counter + $i;
            echo " ".$cab." ";
            if($loker == $cab){
              $found = $a;
            }
          }
          $counter = $cab + 1;
          if($pattern<7){
            $pattern++;
          }else{
            $pattern = 5;
          }
          echo "<br>";
        }
        if(isset($found)){
          echo "<br> Loker ".$loker." ada di lantai : ".$found;
        }else{
          echo "<br> Nomor loker ".$loker." tidak dapat ditemukan pada lantai yg tersedia";
        }

      }
      ?>

    </div>
  </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
