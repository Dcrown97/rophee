<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from shreyascyber.com/test/Medilab/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 02:28:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Rophe - Hospital</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <base>
    <!-- Favicons -->
    <link href="./image/logo.jpeg" rel="icon">
    <link href="./image/logo.jpeg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="https://shreyascyber.com/test/Medilab/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    {{-- <link href="https://shreyascyber.com/test/Medilab/assets/css/style.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="./assets/css/style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
    .fixed-gallery-img {
        width: 100%;
        height: 400px;
        /* or any fixed height you prefer */
        object-fit: cover;
        border-radius: 6px;
    }
</style>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i>
                <a href="mailto:: rophehospitalagbara@yahoo.com">: rophehospitalagbara@yahoo.com,
                    rophehospital@yahoo.co.uk</a>
                <i class="bi bi-phone"></i> 09074370650, 08053003030
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/public-profile/settings?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact-info%3BaQyC8GW6Q8CCzvS7KQNLJg%3D%3D"
                    class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            {{-- <a class="logo me-auto" href="/"><img src="/image/logo.jpeg" alt=""></a> --}}
            <h1 class="logo me-auto"><a href="#">Rophe Hospital</a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li> --}}
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li> --}}
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            {{-- <a href="/login" class="appointment-btn scrollto">
                Login</a> --}}

        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <main id="main">
        @yield('contents')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h3>Rophe Hospital</h3>
                        <p>
                            <b>Head Office:</b>
                            23, Anambra Crescent, Agbara Estate, Agbara, Ogun State.
                            <strong>Phone:</strong> 09074370650, 08053003030<br>
                            <strong>
                                Email: <a href="mailto:: rophehospitalagbara@yahoo.com">:
                                    rophehospitalagbara@yahoo.com, rophehospital@yahoo.co.uk</a>
                            </strong><br>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">ECG</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Ultrasound</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">X-ray</a></li>
                        </ul>
                    </div>

                    {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="#" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div> --}}

                </div>
            </div>
        </div>
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Cheers</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
                    Designed by <a href="https://www.ftsl-ng.com/">Flyte Technologies and Solutions Ltd</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.linkedin.com/public-profile/settings?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_self_edit_contact-info%3BaQyC8GW6Q8CCzvS7KQNLJg%3D%3D"
                    class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="https://shreyascyber.com/test/Medilab/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="https://shreyascyber.com/test/Medilab/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://shreyascyber.com/test/Medilab/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="https://shreyascyber.com/test/Medilab/assets/vendor/swiper/swiper-bundle.min.js"></script>
    {{-- <script src="https://shreyascyber.com/test/Medilab/assets/vendor/php-email-form/validate.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="https://shreyascyber.com/test/Medilab/assets/js/main.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/663a130607f59932ab3ceaa9/1ht9dkklt';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            // Get the current URL, removing any fragment
            var documentUrl = document.location.href.replace(/#.*$/, '')

            // Iterate through all links
            var linkEls = document.getElementsByTagName('A')
            for (var linkIndex = 0; linkIndex < linkEls.length; linkIndex++) {
                var linkEl = linkEls[linkIndex]

                // Ignore links that don't begin with #
                if (!linkEl.getAttribute('href').match(/^#/)) {
                    continue;
                }

                // Convert to an absolute URL
                linkEl.setAttribute('href', documentUrl + linkEl.getAttribute('href'))
            }
        })
    </script>

</body>


<!-- Mirrored from shreyascyber.com/test/Medilab/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 02:28:46 GMT -->

</html>
