<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
    <!-- select2 css -->
    <link rel="stylesheet" href="asset/css/select2.min.css">
    <link rel="stylesheet" href="asset/css/select2-bootstrap4.min.css">
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="asset/css/all.min.css">
    <!-- my Style CSS -->
    <link rel="stylesheet" href="asset/css/style.css">

    <title>GE - TRAIN</title>
</head>

<body>

    <!-- [ Navbar ] start -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="asset/img/LOGO-GET.png" height="50px" alt="GET">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active-nav">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lacak Pengiriman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tarif Pengiriman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary tmb-cst-blue">Login Gerai</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Navbar] end -->

    <!-- [ Carousel] start -->
    <div class="section carousel-img">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/slide1.jpg" class="d-block w-100" alt="slide 1">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- [ Carousel] end-->

    <!-- [ information ] start -->
    <div class="section info">
        <div class="container-fluid">
            <div class="row">
                <!-- [ card tracking ] start -->
                <div class="card col-lg-4">
                    <div class="card-body">
                        <h4 class="pb-3"><i class="fas fa-search-location"> &nbsp;</i>&nbsp; Lacak Kiriman</h4>
                        <p>Lacak Keberadaan Paket kiriminan anda dengan memasukkan No Awb dibawah ini.</p>
                        <form>
                            <div class="form-group">
                                <label for="tracking">No AWB</label>
                                <textarea class="form-control" name="tracking" required rows="5"></textarea>
                                <small id="trackinghelp" class="form-text text-muted font-italic">Maksimal 10 No. Airwaybill</small>
                            </div>
                            <div class="text-center pt-3">
                                <button type="submit" class="btn btn-primary tmb-cst-blue">Lacak Kiriman</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- [ card tracking ] end -->
                <!-- [ card pricing ] start -->
                <div class="card col-lg-4">
                    <div class="card-body">
                        <h4 class="pb-3"><i class="fas fa-calculator"> &nbsp;</i>&nbsp; Tarif Kiriman </h4>
                        <form>
                            <div class="form-group">
                                <label for="asal"> Kota Asal</label>
                                <select class="form-control asal" required id="asal"></select>
                            </div>
                            <div class="form-group">
                                <label for="tujuan"> Kota / Kabupaten Tujuan</label>
                                <select class="form-control tujuan" required id="tujuan"></select>
                            </div>
                            <div class="form-group">
                                <label for="berat"> Berat </label>
                                <div class="input-group">
                                    <input type="text" class="form-control col-4" name="berat" id="berat">
                                    <div class="input-group-append">
                                        <div class="input-group-text">KG</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="panjang"> Panjang </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="panjang" id="panjang">
                                            <div class="input-group-append">
                                                <div class="input-group-text">cm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="lebar"> Lebar </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="lebar" id="lebar">
                                            <div class="input-group-append">
                                                <div class="input-group-text">cm</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="tinggi"> Tinggi </label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tinggi" id="tinggi">
                                            <div class="input-group-append">
                                                <div class="input-group-text">cm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center pt-3">
                                <button type="submit" class="btn btn-primary tmb-cst-blue">Cek Tarif</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- [ card pricing ] end -->
                <!-- [ card lokasi ] start -->
                <div class="card col-lg">
                    <div class="card-body">
                        <h4 class="pb-3"><i class="fas fa-map"> &nbsp;</i>&nbsp; Cari Agent Gerai</h4>
                        <p>Cari Lokasi Agent / Gerai GE_TRAIN terdekat </br> di kota anda.</p>
                        <form>
                            <div class="form-group">
                                <label for="lokasi">Masukkan Lokasi Terdekat</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Masukkan Nama Kota / Kabupaten Terdekat">

                            </div>
                            <div class="text-center pt-3">
                                <button type="submit" class="btn btn-primary tmb-cst-blue">Cek Lokasi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- [ card lokasi ] end -->
            </div>
        </div>
    </div>
    <!-- [ information ] end -->

    <!-- [ Choose Us] start -->
    <div class="section choose">
        <div class="container-fluid">
            <h3>Kenapa Memilih <b>GE-Train ?</b></h3>
            <p class="pt-3">GE-Train hadir menjadi mitra pengiriman jasa kereta api terpecaya <br> di seluruh Indonesia. berikut beberapa alasan Memilih GE-Train.</p>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <figure class="figure">
                        <img src="asset/img/chs-1.png" class="figure-img img-fluid rounded-circle" alt="...">
                        <figcaption class="figure-caption">
                            <h5>Harga Murah & Terjangkau</h5>
                            <p>Pengiriman Dengan Harga Ekonomis <br> yang dan pas dikantong.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure class="figure">
                        <img src="asset/img/chs-2.png" class="figure-img img-fluid rounded-circle" alt="...">
                        <figcaption class="figure-caption">
                            <h5>Cepat Sampai</h5>
                            <p>Pengiriman dengan lead time cepat dan sampai <br> ke tujuan tepat pada waktunya</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-3">
                    <figure class="figure">
                        <img src="asset/img/chs-3.png" class="figure-img img-fluid rounded-circle" alt="...">
                        <figcaption class="figure-caption">
                            <h5> Real Time Tracking</h5>
                            <p> Pelacakan Pengiriman yang Real Time dan <br> Terupdate Lewat Website & <br> Mobile App Kami.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Choose Us] start -->

    <!-- [ about us ] start-->
    <div class="section about">
        <div class="container-fluid">
            <h3> Tentang <b>GE-Train </b></h3>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <img src="asset/img/LOGO-GET.png" class="img-fluid rounded" alt="...">
                </div>
                <div class="col-lg-5">
                    <h5>Global Expreess Train </h5>
                    <p class="pt-4">Jasa Layanan Pengiriman di seluruh <b>AREA PULAU JAWA</b> dengan
                        Menggunakan Jasa Kereta Api dengan Menawarkan <b>HARGA</b>
                        yang <b>LEBIH MURAH & TERJANGKAU</b> Ketimbang Jasa Kiriman
                        Serupa Lainnya.</p>
                    <div class="text-center pt-2">
                        <button class="btn btn-primary tmb-cst-blue">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ about us ] end-->

    <!-- [ service ] start-->
    <div class="section service">
        <div class="container-fluid">
            <h3>Service <b>GE-Train</b></h3>
            <p class="pt-3">GE-Train Menyediakan beberapa layanan untuk mendukun bisnis anda.<br> Berikut beberapa layanan GE - Train.</p>
            <div class="row justify-content-center">
                <div class="col-lg-3 justify-content-center d-flex">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle blue s-border">PTP</h5>
                            <h6 class="pt-3">( Port To Port )</h6>
                            <p class="card-text pt-2">Layanan Pengiriman Paket Besar/ Paket Kecil dengan jangkauan Ke Semua Stasiun Kereta Api di Daerah Pulau Jawa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 justify-content-center d-flex">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle yellow s-border">PTD</h5>
                            <h6 class="pt-3">( Port To Door )</h6>
                            <p class="card-text pt-2">Layanan Pengiriman Paket Besar/ Paket Kecil Langsung ke alamat rumah / kantor / tempat usaha tujuan anda .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 justify-content-center d-flex">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-tittle red s-border">DTD</h5>
                            <h6 class="pt-3">( Door To Door )</h6>
                            <p class="card-text pt-2">Layanan Pengiriman dengan Pick Up langsung dari tempat pengirim dan langsung dikirim ke alamat rumah / kantor / tempat usaha tujuan anda</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-5">
                <button class="btn btn-primary tmb-cst-blue">Lihat Selengkapnya</button>
            </div>
        </div>
    </div>
    <!-- [ service ] end-->

    <!-- [ footer ] start-->
    <div class="section footer">
        <div class="container container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-2">
                    <h5><b>INFORMASI</b></h5>
                    <p><a href="#"> FAQ</a></p>
                    <p><a href="#"> Term & Condition</a></p>
                    <p><a href="#"> Privacy Policy</a></p>
                </div>
                <div class="col-lg">
                    <h5><b>PRODUK & LAYANAN</b></h5>
                    <p><a href="#"> Port To Port</a></p>
                    <p><a href="#"> Port To Door</a></p>
                    <p><a href="#"> Door To Door</a></p>
                    <p><a href="#"> Kendaaran Bermotor</a></p>
                    <p><a href="#"> Kendaaran Non-Bermotor</a></p>
                </div>
                <div class="col-lg-2">
                    <h5><b>IKUTI KAMI</b></h5>
                    <p><a href="#"><i class="fab fa-facebook"> &nbsp;</i>&nbsp; Facebook</a></p>
                    <p><a href="#"><i class="fab fa-instagram"> &nbsp;</i>&nbsp; Instagram</a></p>
                    <p><a href="#"><i class="fab fa-youtube"> &nbsp;</i>&nbsp; Youtube</a></p>
                </div>
                <div class="col-lg-3">
                    <h5><b>INFO KONTAK</b></h5>
                    <p><a href="#"><i class="fas fa-map-marked"> &nbsp;</i>&nbsp; Jl. Mampang Prapatan XIV No 60
                            <br>&nbsp; &nbsp; &nbsp;&nbsp;Kel. Tegal Parang, Kec. Mampang
                            <br>&nbsp; &nbsp; &nbsp;&nbsp;Parpatan, Kota Jakarta Selatan,
                            <br>&nbsp; &nbsp; &nbsp;&nbsp;DKI Jakarta - 12790.</a></p>
                    <p><a href="#"><i class="fas fa-phone"> &nbsp;</i>&nbsp; 021-7919-4555</a></p>
                    <p><a href="#"><i class="fab fa-whatsapp"> &nbsp;</i>&nbsp; 0816794884</a></p>
                    <p><a href="#"><i class="fas fa-envelope"> &nbsp;</i>&nbsp; csd1@winsemesta.com</a></p>
                </div>
                <div class="col-lg">
                    <h5><b>DOWNLOAD APPS</b></h5>
                    <p><a href="#"><img src="asset/img/gplay.png" width="150px" alt=""></a></p>
                    <p><a href="#"><img src="asset/img/appstore.png" width="150px" alt=""></a></p>
                </div>
            </div>
            <div class="text-center">
                <span>2020 PT. Win Semesta Depele. All Right Reseved</span>
            </div>
        </div>
    </div>
    <!-- [ footer ] end-->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script>
    <script src="asset/js/select2.full.min.js"></script>
    <script src="asset/js/all.min.js"></script>

    <script>
        // origin city
        $(function() {
            $('.asal').select2({
                minimumInputLength: 3,
                allowClear: true,
                theme: 'bootstrap4',
                placeholder: 'Pilih Kota Asal',
            });
        });

        // destination city
        $(function() {
            $('.tujuan').select2({
                minimumInputLength: 3,
                allowClear: true,
                theme: 'bootstrap4',
                placeholder: 'Pilih Kota Tujuan',
            });
        });
    </script>

</body>

</html>