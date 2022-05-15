<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eren Kara'nın Sitesi</title>
    <link rel="icon" href="images/Logo.png" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link rel="stylesheet" href="css/style_iletisim.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <script src="js/javascript.js"></script>

</head>

<body>
    <div class="containerr">
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><b>Eren Kara</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.html">Hakkımda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="CV.html">CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Sehrim.html">Şehrim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Mirasimiz.html">Mirasımız</a>
                        </li>
                        <li class="nav-item bosluk">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="iletisim.html">İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Login.html">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
       
        
        <div class="formm">
            <p>
            <?php
               
                echo( "İsimi: ".$_POST['isim']."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."Soyisimi: ".$_POST['soyisim']."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."yasi: ".$_POST['yas']);
                echo ("<br>" . "İli: ".$_POST['il']."&nbsp;"."&nbsp;"."&nbsp;"."&nbsp;"."İlçesi: ".$_POST['ilce']);
                echo ("<br>". "Cinsiyeti: ".$_POST['gridRadios']);
                echo ("<br>". "Yazdıkları: ".$_POST['textarea']);
                
            ?>
            </p>
        </div>
        
        
        
    </div>


    <footer class="bg-dark text-white p-3 text-center mt-0">
        @powered by Eren
    </footer>
</body>

</html>