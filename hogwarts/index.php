<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hogwarts University</title>
    <!-- icon -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Coat_of_arms_Hogwart_with_motto.svg/220px-Coat_of_arms_Hogwart_with_motto.svg.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
        <div class="container">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/Coat_of_arms_Hogwart_with_motto.svg/220px-Coat_of_arms_Hogwart_with_motto.svg.png" class="me-2" alt="" width="30" height="24">
            <a class="navbar-brand" href="#">Hogwarts University</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="visimisi.php">Visi Misi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="sejarahyayasan.php">Sejarah Hogwarts University</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="fasilitas.php">Fasilitas Hogwarts University</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi Hogwarts University</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="justify-content-end ms-2">
                    <a href="login.php" class="btn btn-outline-light"> login </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- carousel -->
    <!-- css carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/c/c4/Wizarding_World_of_Harry_Potter_Castle.jpg);">
            </div>
            <div class="carousel-item" style="background-image: url(https://asset.kompas.com/crops/TFtaqcln_XwVC4pC3h_pC71c7_k=/0x0:1000x667/750x500/data/photo/2020/04/14/5e957e8753895.jpg);">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- akhir carousel -->
    <!-- sambutan -->
    <div class="container mt-5">
                <h2 class="mt-5">Sambutan Kepala Sekolah Profesor Minerva McGonagall</h2>
                <p class="lead" style="text-align: justify;">Kami dengan bangga menyambut Anda di situs web resmi Hogwarts University, rumah bagi para penyihir dan penyihir muda yang berbakat di seluruh dunia. Di Hogwarts, kami memegang teguh tradisi keunggulan akademis, keberagaman, dan pertumbuhan pribadi yang kokoh.

Saat ini, kami sangat senang untuk mengumumkan bahwa Profesor Minerva McGonagall telah ditunjuk sebagai Kepala Sekolah Hogwarts. Dengan pengalaman yang luas, dedikasi yang tanpa tanding, dan cinta yang mendalam terhadap dunia sihir, Profesor McGonagall adalah pemimpin yang sangat dihormati dan inspiratif bagi kita semua. Di bawah kepemimpinannya, kami yakin Hogwarts akan terus bersinar sebagai pusat pendidikan sihir terkemuka di seluruh dunia.</p>
            </div>
        </div>
    </div>
    <!-- akhir sambutan -->
    <!-- content -->
    <div class="container mt-5">
        <h1 class="text-center mt-5 mb-5">Artikel Terbaru</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://images.ctfassets.net/usf1vwtuqyxm/7CuNA0ueg8uYiEiUOouEkc/692771d474c00544b89a02ab7d8c1988/mcgonagall.jpg?fm=jpg&q=70&w=2560" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Profesor McGonagall Resmi Menjabat Sebagai Kepala Sekolah Hogwarts</h5>
                        <p class="card-text">Kami dengan bangga mengumumkan bahwa Profesor Minerva McGonagall telah resmi menjabat sebagai Kepala Sekolah Hogwarts. Setelah bertahun-tahun pengabdian yang luar biasa sebagai Wakil Kepala Sekolah di bawah kepemimpinan yang bijaksana dari Albus Dumbledore dan Severus Snape, Profesor McGonagall kini mengambil peran yang lebih besar dalam membimbing siswa-siswa Hogwarts menuju masa depan yang cerah. Kami yakin bahwa dengan kebijaksanaan, keberanian, dan dedikasi yang luar biasa, Profesor McGonagall akan membawa Hogwarts ke tingkat keunggulan yang baru.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://cdn.idntimes.com/content-images/duniaku/post/20230308/6e281250f7a861bb16c7254b4e58675c-939a997a84df9efb223d92830f913641.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Pertandingan Quidditch Antar Rumah Hogwarts Kembali Berlangsung</h5>
                        <p class="card-text">Pertandingan Quidditch antar rumah Hogwarts telah kembali bergulir dengan semangat yang tinggi! Para siswa-siswa dari Gryffindor, Hufflepuff, Ravenclaw, dan Slytherin bersiap-siap untuk bertanding dalam liga Quidditch tahunan kami. Pertandingan seru, keterampilan sihir yang memukau, dan persaingan yang sehat membuat acara ini selalu dinantikan oleh seluruh komunitas Hogwarts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUmpCOTd8rKyd_PTXvlfsoIFYCxB0FDxd4niMY7r_rj5VOfjA1r4GmnHgUmc2gBSmPbjg&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kegiatan Ekstrakurikuler Baru di Hogwarts: Klub Pemecah Teka-Teki Sihir</h5>
                        <p class="card-text">Kami dengan senang hati mengumumkan peluncuran Klub Pemecah Teka-Teki Sihir di Hogwarts! Bagi para siswa-siswa yang gemar tantangan dan ingin mengasah kemampuan otak mereka, klub ini adalah tempat yang sempurna untuk berkumpul. Dari teka-teki sederhana hingga misteri yang rumit, anggota klub akan bekerja sama untuk memecahkan berbagai teka-teki sihir yang menarik. Bergabunglah dengan kami dan jelajahi keajaiban dunia sihir melalui pikiran yang kreatif dan kerjasama tim!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir content -->
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-dark text-muted shadow-lg">
        <!-- Section: Social media -->
        <section class="border-bottom">
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="text-light">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-school me-3"></i>Hogwarts University
                        </h6>
                        <small>
                            Hogwarts University merupakan sekolah sihir di mana anak-anak penyihir dan penyihir muda belajar tentang ilmu sihir, memperkuat kemampuan sihir mereka, dan membentuk hubungan yang kuat dengan sesama siswa dan staf pengajar.
                        </small>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-address-book me-3"></i>Kontak
                        </h6>
                        <p><i class="fas fa-home me-3"></i>Highlands Skotlandia</p>
                        <p><i class="fas fa-phone me-3"></i> + 112-233-445</p>
                        <p><i class="fas fa-print me-3"></i> + 999-888-777</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color:RGB (0, 128, 64);">
            © 2021 Copyright:
            <span class="text-reset fw-bold">Hogwarts University</span>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>


</html>