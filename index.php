<?php include 'koneksi/koneksi.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FOX HARRIS Hotel & Conventions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicons -->
    <link rel="icon" href="fox-removebg-preview.png">
    <link href="img/apple-favicon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
    <!-- Vendor CSS File -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="vendor/slick/slick.css" rel="stylesheet">
    <link href="vendor/slick/slick-theme.css" rel="stylesheet">
    <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Main Stylesheet File -->
    <link href="css/hover-style.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body>
    <!-- Header Section Start -->
    <header id="header">
        <a href="index.html" class="logo"><img src="fox-removebg-preview.png" style="width: 110px; margin-top: 1vh;" alt="logo"></a>
        <div class="phone"><i class="fa fa-phone"></i>(0286) 5965656</div>
        <div class="mobile-menu-btn"><i class="fa fa-bars"></i></div>
        <nav class="main-menu top-menu">
            <ul>
                <li class="active"><a href="#headerSlider">Home</a></li>
                <li><a href="#amenities">Serivce</a></li>
                <li><a href="#rooms">Rooms</a></li>
                <li><a href="#booking">Booking</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- Header Section End -->

    <!-- Header Slider Start -->
    <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
            <li data-target="#headerSlider" data-slide-to="1"></li>
            <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider/header-slider-1.jpg" alt="Royal Hotel">
                <div class="carousel-caption">
                    <h1 class="animated fadeInRight">FOX HARRIS Hotel & Conventions</h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/slider/header-slider-2.jpg" alt="Royal Hotel">
                <div class="carousel-caption">
                    <h1 class="animated fadeInRight">FOX HARRIS Hotel & Conventions</h1>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/slider/header-slider-3.jpg" alt="Royal Hotel">
                <div class="carousel-caption">
                    <h1 class="animated fadeInRight">FOX HARRIS Hotel & Conventions</h1>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Header Slider End -->


    <!-- Welcome Section Start -->
    <div id="welcome">
        <div class="container">
            <h3>Welcome to Fox Harris Hotel</h3>
            <p>Selamat Datang di Fox Harris Hotel Nikmati kenyamanan dan layanan terbaik selama menginap di hotel kami.
                Kami siap menyambut Anda dengan keramahan yang hangat dan fasilitas premium yang akan membuat perjalanan
                Anda lebih menyenangkan.
            </p>
            <a href="#booking">Book Now</a>
        </div>
    </div>
    <!-- Welcome Section End -->

    <!-- Amenities Section Start -->
    <div id="amenities" class="home-amenities">
        <div class="container">
            <div class="section-header">
                <h2>Services</h2>
                <p>
                    Disini kepuasan Anda adalah prioritas kami. Nikmati layanan Mini bar, akses Wi-Fi gratis, dan
                    fasilitas olahraga modern yang tersedia 24 jam. Setiap detail kami perhatikan untuk memberikan
                    kenyamanan yang Anda butuhkan.
                </p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-2"></i>
                    <h3>Air Conditioner</h3>
                    <p>Pendinginan Optimal di Setiap Kamar</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-3"></i>
                    <h3>Bathtub</h3>
                    <p>Kenikmatan Mandi di Bathtub Kamar</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-4"></i>
                    <h3>Shower</h3>
                    <p>Shower Nyaman untuk Relaksasi Maksimal</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-6"></i>
                    <h3>Television</h3>
                    <p>Televisi Terbaik untuk Hiburan di Kamar</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-7"></i>
                    <h3>WiFi</h3>
                    <p>Koneksi Wi-Fi Cepat di Seluruh Area</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-8"></i>
                    <h3>Telephone</h3>
                    <p>Layanan Telepon Gratis untuk Tamu</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-9"></i>
                    <h3>Mini Bar</h3>
                    <p>Minibar Lengkap di Setiap Kamar</p>
                </div>
                <div class="col-md-3 col-sm-6 icons">
                    <i class="icon icon-10"></i>
                    <h3>Kitchen</h3>
                    <p>Hidangan Lezat Langsung dari Dapur</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Amenities Section Start -->

    <!-- Room Section Start -->
    <div id="rooms">
        <div class="container" style="background-color: #f8f9fa;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="section-header">
                <h2>Our Rooms</h2>
                <p>
                    Fox Harris Hotel adalah pilihan sempurna untuk liburan keluarga. Dengan kamar luas, fasilitas ramah
                    anak, dan kegiatan yang menyenangkan untuk semua usia, kami memastikan seluruh keluarga dapat
                    menikmati waktu berkualitas bersama.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row ">
                        <?php
                        $data = mysqli_query($con, "select * from type_kamar");
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <div class="col-md-3 mt-5">
                                <div class="room-img">
                                    <div class="box12">
                                        <img src="gambar_kamar/<?php echo $d['gambar_kamar'] ?>" alt="<?php echo $d['jenis_kamar']; ?>" style="height: 200px; border-radius:5px">

                                        <div class="box-content">
                                            <h3 class="title"><?php echo $d['jenis_kamar']; ?></h3>
                                            <ul class="icon">
                                                <li><a href="#booking" data-toggle="modal" data-target="#modal-id"><i class="fa-solid fa-hotel"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="room-des">
                                    <h3><a href="#booking" data-toggle="modal" data-target=""><?php echo $d['jenis_kamar']; ?></a></h3>
                                    <ul class="room-size">
                                        <li><i class="fa fa-arrow-right"></i><?php echo $d['luas_kamar']; ?></li>
                                        <li><i class="fa fa-arrow-right"></i><?php echo $d['jumlah_kasur']; ?></li>
                                    </ul>
                                    <ul class="room-icon">
                                        <li class="icon-1"></li>
                                        <li class="icon-2"></li>
                                        <li class="icon-3"></li>
                                        <li class="icon-4"></li>
                                        <li class="icon-5"></li>
                                        <li class="icon-6"></li>
                                        <li class="icon-7"></li>
                                        <li class="icon-8"></li>
                                        <li class="icon-9"></li>
                                        <li class="icon-10"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 mt-5">
                                <div class="room-rate">
                                    <h3 class="">From</h3>
                                    <h1 class="">Rp <?php echo $d['harga_kamar']; ?></h1>
                                    <a class="" href="#booking">Book Now</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <hr>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal for Room Section End -->


    <!-- Booking Section Start -->
    <?php
    ob_start();  // Mulai output buffering di bagian atas halaman

    require "koneksi/koneksi.php";  // Pastikan koneksi tidak menampilkan output apapun sebelum header dikirimkan

    function input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["check_in"]) && isset($_POST["check_out"])) {
            // Proses data input
            $nama = input($_POST["nama"]);
            $jenis_kamar = input($_POST["jenis_kamar"]);
            $telepon = input($_POST["telepon"]);
            $email = input($_POST["email"]);
            $check_in = input($_POST["check_in"]);
            $check_out = input($_POST["check_out"]);
            $check_in_date = date('Y-m-d', strtotime($check_in));
            $check_out_date = date('Y-m-d', strtotime($check_out));

            // Persiapkan query untuk menyimpan data ke database
            $stmt = $con->prepare("INSERT INTO data_pelanggan (nama, jenis_kamar, telepon, email, check_in, check_out) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $nama, $jenis_kamar, $telepon, $email, $check_in_date, $check_out_date);

            // Eksekusi query dan alihkan berdasarkan hasil eksekusi
            if ($stmt->execute()) {
                echo "<script type='text/javascript'>
                        window.location.href = 'berhasil.php'; // Halaman tujuan
                    </script>";
            } else {
                header("Location: gagal.php");  // Pengalihan ke halaman gagal
                exit();  // Menghentikan eksekusi lebih lanjut
            }
        }
    }

    ob_end_flush();  // Menyelesaikan output buffering dan mengirimkan output ke browser
    ?>

    <div id="booking">
        <div class="container">
            <div class="section-header">
                <h2>Room Booking</h2>
                <p>
                    <b>Kamar Anda dan Siap-siap untuk Liburan yang Menyenangkan</b> Apakah Anda siap untuk pengalaman
                    menginap yang luar biasa? Pesan sekarang dan pastikan Anda mendapatkan kamar terbaik untuk liburan
                    atau perjalanan bisnis Anda.
                </p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="booking-form">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <label>Masukan Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Hiru Toty Riawan"
                                        required="required" />
                                </div>
                                <div class="control-group col-sm-6">
                                    <label class="form-control-label">Room Type</label>
                                    <select id="kelas" name="jenis_kamar" class="form-control" required>
                                        <option selected disabled>choose your Type</option>
                                        <option>Kamar Superior Twins</option>
                                        <option>Kamar Deluxe Double or Twin</option>
                                        <option>Kamar Deluxe Double atau Twin dengan Pemandangan Taman</option>
                                        <option>Kamar Deluxe Double atau Twin dengan Pemandangan Gunung</option>
                                        <option>Suite Executive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <label>Telepon</label>
                                    <input type="text" class="form-control" id="Telepon" name="telepon"
                                        placeholder="085876047371" required="required" />
                                </div>
                                <div class="control-group col-sm-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="hirutoti@gmail.com" required="required" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <label for="date-1">Check-In</label>
                                    <input type="text" name="check_in" id="date-1" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#date-1" placeholder="E.g. YYYY/MM/DD" required />
                                </div>
                                <div class="control-group col-sm-6">
                                    <label for="date-2">Check-Out</label>
                                    <input type="text" name="check_out" id="date-2" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#date-2" placeholder="E.g. YYYY/MM/DD" required />
                                </div>
                            </div>
                            <div class="button d-flex justify-content-center align-items-center mt-5">
                                <button type="submit" id="bookingButto#booking">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Section End -->

    <!-- Footer Section Start -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="social">
                        <a href="https://www.instagram.com/foxhotel.banjarnegara?igsh=MTZuYTU0MWVyOGdoYw==">
                            <li class="fa fa-instagram"></li>
                        </a>
                        <a href="#footer">
                            <li class="fa fa-phone"></li>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61551365377082&mibextid=ZbWKwL">
                            <li class="fa fa-facebook-f"></li>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <p>Copyright &#169; 2045 <a href="">FOX HARRIS Hotel & Conventions</a> All Rights Reserved.</p>

                  
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Section End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Vendor JavaScript File -->
    <!-- Menyertakan CSS dan JS yang diperlukan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.39.0/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap4-datetimepicker@5.39.0/js/bootstrap-datetimepicker.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery/jquery-migrate.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/easing/easing.min.js"></script>
    <script src="vendor/stickyjs/sticky.js"></script>
    <script src="vendor/superfish/hoverIntent.js"></script>
    <script src="vendor/superfish/superfish.min.js"></script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/tempusdominus/js/moment.min.js"></script>
    <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Konfigurasi datetimepicker dengan format YYYY-MM-DD
            $('#date-1').datetimepicker({
                format: 'YYYY-MM-DD'
            });

            $('#date-2').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
    </script>

    <!-- Booking Javascript File -->
    <script src="js/booking.js"></script>
    <script src="js/jqBootstrapValidation.min.js"></script>

    <!-- Main Javascript File -->
    <script src="js/main.js"></script>
</body>

</html>