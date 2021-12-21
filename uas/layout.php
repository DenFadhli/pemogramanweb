<!DOCTYPE html>
<html>
<head>
    <title>Tugas Akhir</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style_layout.css">
</head>
<body>
    <div class="wrapper">
        <img src="img/slider.png" class="img-responsive" alt="background">

        <!-- navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm p-md-3">
            <div class="container-fluid me-5 ms-5">
                <a class="navbar-brand">LUTHFI RAMDHANI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-3" aria-current="page" id="navhome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" id="navmenu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" id="navkontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="tampilan_depan.php">Keluar</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <!-- akhir navbar -->

        <!-- menu  -->
        <section id="menu" >
            <div class=" container" style="margin-top: -800px;">
                <div class="row text-center mb-3 mt-5">
                    <div class="col-lg">
                        <h2 class="mt-5 mb-5">SELAMAT DATANG DI MENU TUGAS AKHIR PRAKTIKUM SAYA</h2>
                    </div>
                </div>
                <div class="row justify-content-center" id="pilihanmenu">
                    <a href="biodata.html">
                    <div class="col-xl-3 mb-5">
                        <div class="card border-light" id="gambar1">
                            <img src="img/teknik.png" class="card-img-top"alt=" biodata" id="logo1">
                            <div class="card-body">
                                <h3 class="card-text">BIODATA</h3>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xl-3 mb-5">
                        <a href="musik.html">
                        <div class="card border-light" id="gambar2">
                            <img src="img/hukum.png" class="card-img-top" alt="musik" id="logo2">
                            <div class="card-body">
                                <h3 class="card-text">AUDIO</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-3 mb-5">
                        <a href="kampus.html">
                        <div class="card border-light" id="gambar3">
                            <img src="img/ekonomi.png" class="card-img-top" alt="kampus" id="logo3">
                            <div class="card-body">
                                <h3 class="card-text">KAMPUS</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-3 mb-5">
                        <a href="bank.html">
                        <div class="card border-light" id="gambar4">
                            <img src="img/fia.png" class="card-img-top" alt="kampus" id="logo4">
                            <div class="card-body">
                                <h3 class="card-text">BANK</h3>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir menu -->

        <!-- kontak -->
        <section id="kontak">
            <div class="container" style="margin-top: -100px;">
                <div class="row text-center mb-3">
                    <div class="col">
                        <h2>HUBUNGI SAYA</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap :</label>
                                <input type="text" class="form-control" id="name" aria-describedby="name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email">
                            </div>
                            <div class="mb-3">
                                <label for="pesan" class="form-label">Pesan :</label>
                                <textarea class="form-control" id="pesan" rows="3"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- akhir kotak -->

        <!-- Pesan -->
        <?php if(isset($_POST["submit"])) : ?>
            <section>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-5 pb-5 text-center">
                            <label for="pesan" style="color: red; font-style: italic">Pesan Telah Dikirim. ~ Terimakasih ~</label>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <!-- Akhir Pesan -->

    
        <div class="atas">
            <button onclick="atas()" id="keatas" title="ke-atas"><img src="img/swipe-up.png" alt="atas" class="icon-atas"></button>
        </div>

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