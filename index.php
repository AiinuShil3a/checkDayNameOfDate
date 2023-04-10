<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Shil3aiinuWebsite</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style3.css" rel="stylesheet">

</head>

<body>
    <!-- ======= selectGrade Section ======= -->
    <section id="selectDate" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">

            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-xl-10">
                        <div class="card rounded-3 text-black">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="card-body p-md-5 mx-md-4">
                                        <div class="text-center">
                                            <img src="assets/img/logoPNG.png" style="width: 200px;" alt="logo">
                                            <p class="mt-1 mb-5 pb-1"><span class="typed" data-typed-items="Select your date.."></span></p>
                                        </div>

                                        <form method="GET" action="Controller/runFunction.php" enctype="multipart/form-data">
                                            <div class="form-outline mb-4">
                                                <input type="number" id="Date" name="Date" class="form-control" placeholder="ใส่วันที่เช่น 31" required />
                                            </div>

                                            <select class="form-select" aria-label="Default select example" name="Month" id="Month" required>
                                                <option value="" disabled selected hidden>เลือกเดือนที่ท่านต้องการ</option>
                                                <option value="01">มกราคม</option>
                                                <option value="02">กุมภาพันธ์</option>
                                                <option value="03">มีนาคม</option>
                                                <option value="04">เมษายน</option>
                                                <option value="05">พฤษภาคม</option>
                                                <option value="06">มิถุนายน</option>
                                                <option value="07">กรกฎาคม</option>
                                                <option value="08">สิงหาคม</option>
                                                <option value="09">กันยายน</option>
                                                <option value="10">ตุลาคม</option>
                                                <option value="11">พฤศจิกายน</option>
                                                <option value="12">ธันวาคม</option>
                                            </select>
                                            <br>
                                            <div class="form-outline mb-4">
                                                <input type="number" id="Year" name="Year" class="form-control" placeholder="ใส่ปี ค.ส. ที่ต้องการเช่น 2002 " required />
                                            </div>
                                        <nav id="navbar" class="navbar nav-menu">
                                            <ul>
                                                <br><br>
                                                <center>
                                                    <li><a href="#selectGrade" class="nav-link scrollto active"><i class="bi bi-arrow-right-circle-fill"></i> <span>NEXT</span></a></li>
                                                </center>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                        <h4 class="mb-4">Warning, please read</h4>
                                        <h4 class="small mb-0">- Up to 31 days only !</h4><br>
                                        <h4 class="small mb-0">- The year has a maximum of 2023 only !</h4><br>
                                        <h4 class="small mb-0">- There is no date or year that is Zero !</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= selectGrade Section ======= -->
    <section id="selectGrade" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://images.pexels.com/photos/3183198/pexels-photo-3183198.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="img-fluid" alt="Sample image" width="1250" height="12500">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <center>
                            <h2>ตรวจสอบผลการเรียนของคุณ</h2>
                        </center><br><br>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">เลือกวิชาที่ต้องการ</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="class" id="class" required>
                                <option value="" disabled selected hidden>เลือกวิชาที่ท่านต้องการ</option>
                                <option value="วิศวะกรรมพื้นฐาน">วิศวะกรรมพื้นฐาน</option>
                                <option value="คณิตศาสตร์พื้นฐาน">คณิตศาสตร์พื้นฐาน</option>
                                <option value="ออกแบบดิจิทัล">ออกแบบดิจิทัล</option>
                            </select>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" for="form3Example4">คะแนนที่คุณได้รับ</label>
                            <input type="number" id="grade" name="grade" class="form-control form-control-lg" placeholder="ระบุคะแนนของคุณ เช่น 99" required>
                        </div>

                        <br>
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <center><button type="submit" id="SUBMIT" name="SUBMIT" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">SUBMIT</button></center>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <br>
            <h3>Welcome to Website</h3>
            <p>My name is Supphalak Maneepanpanit 644259034 64/45 Major : SoftwareEnginearing.</p>
            <div class="social-links">
                <a href="https://twitter.com/enaJeikniP" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/SupphalakSB/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/_shil3a/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.skype.com/en/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span>MyFunction</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: [license-url] -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
                Designed by <a href="https://npru.ac.th/index.php" target="_blank">NPRU</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>