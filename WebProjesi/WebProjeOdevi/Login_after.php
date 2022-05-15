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
    <link rel="stylesheet" href="css/style_Login.css">
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
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
                            <a class="nav-link" href="iletisim.html">İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Login.html">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    
<?php 

        include("kullanicilar.php");


        if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
        {
           $_SESSION["login"] = "true";
           $_SESSION["user"] = $user;
           $_SESSION["pass"] = $pass;
    
           echo("SİTEYE GİRİŞ YAPTINIZ HOŞGELDİNİZ !!");
    
        }
    
        else 
        {
                echo "Kullancı Adı veya Şifre Yanlış.<br>";
                echo "!!!TEKRAR DENEYİN!!!";
                header("Refresh: 1; url=Login.html");
        }
    
    ?>
    </div>

     <footer class="bg-dark text-white p-3 text-center mt-0">
        @powered by Eren
    </footer>
</body>

</html>