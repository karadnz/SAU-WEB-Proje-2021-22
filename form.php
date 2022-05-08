<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="sehircss.css">
    <link rel="stylesheet" href="form.css">
    
    
    
</head>
<body>
    
    <img class="img-fluid" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Sumela_From_Across_Valley.JPG/1920px-Sumela_From_Across_Valley.JPG"
        alt="" >


    <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
          <div class="container justify-content-end">
            <a class="navbar-brand" href="#">Yer tutucu</a>
      
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      
              <span class="navbar-toggler-icon"></span>
          
            </button>
      
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">

                <a class="nav-link active" aria-current="page" href="hakkinda.html">Hakkinda</a>

                <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="mirasDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Şehirim
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="mirasDropdown">
                    <li><a class="dropdown-item" href="trabzon.html">Trabzon</a></li>
                    <li><a class="dropdown-item" href="miras.html">Miras</a></li>
                    <li><a class="dropdown-item" href="#">Trabzonspor</a></li>
                  </ul>

                </div>

                <a class="nav-link " aria-current="page" href="ozgecmis2.html">Özgeçmiş</a>
                <a class="nav-link " aria-current="page" href="iletisim.html">İletişim</a>


                  
      
              
                
                

              </div>
            </div>
          </div>
    </nav>

    <div class="container my-5 formPHP">


    <h4 class="my-5 fw-bold text-center">Form Bilgileri:</h4>

        <ul>
            <li>
                <p class="fw-bold text-decoration-underline">İsim:</p>
                <p> <?php echo $_GET["isim"]?> </p>

            </li>

            <li>
                <p class="fw-bold text-decoration-underline">E-mail:</p>
                <p><?php echo $_GET["email"]?></p>

            </li>

            <li>
                <p class="fw-bold text-decoration-underline">Şehiriniz:</p>
                <p><?php echo $_GET["sehir"]?></p>

            </li>

            <li>
                <p class="fw-bold text-decoration-underline">Adresiniz:</p>
                <p><?php echo $_GET["adres"]?></p>

            </li>

            <li>
                <p class="fw-bold text-decoration-underline">Yaşınız:</p>
                <p><?php echo $_GET["yas"]?></p>

            </li>

            <li>
                <p class="fw-bold text-decoration-underline">Mesajınız:</p>
                <p><?php echo $_GET["msj"]?></p>

            </li>

            <li>
                <p class="fw-bold text-decoration-underline">E-Posta bültenine katılmayı:</p>
                <p><?php 
                    if(isset($_GET["bulten"])){echo "kabul ettiniz";}
                    else{echo "kabul etmediniz";}
                
                
                ?></p>

            </li>

            

        </ul>

        <?php
            echo "<h2>Your Input:</h2>";
            echo $_GET["isim"];
            echo "<br>";
            echo $_GET["email"];
            echo "<br>";
            echo $_GET["msj"];
            echo "<br>";
            echo $_GET["yas"];
            echo "<br>";
            echo $_GET["sehir"];
        ?>

        
    </div>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>