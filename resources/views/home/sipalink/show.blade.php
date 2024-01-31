<!DOCTYPE html>
  <html>
    <head>
  		<title>Redirect Page</title>
  			<meta charset="UTF-8" />
  			<meta http-equiv="refresh" content="2;
            URL=
                @if (str_starts_with( $links -> link, 'http'))
                {{ $links -> link }}
                @else
                {{ 'https://' . $links -> link }}
                @endif
            " />

            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">

            <title>SiPalink</title>
            <meta content="" name="description">
            <meta content="" name="keywords">

            <!-- Favicons -->
            <link href={{ asset("assets/img/favicon.png") }} rel="icon">
            <link href={{ asset("assets/img/apple-touch-icon.png")}} rel="apple-touch-icon">

            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

            <!-- Vendor CSS Files -->
            <link href={{ asset("assets/vendor/aos/aos.css") }} rel="stylesheet">
            <link href={{ asset("assets/vendor/bootstrap/css/bootstrap.min.css") }} rel="stylesheet">
            <link href={{ asset("assets/vendor/bootstrap-icons/bootstrap-icons.css") }} rel="stylesheet">
            <link href={{ asset("assets/vendor/boxicons/css/boxicons.min.css") }} rel="stylesheet">
            <link href={{ asset("assets/vendor/glightbox/css/glightbox.min.css") }} rel="stylesheet">
            <link href={{ asset("assets/vendor/remixicon/remixicon.css")}} rel="stylesheet">
            <link href={{ asset("assets/vendor/swiper/swiper-bundle.min.css")}} rel="stylesheet">

            <!-- Template Main CSS File -->
            <link href={{ asset("assets/css/style.css") }} rel="stylesheet">

            <!-- =======================================================
            * Template Name: Arsha
            * Updated: Sep 18 2023 with Bootstrap v5.3.2
            * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
            * Author: BootstrapMade.com
            * License: https://bootstrapmade.com/license/
            ======================================================== -->
  	</head>
  	<body>
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row mb-2">
                    <div class="d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                        <h1>Please Wait ... </h1>
                    </div>
                </div>

                <div class="row">
                    <div class="d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                        <h2>You're redirect to
                            @if (str_starts_with( $links -> link, 'http'))
                            {{ $links -> link }}
                            @else
                            {{ 'https://' . $links -> link }}
                            @endif
                        </h2>
                    </div>
                </div>

                <div class="row mb-2 mt-2">
                    <div class="d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src={{ asset("assets/img/please-wait.png")}} class="img-fluid animated" alt="">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                        <h5 style="text-align: center; color:white">Jika Link tidak terbuka dalam waktu 3 detik, klik <a href="
                            @if (str_starts_with( $links -> link, 'http'))
                            {{ $links -> link }}
                            @else
                            {{ 'https://' . $links -> link }}
                            @endif
                        ">disini</a> untuk pergi ke link tujuan!</h5>


                    </div>
                </div>
            </div>



            {{-- <h1>Ini Tampilan Home</h1>
            {{ dd($links) }}

            <ol>
                @foreach(range('A', 'Z') as $letter)
                <li>
                    @if($links->title()->has($letter))
                    <a href="#{{ $letter }}">{{ $letter }}</a>
                    @else
                    <span class="disabled">{{ $letter }}</span>
                    @endif
                </li>
                @endforeach
            </ol> --}}

        </section><!-- End Hero -->

  	</body>

    <!-- Vendor JS Files -->
    <script src={{ asset("assets/vendor/aos/aos.js")}}></script>
    <script src={{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>
    <script src={{ asset("assets/vendor/glightbox/js/glightbox.min.js")}}></script>
    <script src={{ asset("assets/vendor/isotope-layout/isotope.pkgd.min.js")}}></script>
    <script src={{ asset("assets/vendor/swiper/swiper-bundle.min.js")}}></script>
    <script src={{ asset("assets/vendor/waypoints/noframework.waypoints.js")}}></script>
    <script src={{ asset("assets/vendor/php-email-form/validate.js")}}></script>

    <!-- Template Main JS File -->
    <script src={{ asset("assets/js/main.js")}}></script>

  </html>
