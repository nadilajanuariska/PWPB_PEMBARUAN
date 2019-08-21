<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <title>PWPB_1</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#" >REKAYASA PERANGKAT LUNAK</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
                  <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="Firstproject.php">First Project<span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Second Project</a>
                        <a class="nav-item nav-link" href="#">Third Project</a>
                        <a class="nav-item nav-link" href="#">Fourth Project</a>
                      </div>
                    </div>
                  </div>
        </nav>
    <div class="jumbotron">
      <div class="container">
        <center>
      <h1 class="display-4">BIODATA MEMBER</h1>
        <p class="lead"></p>
       </center>
        <hr class="my-4">
      <br>
       <!-- BIODATA MEMBERS -->
        <div class="container">
    <br>
    <br>
    <center>
    <div class="row">
      <div class="col-md-4">
        <p>
          <img src="img/nadila.jpg" width="200px" class="rounded-circle"><br>
          <?php
              $nama1 = "Nadila Januariska";
              $umur1 = 15;
              $tinggibadan1 = 159;
              echo "Nama : $nama1 <br>";
              echo "Umur : $umur1 tahun<br>"; 
              echo "Tinggi badan : $tinggibadan1 cm<br>";
             ?> </p>
        <p><a class="btn btn-secondary" href="#" role="button"> Lihat Selengkapnya&raquo;</a></p>
      </div>
      <div class="col-md-4">
        <p> 
          <img src="img/afifah.jpg" width="200px" class="rounded-circle"><br>
          <?php
              $nama2 = "Afifah Tasya Ananda";
              $umur2 = 16;
              $tinggibadan2 = 159;
              echo "Nama : $nama2 <br>";
              echo "Umur : $umur2 tahun<br>"; 
              echo "Tinggi badan : $tinggibadan2 cm<br>";
             ?>
        </p>
        <p><a class="btn btn-secondary" href="#" role="button">Lihat Selengkapnya &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <p>
        <img src="img/suci.jpg" width="200px" class="rounded-circle"><br>
          <?php
              $nama3 = "Suci Amalia";
              $umur3 = 17;
              $tinggibadan3 = 165;
              echo "Nama : $nama3 <br>";
              echo "Umur : $umur3 tahun<br>"; 
              echo "Tinggi badan : $tinggibadan3 cm<br>";
             ?>
        </p>
        <p><a class="btn btn-secondary" href="#" role="button" >Lihat Selengkapnya &raquo;</a></p>
      </div>
    </div>
    </center>
  </div>
     </div>
        <hr class="my-4">
          <center><a class="btn btn-primary btn-lg" href="#" role="button">Lihat Selengkapnya</a></center>
        </div>
    <p>
    <center>
    <?php
      $tinggibadan1 = 161;
      $tinggibadan2 = 159;
      $tinggibadan3 = 165;
      $rata= ($tinggibadan1 + $tinggibadan2 + $tinggibadan3)/3;
      $rata_format = number_format ($rata);
      echo "Rata rata : $rata_format";
      ?>
    </center>
    </p>
     <!--PENUTUP MEMBERS-->
  <footer class="container">
    <p class="float-right"><a href="index.php">Back to Home</a></p>
    <center><p>&copy;2019 Company</p></center>
  </footer>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>