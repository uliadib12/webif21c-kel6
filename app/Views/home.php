<!DOCTYPE html>
<html>

<head>
    <!-- basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- site metas -->
    <title>Tekno Expo</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="description" content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
    <meta name="keywords" content="calendar, events, reminders, javascript, html, css, open source coding" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/loading.css" />

    <link rel="stylesheet" href="/css/calendar.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css" />
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/css/jquery.mCustomScrollbar.min.css" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
</head>

<body>
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html"><img src="/images/UNIVERSITASTEKNOKRAT.png" width="100" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#event">Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#doc">Documentation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <div class="login_bt">
                            <ul>
                                <li>
                                    <a href="<?= (isset($user)) ? "/profile" : "/login" ?>"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        <?php if (isset($user)) : ?>
                                            <?= esc($user->username) ?>
                                        <?php else : ?>
                                            Login
                                        <?php endif ?>
                                    </a>
                                </li>
                                <li>
                                    <?php if (isset($isDashboard) && $isDashboard != NULL) : ?>
                                        <a href="/dashboard"><span class="user_icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                                            Dashboard
                                        </a>
                                    <?php endif ?>
                                </li>
                                <li>
                                    <?php if (isset($user)) : ?>
                                        <a href="/logout"><span class="user_icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                            Logout
                                        </a>
                                    <?php endif ?>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container-fluid">
                <div id="banner_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Tekno Expo</h1>
                                        <p class="banner_text">
                                            Tekno Expo adalah wadah untuk seluruh event yang akan di selenggarakan di
                                            Universitas Teknokrat Indonesia, dimana para mahasiswa berlomba menunjukkan
                                            skil serta kemampuan dalam bidang keahliannya, dengan tujuan untuk
                                            menghasilkan generasi yang cerdas dan menjadi Sang Juara!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img src="/images/ilustration-0.png" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Tekno Expo</h1>
                                        <p class="banner_text">
                                            Tekno Expo adalah wadah untuk seluruh event yang akan di selenggarakan di
                                            Universitas Teknokrat Indonesia, dimana para mahasiswa berlomba menunjukkan
                                            skil serta kemampuan dalam bidang keahliannya, dengan tujuan untuk
                                            menghasilkan generasi yang cerdas dan menjadi Sang Juara!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img src="/images/ilustration-0.png" /></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="banner_taital_main">
                                        <h1 class="banner_taital">Tekno Expo</h1>
                                        <p class="banner_text">
                                            Tekno Expo adalah wadah untuk seluruh event yang akan di selenggarakan di
                                            Universitas Teknokrat Indonesia, dimana para mahasiswa berlomba menunjukkan
                                            skil serta kemampuan dalam bidang keahliannya, dengan tujuan untuk
                                            menghasilkan generasi yang cerdas dan menjadi Sang Juara!
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner_img"><img src="/images/ilustration-0.png" /></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- box section start -->
    <div class="container">
        <div class="box_section">
            <div class="online_box">
                <div class="online_box_left">
                    <a href="./opening.html">
                        <div class="online_box_main">
                            <div class="box_left">
                                <div class="right_arrow"><i class="fa fa-arrow-right fa-bounce"></i></div>
                            </div>
                            <div class="box_right">
                                <p class="book_text">Opening</p>
                                <h4 class="appoinment_text">Online/Offline</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="online_box_left">
                    <a href="./opening.html">
                        <div class="online_box_main">
                            <div class="box_left">
                                <div class="right_arrow"><i class="fa-solid fa-file-export fa-fade"></i></div>
                            </div>
                            <div class="box_right">
                                <p class="book_text">Registration</p>
                                <h4 class="appoinment_text">Online</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="online_box_left">
                    <a href="./opening.html">
                        <div class="online_box_main">
                            <div class="box_left">
                                <div class="right_arrow"><i class="fa-solid fa-code fa-flip"></i></div>
                            </div>
                            <div class="box_right">
                                <p class="book_text">Competition</p>
                                <h4 class="appoinment_text">Offline</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="online_box_left">
                    <a href="./opening.html">
                        <div class="online_box_main">
                            <div class="box_left">
                                <div class="right_arrow"><i class="fa-solid fa-globe fa-spin fa-lg"></i></div>
                            </div>
                            <div class="box_right">
                                <p class="book_text">Sertifikat</p>
                                <h4 class="appoinment_text">Online/Offline</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- box section end -->
    <button id="calendarButton" onclick="showHideCalendar()"><i id="calendarIcon" class="far fa-calendar-alt" style="font-size: 2.3em"></i></button>
    <!-- calendar start -->
    <div id="calendar" class="calendar-container" style="display: none; transition: all 0.3s ease-in-out; opacity: 0">
        <div class="left">
            <div class="calendar">
                <div class="month">
                    <i class="fas fa-angle-left prev"></i>
                    <div class="date">december 2015</div>
                    <i class="fas fa-angle-right next"></i>
                </div>
                <div class="weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>
                <div class="days"></div>
                <div class="goto-today">
                    <div class="goto">
                        <input type="text" placeholder="mm/yyyy" class="date-input" />
                        <button class="goto-btn">Go</button>
                    </div>
                    <button class="today-btn">Today</button>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="today-date">
                <div class="event-day">wed</div>
                <div class="event-date">12th december 2022</div>
            </div>
            <div class="events"></div>
        </div>

    </div>
    <!-- calendar end -->

    <!-- services section start -->
    <div class="services_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="judul">Discover</h1>
                </div>
            </div>
        </div>
        <div class="services_section_2">
            <div class="container">
                <div class="contain">
                    <div class="service_box">
                        <div class="house_icon">
                            <img src="/images/icon-1.png" class="image_1" />
                            <img src="/images/icon-4.png" class="image_2" />
                            n<h3 class="corporate_text">Grand Launching</h3>
                            <div class="up">
                                <p class="chunks_text">
                                    Grand Lauching menjadi pembuka dari seluruh rangkaian Event yang di selenggarakan,
                                    diadakan secara online dan offline dan akan diisi dengan sambutan
                                    dari Rektor Universitas Teknokrat Indonesia,
                                    Penampilan UKM, dan QnA.
                                </p>
                                <div class="readmore_button"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service_box">
                        <div class="house_icon">
                            <img src="/images/icon-2.png" class="image_1" />
                            <img src="/images/icon-5.png" class="image_2" />
                            <h3 class="corporate_text">UKM Teknokrat</h3>
                            <div class="up">
                                <p class="chunks_text">UKM Teknokrat merupakan Unit Kegiatan Mahasiswa Universitas
                                    Teknokrat Indonesia terdapat kurang lebih 10 UKM aktif dan menjadi wadah mahasiswa
                                    untuk berlatih dan belajar untuk mempardalam kemampuan di bidang yang disukai.</p>
                                <div class="readmore_button"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="service_box">
                        <div class="house_icon">
                            <img src="/images/icon-3.png" class="image_1" />
                            <img src="/images/icon-6.png" class="image_2" />
                            <h3 class="corporate_text">Clossing & Awards</h3>
                            <div class="up">
                                <p class="chunks_text">
                                    Rangkaian acara yang menjadi puncak dari seluruh event.
                                    Proses Seleksi dilakukan secara adil dan kompetitif oleh juri yang berkompeten
                                    dibidangnya, sehingga menghasilkan juara yang layak.
                                </p>
                                <div class="readmore_button"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service section end -->

    <!-- event section start -->
    <div class="services_section layout-padding">
        <div id="event" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="judul">Event</h1>
                </div>
            </div>
        </div>
        <ul class="card-list">
            <?php foreach ($dataEvent as $key => $item) {

                if ($key < 3) {
                    echo
                    '<li class="card-event">' .
                        '<a class="card-image" title="Selengkapnya" href="/event/' . $item['id_event'] . '" style="background-image:url( /uploads/images/' . esc($item['gambar_poster']) . ');" data-image-full="/uploads/images/' . esc($item['gambar_poster']) . '">' .
                        '<img src="/uploads/images/' . esc($item['gambar_poster']) . '" alt="logo">' .
                        '</a>' .
                        '<a class="card-description" href="">' .
                        '<h2>' . $item['nama'] . '</h2>' .
                        '<p>' . esc(date('d F Y', strtotime($item['tanggal']))) . '</p>' .
                        '</a>' .
                        '</li>';
                };
            } ?>
        </ul>
        <div class="toggle-btn">
            <span class="divider"></span> Selengkapnya <i class="fas fa-angle-down"></i><span class="divider"></span>
        </div>
        <div class="toggle-content">
            <ul class="card-list">
                <?php foreach ($dataEvent as $key => $item) {

                    if ($key >= 3) {
                        echo
                        '<li class="card-event">' .
                            '<a class="card-image" title="Selengkapnya" href="" style="background-image:url( /uploads/images/' . esc($item['gambar_poster']) . ');" data-image-full="/uploads/images/' . esc($item['gambar_poster']) . '">' .
                            '<img src="/uploads/images/' . esc($item['gambar_poster']) . '" alt="logo">' .
                            '</a>' .
                            '<a class="card-description" href="">' .
                            '<h2>' . $item['nama'] . '</h2>' .
                            '<p>' . esc(date('d F Y', strtotime($item['tanggal']))) . '</p>' .
                            '</a>' .
                            '</li>';
                    };
                } ?>
            </ul>
        </div>

    </div>
    <!-- event section end -->
    <!-- about section start -->
    <div id="about" class="about_section layout_padding">
        <div class="container">
            <div class="contain">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_img"><img src="/images/3081783.jpg" /></div>
                    </div>
                    <div class="col-md-6">
                        <div class="about_text_main">
                            <h1 class="about_taital">About Us</h1>
                            <p class="about_text">
                                Tekno Expo adalah wadah untuk seluruh event yang akan di selenggarakan di
                                Universitas Teknokrat Indonesia, dimana para mahasiswa berlomba menunjukkan
                                skil serta kemampuan dalam bidang keahliannya, dengan tujuan untuk
                                menghasilkan generasi yang cerdas dan menjadi Sang Juara!
                            </p>
                            <div class="readmore_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- studies section start -->
    <div class="card-section layout_padding">
        <div class="container">
            <div id="doc" class="row">
                <div class="col-sm-12">
                    <h1 class="judul" style="padding-top: 3em">Dokumentasi Tahunan</h1>
                </div>
            </div>
        </div>
        <div id="carrousel">
            <div class="container">

                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        <img src="/images/uiux.jpeg">
                        <img src="/images/ctf.jpeg">
                        <img src="/images/mobile.jpeg">
                        <img src="/images/web.jpeg">
                        <img src="/images/bintang.png">
                        <img src="/images/carrou.png">
                        <img src="/images/imanuel.png">
                    </div>
                </div>
                <div class="text-center">
                    <button id="play-carousel" type="button" class="btn btn-dark">Play</button>
                    <div class="status"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- studies section end -->

    <!-- news section start -->
    <div id="sponsor" class="layout_padding">
        <div class="sponsor-bg">
            <div class="bg-up" style="background-color: #001431">
                <h1 class="judul">Sponsor</h1>
            </div>
            <div class="sponsor-list">
                <div class="sponsor">
                    <img src="/images/./mcd.png" alt="Sponsor 1" />
                </div>
                <div class="sponsor">
                    <img src="/images/prime-v.png" alt="Sponsor 2" />
                </div>
                <div class="sponsor">
                    <img src="/images/uniqlo.png" alt="Sponsor 3" />
                </div>
                <div class="sponsor">
                    <img src="/images/nasa.png" alt="Sponsor 4" />
                </div>
            </div>
        </div>
    </div>
    <!-- news section end -->
    <!-- footer section start -->
    <!-- footer section end -->
    <footer id="contact" class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="/images/UNIVERSITASTEKNOKRAT.png" class="img-fluid" alt="logo" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>SITE MAPS</h3>
                            </div>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="#about">About Us</a></li>
                                <li><a href="#event">Register</a></li>
                                <li><a href="#doc">Documentation</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>EVENTS</h3>
                            </div>
                            <ul>
                                <li><a href="#">Opening</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Kategori</a></li>
                                <li><a href="#">Sertifikat</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Contact Us</h3>
                            </div>
                            <ul>
                                <li><a href="#">Contact Person</a></li>
                                <ul class="row" style="gap: 3em; padding-inline: 3em">
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">© 2023 All Rights Reserved, <a href="https://teknokrat.ac.id/">Universitas
                    Teknokrat Indonesia</a></p>
        </div>
    </div>
    <a href="javascript:void(0);" id="back-to-top" onclick="scrollToTop()"><i class="fa-solid fa-caret-up"></i></a>
    <script>
        var dataEvent = <?php echo json_encode($dataEvent); ?>;
        console.log(dataEvent);
    </script>

    <!-- copyright section end -->
    <!-- Javascript files-->
    <!-- <script>
      function showHideCalendar() {
        var calendar = document.getElementById('calendar');
        if (calendar.style.display === 'none') {
          calendar.style.display = 'flex';
          document.getElementsByTagName('button')[0].innerHTML = '';
        } else {
          calendar.style.display = 'none';
          document.getElementsByTagName('button')[0].innerHTML = '';
        }
      }
    </script> -->


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.querySelector(".toggle-btn");
            const toggleContent = document.querySelector(".toggle-content");

            toggleBtn.addEventListener("click", function() {
                toggleBtn.classList.toggle("active");
                toggleContent.classList.toggle("show");
            });
        });
    </script>
    <script>
        function showHideCalendar() {
            var calendar = document.getElementById('calendar');
            var calendarIcon = document.getElementById('calendarIcon');
            var calendarButton = document.getElementById('calendarButton');
            if (calendar.style.display === 'none') {
                calendar.style.display = 'flex';
                calendar.style.opacity = 1;
                calendarIcon.classList.remove('fa-calendar-alt');
                calendarIcon.classList.add('fa-calendar-times');
                calendarButton.style.backgroundColor = '#f8f8f8';
                setTimeout(function() {
                    calendar.style.transform = 'translateY(0)';
                }, 100);
            } else {
                calendar.style.transform = 'translateY(-20px)';
                calendar.style.opacity = 0;
                calendarIcon.classList.remove('fa-calendar-times');
                calendarIcon.classList.add('fa-calendar-alt');
                calendarButton.style.backgroundColor = 'transparent';
                setTimeout(function() {
                    calendar.style.display = 'none';
                }, 300);
            }
        }
    </script>
    <script>
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById('back-to-top').style.display = 'block';
            } else {
                document.getElementById('back-to-top').style.display = 'none';
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.0.0.min.js"></script>
    <script src="/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/calendar.js"></script>
    <script src="/js/style.js"></script>
    <!-- javascript -->
</body>

</html>