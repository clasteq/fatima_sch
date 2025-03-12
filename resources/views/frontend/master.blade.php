<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fatima Matriculation Higher Secondary School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="FMHSS" name="keywords">
    <meta content="FMHSS" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg nav-bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="" class="navbar-brand font-weight-bold text-secondary">
                <img src="img/logo.png" alt="Flowers" style="width:auto;" class="img-fluid">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav font-weight-bold mx-auto py-0">
                    <a href="#aboutus" class="nav-item nav-link" style="font-size:1rem;">ABOUT US</a>
                    <a href="#principal_msg" class="nav-item nav-link" style="font-size:1rem;">PRINCIPAL'S MESSAGE</a>
                    <!--<a href="#curriculum" class="nav-item nav-link" style="font-size:1.1rem;">CURRICULUM</a> -->
                    <a href="#features" class="nav-item nav-link" style="font-size:1rem;">FEATURES</a>
                    <a href="#gallery" class="nav-item nav-link" style="font-size:1rem;">GALLERY</a>
                    <a href="#contactus" class="nav-item nav-link" style="font-size:1rem;">CONTACT US</a>
                </div>
                <a href="#admission" class="btn btn-primary px-4">ADMISSION</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @session('success')
        <div class="alert alert-warning alert-dismissible" role="alert">
            <strong>{{ $value }}</strong>
        </div>
    @endsession
    <!-- Header Start 
    <div class="container-fluid  px-0 px-md-5 mb-5 bg-img">
        <div class="row align-items-center px-3 bg-img">
            <div class="col-lg-6 text-center text-lg-left bg-img">
                <h1 class="display-3 font-weight-bold text-white  bg-img">Flat Panel Learning</h1>
                <p class="text-white mb-4">Leveraging interactive technology to create an engaging and immersive
                    classroom experience, enhancing conceptual clarity.</p>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="img/header.png" alt=""> 
            </div>
        </div>
    </div>
  Header End -->
    <!-- Slider -->
    @include('frontend.slider')

    <!-- About Start -->
    @include('frontend.aboutus')
    <!-- About End -->
    <!-- Principal's Message -->
    @include('frontend.principal_message')
    <!-- End of Principal's Message -->

    <!-- Vision -->
    @include('frontend.vision')
    <!-- Vision End -->

    <!-- Mission -->
    @include('frontend.mission')
    <!-- Mission End -->

    <!-- Curriculum -->
    <div class="container-fluid py-12" id="curriculum">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <p class="section-title pr-5"><span class="pr-2">Curriculum</span></p>
                    <p>Fatima Matriculation Higher Secondary School follows a comprehensive and balanced curriculum
                        designed to foster academic excellence and personal growth. English and Tamil are the major
                        languages of instruction, ensuring strong linguistic proficiency, while Hindi is offered as
                        an
                        optional language to provide additional learning opportunities. The school emphasizes a
                        well-rounded education, integrating core subjects, moral values, and co-curricular
                        activities to
                        equip students with the skills and knowledge needed for a bright future.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- End of Curriculum -->





    <!-- Features -->
    @include('frontend.features')   
    <!-- End of Features -->

    <!-- Gallery -->
    @include('frontend.gallery')
    <!-- gallery ends -->


    <!-- Registration Start -->
    @include('frontend.enquiry')
    <!-- Registration End -->


    <!-- Footer Start -->
    @include('frontend.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <!--<a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>-->
    <a href="#" class="btn btn-primary p-3 back-to-top">Back to Top</a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/JavaScript">
        $(document).ready(function () {
            $('.general_form').hide();
            $('.admission_form').hide();

            $('#select').change(function () {
                selection = $(this).val();
                switch (selection) {
                    case 'adm':
                        $('.admission_form').show();
                        $('.general_form').hide();

                        break;
                    default:
                        $('.general_form').show();
                        $('.admission_form').hide();

                        break;
                }
            });
        });
    </script>
    <script type="text/JavaScript">
        $(document).ready(function() {
     // show the alert
        setTimeout(function() {
        $(".alert").alert('close');
    }, 5000);
});
    </script>


</body>

</html>