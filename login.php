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
            <a class="navbar-brand" href="login.html">Giriş</a>
      
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
                    <li><a class="dropdown-item" href="#">Trabzon</a></li>
                    <li><a class="dropdown-item" href="#">Miras</a></li>
                    <li><a class="dropdown-item" href="#">Trabzonspor</a></li>
                  </ul>

                </div>

                <a class="nav-link " aria-current="page" href="ozgecmis2.html">Özgeçmiş</a>
                <a class="nav-link " aria-current="page" href="iletisim.html">İletişim</a>


                  
      
              
                
                

              </div>
            </div>
          </div>
    </nav>

    


    <div class="container my-5 p-5 kutu">

        <h4 class="my-5 fw-bold text-center">Giriş</h4>

        <p>
            <?php 
                if($_POST["sifre"]=="g211210066"&&$_POST["kullaniciAd"]=="g211210066@sakarya.edu.tr")
                {
                    echo "Hosgeldiniz ";
                    echo $_POST["sifre"];
                    echo "!";
                }

                else{
                    echo "basarisiz";
                    header("Location: /login.html");exit;
                }

            ?>
        </p>

        


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>