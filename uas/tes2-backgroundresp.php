<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
        
        <style>
            #gambar1 {
                max-width: 13rem;
                background-color: #032547;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                text-align: center;
                border: none;
            }
            #gambar2 {
                max-width: 13rem;
                background-color: #032547;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                text-align: center;
                border: none;
            }

            #gambar3 {
                max-width: 13rem;
                background-color: #032547;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                text-align: center;
                border: none;
            }

            #gambar4 {
                max-width: 13rem;
                background-color: #032547;
                border-radius: 10px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                text-align: center;
                border: none;
            }

            .card-body {
                background-color: #01172e;
                text-align: center;
                color: white;
                font-family: Helvetica;
                border-radius: 0 0 10px 10px;
            }

            #logo1 {
                margin: auto;
                transition: 0.5s;
            }

            #logo2 {
                margin: auto;
                transition: 0.5s;
            }

            #logo3 {
                margin: auto;
                transition: 0.5s;
            }

            #logo4 {
                margin: auto;
                transition: 0.5s;
            }

            #logo1:hover,
            #logo2:hover,
            #logo3:hover,
            #logo4:hover {
                opacity: 0.8;
            }

            a {
                text-decoration: none;
                cursor: pointer;
                
            }

            body {
                background-color: white;
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-position: center;
            }

            h3 {
                color: white;
                font-family: 'Roboto', sans-serif;
            }

            /* .con-menu {
                background-color: rgba(3, 3, 14, 0.9);
                width: 100%;
                height: 290px;
                margin-top: 20px;
                padding-top: 30px;
                border-radius: 10px;
            } */
            /* .container-menu {
                width: 700px;
                left: 50%;
                transform: translateX(45%);
                margin: -20px 0 0 150px;
            } */

            .container-menu {
                width: 700px;
                left: 50%;
                transform: translateX(-50%);
                margin-bottom: 50px;
                margin-top: 20px;
                position: absolute;
            }

            .container-berita {
                width: 700px;
                left: 50%;
                transform: translate(-50%);
                margin-top: 350px;
                margin-bottom: 50px;
                position: absolute;
            }

            .welcome {
                margin-top: 200px;
                text-align: center;
                color: white;
                font-family: helvetica;
                
            }

            h3 span {
                display: block;
            }

            .univ {
                font-size: 32px;
            }

            p span {
                font-size: 12px;
                display: block;
                color: white;
                font-family: helvetica;
            }

            .sub {
                font-size: 14px;
            }

            .con-kontak {
                background-color: rgba(3, 3, 14, 0.9);
                width: 800px;
                height: 290px;
                left: 50%;
                transform: translateX(-50%);
                position: absolute;
                border-radius: 10px;
                margin-top: 1200px;
            }

            #keatas {
                display: none;
                position: fixed;
                bottom: 60px;
                right: 30px;
                z-index: 99;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 15px;
                border-radius: 10px;
                width: 50px;
                height: 50px;
                padding-left: 10px;
                padding-top: 10px;
            }

            .icon-atas {
                width: 30px;
                height: 30px;
            }

            #keatas:hover {
                background-color: #0d6efd;
            }

            
        </style>
    </head>

    <body>
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm p-md-3 bg-black">
            
            <div class="container-fluid me-5 ms-5">
                <a class="navbar-brand">Universitas KrisnaDwiPayana</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-3" aria-current="page" id="navhome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" id="navmenu">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" id="navkontak">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="tampilan_depan.php">Informasi</a>
                    </li>
                    <li class="nav-item" style="border: 1px solid white; border-radius: 5px; width: 65px; margin-right: 5px;">
                        <a class="nav-link me-3" href="login.php" style="color: white;">Masuk</a>
                    </li>
                    <li class="nav-item" style="border: 1px solid white; border-radius: 5px; width: 65px;">
                        <a class="nav-link me-3" href="registrasi.php" style="color: white;">Daftar</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->

        <div class="welcome">
            <h3><span>Selamat Datang</span><span class="univ">Universitas KrisnaDwipayana</span></h2>
        </div>

       
        <!-- menu  -->
        <!-- <section id="menu" >
            <div class="con-menu shadow-lg">
                <div class="container-menu">
                    <div class="row text-center">
                        <div class="col-lg">
                            <h5 class="mb-3">INFO KAMPUS</h5>
                        </div>
                    </div>
                    <div class="row justify-content-center" id="pilihanmenu">
                        <a href="biodata.html">
                        <div class="col-md-3 mb-5">
                            <div class="card border-light" id="gambar1">
                                <img src="img/teknik.png" class="card-img-top"alt=" biodata" id="logo1">
                                <div class="card-body">
                                    <p class="card-text"><span>Fakultas</span><span class="sub">Teknik</span></p>
                                </div>
                            </div>
                        </a>
                        </div>
                        <div class="col-md-3 mb-5">
                            <a href="musik.html">
                            <div class="card border-light" id="gambar2">
                                <img src="img/hukum.png" class="card-img-top" alt="musik" id="logo2">
                                <div class="card-body">
                                    <p class="card-text"><span>Fakultas</span><span class="sub">Hukum</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-5">
                            <a href="kampus.html">
                            <div class="card border-light" id="gambar3">
                                <img src="img/ekonomi.png" class="card-img-top" alt="kampus" id="logo3">
                                <div class="card-body">
                                    <p class="card-text"><span>Fakultas</span><span class="sub">Ekonomi</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-3 mb-5">
                            <a href="bank.html">
                            <div class="card border-light" id="gambar4">
                                <img src="img/fia.png" class="card-img-top" alt="kampus" id="logo4">
                                <div class="card-body">
                                    <p class="card-text"><span>Fakultas</span><span class="sub">Ilmu Administrasi</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- akhir menu -->

        <!-- menu  -->
        <section id="menu" >
            <div class="container-menu" style="background-image: url(img/slider.png);">
                <div class="row justify-content-center" id="pilihanmenu">
                    <a href="biodata.html">
                    <div class="col-sm-3">
                        <div class="card border-light" id="gambar1">
                            <img src="img/teknik.png" class="card-img-top"alt=" biodata" id="logo1">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Teknik</span></p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="musik.html">
                        <div class="card border-light" id="gambar2">
                            <img src="img/hukum.png" class="card-img-top" alt="musik" id="logo2">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Hukum</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="kampus.html">
                        <div class="card border-light" id="gambar3">
                            <img src="img/ekonomi.png" class="card-img-top" alt="kampus" id="logo3">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Ekonomi</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="kampus.html">
                        <div class="card border-light" id="gambar3">
                            <img src="img/fia.png" class="card-img-top" alt="kampus" id="logo3">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Ilmu Administrasi</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
            </div>
        </section>
        <!-- akhir menu -->


        <!-- berita  -->
        <section id="berita" >
            <div class="container-berita">
                <div class="row text-center ">
                    <div class="col-lg">
                        <h3 class="mb-3">Berita</h3>
                    </div>
                </div>
                <div class="row justify-content-center" id="pilihanmenu">
                    <a href="biodata.html">
                    <div class="col-sm-4">
                        <div class="card border-light" id="gambar1">
                            <img src="img/teknik.png" class="card-img-top"alt=" biodata" id="logo1">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Teknik</span></p>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="musik.html">
                        <div class="card border-light" id="gambar2">
                            <img src="img/hukum.png" class="card-img-top" alt="musik" id="logo2">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Hukum</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="kampus.html">
                        <div class="card border-light" id="gambar3">
                            <img src="img/ekonomi.png" class="card-img-top" alt="kampus" id="logo3">
                            <div class="card-body">
                                <p class="card-text"><span>Fakultas</span><span class="sub">Ekonomi</span></p>
                            </div>
                        </div>
                        </a>
                    </div>
            </div>
        </section>
        <!-- akhir berita -->
        
        

        <!-- footer -->
        <div class="container-footer" style="background-color: #01172e;">
            <div class="container-foot" style="margin-top: 1000px; margin-bottom: -100px;">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
            </footer>
        </div>
        <!-- akhir footer -->

        <div class="atas">
            <button onclick="atas()" id="keatas" title="ke-atas"><img src="img/swipe-up.png" alt="atas" class="icon-atas"></button>
        </div>

    </body>
    <script>
        const home = document.getElementById("navhome");
        const menu = document.getElementById("navmenu");
        const kontak = document.getElementById("navkontak");

        home.addEventListener('click', function() {
            document.documentElement.scrollTop = 0;
        });

        menu.addEventListener('click', function() {
            document.documentElement.scrollTop = 710;
        });

        kontak.addEventListener('click', function() {
            document.documentElement.scrollTop = 1400;
        });

        mybutton = document.getElementById("keatas");
        window.onscroll = function() {fungsikeatas()};

        function fungsikeatas() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        };

        function atas() {
            document.documentElement.scrollTop = 0; 
        };
    </script>
</html>
