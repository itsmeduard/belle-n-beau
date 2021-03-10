<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Belle N Beau</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="180x180" href="{{ asset('public/panelAssets/img/circle-cropped.png')}}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/css/styles.css')}}">

    {{--Toastr Notification--}}
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body style="font-family: font-family: &quot;Raleway&quot;, Helvetica, Arial, sans-serif;;">
    <div style="background: url(&quot;{{ asset('public/panelAssets/img/temp-header.png')}}&quot;) repeat;">
        <div class="jumbotron jumbotron-style">
            <div class="d-md-flex d-lg-flex justify-content-md-center justify-content-lg-center"><img class="img-fluid d-md-flex" data-aos="fade" data-aos-delay="350" data-aos-once="true" src="{{ asset('public/panelAssets/img/main_logo2.png')}}" alt="Belle-n-Beau" loading="eager" width="600" style="opacity: 1;filter: blur(0px) brightness(100%) contrast(100%) grayscale(0%) hue-rotate(0deg) invert(0%) saturate(100%) sepia(0%);"></div>
            <h4 class="text-uppercase text-center header-title" data-aos="fade" data-aos-delay="450" data-aos-once="true">Poblacion,Talibon,Bohol beside Blessed Trinity Cathedral</h4>
            <h4 class="text-uppercase text-center header-title" data-aos="fade" data-aos-delay="550" data-aos-once="true">(+63) 998-637-7363 | OPEN 8:00AM - 10:00Pm DAILY</h4>
            <p class="text-center pt-4"><a class="btn btn-light btn-lg text-secondary border rounded-pill visit-button" role="button" data-aos="fade" data-aos-delay="650" data-aos-once="true" href="#contact">Visit Us</a></p>
        </div>
    </div>
    <div class="container p-3">
        <div class="row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" data-aos="fade-down" data-aos-once="true"><a class="navbar-hover" href="#welcome">
                    <h1 class="text-capitalize text-center text-black-50 heading-navbar" style="font-family: &quot;Raleway&quot;, Helvetica, Arial, sans-serif;">Welcome</h1>
                </a></div>
            <div class="col-4" data-aos="fade-down" data-aos-once="true"><a class="navbar-hover" href="#services">
                    <h1 class="text-capitalize text-center text-black-50 heading-navbar">Services</h1>
                </a></div>
            <div class="col-4" data-aos="fade-down" data-aos-once="true"><a class="navbar-hover" href="#contact">
                    <h1 class="text-capitalize text-center text-black-50 heading-navbar">Contact</h1>
                </a></div>
        </div>
        <hr data-toggle="tooltip" data-bss-tooltip>
    </div>
    <div class="container pt-5 pb-5" id="welcome">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-6">
                <p>At <strong>Belle n Beau</strong>, we&nbsp;<em>really</em>&nbsp;care! We are a full service salon for nails and waxing, dedicated to providing excellent customer service, using high-quality products, and following the strictest sanitation practices.</p>
                <p>We're proud to provide a relaxing and comfortable atmosphere at a great value. We promise excellence and only use quality products from brands such as OPI, CND, Perfect Match, and Gelish.<br></p>
                <p style="font-size: 21px;">When you're here -- sit back and relax! Our friendly team of English-speaking staff are all licensed with&nbsp;<em>a minimum</em>&nbsp;of 2+ years of experience. We'll take care of everything and ensure that you leave happy with our service.<br></p>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-6">
                <div class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500" id="carousel-1">
                    <div class="carousel-inner">
                        <div class="carousel-item"><img class="img-fluid w-100 d-block" src="{{ asset('public/panelAssets/img/carousel4.jpg')}}" alt="Slide Image"></div>
                        <div class="carousel-item active"><img class="w-100 d-block" src="{{ asset('public/panelAssets/img/carousel2.jpg')}}" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="{{ asset('public/panelAssets/img/carousel1.jpg')}}" alt="Slide Image"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin-top: 20px;">Please visit us today -- we always welcome walk-ins! If you're in a time crunch, you can call or text&nbsp;(+63) 998-637-7363 for availability or to book a future appointment.<br></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="heading-line">
                    <h1 data-aos="zoom-in" data-aos-once="true">News</h1>
                </div>
                <p>We have just installed brand new, state-of-the-art&nbsp;<strong>pipeless spa pedicure chairs</strong>. The pipeless system provides the highest standard in cleanliness. Disposable pedicure liners are available for your pedicure service to provide additional protection. These chairs also feauture a variety of amazing massage functions. Come check them out!</p>
                <p><strong>UPDATE (12/04/2020):</strong>&nbsp;Our pedicure chair system passed 100% on the inspection by the State of Talibon, Board of Barbering and Cosmetology!<br></p>
            </div>
        </div>
    </div>
    <div id="services" style="background: #f9e8f6;background-size: 100% 100%;">
        <div class="container pt-5 pb-5">
            <div class="heading-line">
                <h1 data-aos="zoom-in" data-aos-once="true" style="background: #f9e8f6;">Available Services</h1>
            </div>
            <div class="pb-4">
                <ul class="nav nav-pills d-flex d-xl-flex justify-content-center justify-content-xl-center pb-2" role="tablist" style="margin: 15px;">
                    <li class="nav-item text-monospace" role="presentation"><a class="nav-link active" role="tab" data-toggle="pill" href="#tab-1" style="color: #b17d89;margin: 0px 5px;">HAIR</a></li>
                    <li class="nav-item text-monospace" role="presentation"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-2" style="margin: 0px 5px;color: #b17d89;">HAIR AND MAKE UP</a></li>
                    <li class="nav-item text-monospace" role="presentation"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-3" style="margin: 0px 5px;color: #b17d89;">FACE</a></li>
                    <li class="nav-item text-monospace" role="presentation"><a class="nav-link" role="tab" data-toggle="pill" href="#tab-4" style="margin: 0px 5px;color: #b17d89;">NAILS</a></li>
                </ul>
                <div class="tab-content" style="border-radius: 13px;box-shadow: 0 0 4px #b17d89;background: #f9f9f9;">
                    <div class="tab-pane fade show active" role="tabpanel" id="tab-1">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 p-5">
                                <h3 class="text-center">MANICURES &amp; PEDICURES<br></h3>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-striped table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Mani</th>
                                                <th>Pedi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Classic</strong></td>
                                                <td>₱15</td>
                                                <td>₱25</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Shellac/Gel</strong></td>
                                                <td>₱27</td>
                                                <td>₱37</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Aroma therapy Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱25</td>
                                                <td>₱35</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Royal Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱45</td>
                                                <td>₱55</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Children(10 &amp; under)</strong></td>
                                                <td>₱10</td>
                                                <td>₱15</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center align-items-md-center justify-content-xl-center align-items-xl-center">
                                <picture class="d-md-flex d-lg-flex d-xl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"><img class="img-fluid border rounded-pill d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" src="{{ asset('public/panelAssets/img/services2.jpg')}}" loading="lazy" alt="belle-n-beau-services-1" width="350"></picture>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="tab-2">
                        <div class="row">
                            <div class="col d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center align-items-md-center justify-content-xl-center align-items-xl-center">
                                <picture class="d-md-flex d-lg-flex d-xl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"><img class="img-fluid border rounded-pill d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" src="{{ asset('public/panelAssets/img/services2.jpg')}}" loading="lazy" alt="belle-n-beau-services-1" width="350"></picture>
                            </div>
                            <div class="col-sm-12 col-lg-6 p-5">
                                <h3 class="text-center">MANICURES &amp; PEDICURES<br></h3>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-striped table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Mani</th>
                                                <th>Pedi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Classic</strong></td>
                                                <td>₱15</td>
                                                <td>₱25</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Shellac/Gel</strong></td>
                                                <td>₱27</td>
                                                <td>₱37</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Aroma therapy Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱25</td>
                                                <td>₱35</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Royal Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱45</td>
                                                <td>₱55</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Children(10 &amp; under)</strong></td>
                                                <td>₱10</td>
                                                <td>₱15</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="tab-3">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 p-5">
                                <h3 class="text-center">MANICURES &amp; PEDICURES<br></h3>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-striped table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Mani</th>
                                                <th>Pedi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Classic</strong></td>
                                                <td>₱15</td>
                                                <td>₱25</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Shellac/Gel</strong></td>
                                                <td>₱27</td>
                                                <td>₱37</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Aroma therapy Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱25</td>
                                                <td>₱35</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Royal Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱45</td>
                                                <td>₱55</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Children(10 &amp; under)</strong></td>
                                                <td>₱10</td>
                                                <td>₱15</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center align-items-md-center justify-content-xl-center align-items-xl-center">
                                <picture class="d-md-flex d-lg-flex d-xl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"><img class="img-fluid border rounded-pill d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" src="{{ asset('public/panelAssets/img/services2.jpg')}}" loading="lazy" alt="belle-n-beau-services-1" width="350"></picture>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="tab-4">
                        <div class="row">
                            <div class="col d-flex d-sm-flex d-md-flex d-xl-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center align-items-md-center justify-content-xl-center align-items-xl-center">
                                <picture class="d-md-flex d-lg-flex d-xl-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"><img class="img-fluid border rounded-pill d-flex d-md-flex d-lg-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center align-items-xl-center" src="{{ asset('public/panelAssets/img/services2.jpg')}}" loading="lazy" alt="belle-n-beau-services-1" width="350"></picture>
                            </div>
                            <div class="col-sm-12 col-lg-6 p-5">
                                <h3 class="text-center">MANICURES &amp; PEDICURES<br></h3>
                                <div class="table-responsive table-borderless">
                                    <table class="table table-striped table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Mani</th>
                                                <th>Pedi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>Classic</strong></td>
                                                <td>₱15</td>
                                                <td>₱25</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Shellac/Gel</strong></td>
                                                <td>₱27</td>
                                                <td>₱37</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Aroma therapy Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱25</td>
                                                <td>₱35</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Royal Spa</strong><br>
                                                    <ul class="text-monospace">
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Aroma therapy Soak</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Callus Treatment*</strong></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>Sea Salt Scrub</strong><br></li>
                                                        <li style="font-weight: 100;font-size: 90%;line-height: 1.2;"><strong>SeaAroma Therapy Massage</strong><br>
                                                            <ul>
                                                                <li>Included in pedicures only</li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </td>
                                                <td>₱45</td>
                                                <td>₱55</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Children(10 &amp; under)</strong></td>
                                                <td>₱10</td>
                                                <td>₱15</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-radius: 13px;box-shadow: 0 0 4px #b17d89;background: #f9f9f9;">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-xl-4 offset-lg-0 d-xl-flex p-4" data-aos="fade-up" data-aos-delay="250" data-aos-once="true">
                        <div style="padding: 0px 25px;padding-top: 15px;">
                            <picture><img class="img-fluid" src="{{ asset('public/panelAssets/img/carousel5.jpg')}}" loading="lazy" width="300" height="300"></picture>
                            <h2 class="pt-2">Special Events</h2>
                            <p>Enjoy a serene spa experience while celebrating a special occasion with family and friends! We're the perfect venue for:<br></p>
                            <ul>
                                <li>birthday parties</li>
                                <li>bridal showers</li>
                                <li>corporate mani-pedi parties<br></li>
                                <li>any occasion!<br></li>
                            </ul>
                            <p>Please contact us to book your event!<br></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 d-xl-flex p-4" data-aos="fade-up" data-aos-delay="250" data-aos-once="true">
                        <div style="padding: 0px 25px;padding-top: 15px;">
                            <picture><img class="img-fluid" src="{{ asset('public/panelAssets/img/sanitation.jpg')}}" loading="lazy" width="300" height="300"></picture>
                            <h2 class="pt-2">Sanitation First!</h2>
                            <p>We take sanitation seriously! Many of our supplies are disposable and we disinfect all tools after every client. The safety of our clients is our top priority -- we use hospital-grade disinfectants and sterilizers to clean all tools to prevent cross-contamination.<br></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 d-xl-flex p-4" data-aos="fade-up" data-aos-delay="250" data-aos-once="true">
                        <div style="padding: 0px 25px;padding-top: 15px;">
                            <picture><img class="img-fluid" src="{{ asset('public/panelAssets/img/carousel6.jpg')}}" loading="lazy"></picture>
                            <h2 class="pt-2">About Us</h2>
                            <p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pt-5" id="contact">
        <div class="heading-line">
            <h1 data-aos="zoom-in" data-aos-once="true">Come Visit Us!</h1>
        </div>
        <h5 class="text-center pt-3 pb-4">We welcome both walk-ins and future appointments!<br></h5>
        <h4 class="text-center">POBLACION, TALIBON, BOHOL<br></h4>
        <h4 class="text-center">BESIDE BLESSED TRINITY CATHEDRAL<br></h4>
        <h4 class="text-center pb-5">(+63) 998-637-7363<br></h4><iframe allowfullscreen frameborder="0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBe0UW6gOv4_Dwzl5-dU6QTGARcB1hVAvg&amp;q=10.151376%2C124.3259057&amp;zoom=19&amp;maptype=satellite" width="100%" height="400"></iframe>
        <div class="row pt-5">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="250" data-aos-once="true">
                <div class="heading-line">
                    <h2 class="text-uppercase">store hours</h2>
                </div>
                <p><strong>Open Daily</strong>&nbsp;9:30am - 7:00pm<br></p>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="250" data-aos-once="true">
                <div class="heading-line">
                    <h2 class="text-uppercase">gift certificates</h2>
                </div>
                <p>Looking for a gift? How about a gift certificate to Belle N Beau? Treat your family, friends and co-workers to some Day Spa fun!<br></p>
            </div>
        </div>
        <div class="text-center">
            <picture><img class="img-fluid" src="{{ asset('public/panelAssets/img/logo_logo_logo.png')}}" width="400"></picture>
        </div>
        <div class="p-5">
            <p class="text-center">Designed by Neime Warriors © </p>
            <p class="text-center">2021 Belle n Beau.&nbsp;All Rights Reserved.<br></p>
        </div>
    </div>
    <div class="d-flex d-sm-flex d-md-flex d-lg-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center"><a class="btn btn-lg text-white border rounded-pill button-book-now pulse" role="button" data-aos="flip-up" data-aos-delay="50" style="background: #D4608C;font-family: &quot;Raleway&quot;, Helvetica, Arial, sans-serif;" href="#modal-booking" data-toggle="modal">Schedule Appointment</a></div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modal-booking">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="background: #f6f9f9;"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <div class="heading-line">
                        <h1 class="modal-title text-center" style="background: #f6f9f9;font-family: &quot;Playfair Display&quot;, &quot;Times New Roman&quot;, Times, serif;"><strong>Make an Appointment</strong></h1>
                    </div>
                    <hr class="modified-hr">
                    <p class="lead text-center p-3" style="font-family: &quot;Lato&quot;, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;line-height: 1.5;">The best way to enjoy a treatment at our salon is to book an appointment with the desired esthetician. Fill in the form below and we will contact you to discuss your appointment.<br></p>
                    <div class="form-group">
                        <form action='{{ route('appointment.store') }}' method='POST' enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-lg-6 p-2"><input class="border rounded-pill form-control" type="text" placeholder="Your Name" name="name" autocomplete="off" minlength="5" maxlength="50" required title="This field is required"></div>
                                <div class="col-lg-6 p-2"><input class="border rounded-pill form-control" type="text" placeholder="Your Email" autocomplete="off" inputmode="email" required maxlength="50" minlength="10" name="email"></div>
                                <div class="col-lg-6 p-2"><input class="border rounded-pill form-control" type="text"
                                                                 placeholder="Your Mobile" name="phone"
                                                                 autocomplete="off" minlength="9" maxlength="15"
                                                                 required></div>
                                <div class="col-lg-6 p-2"><select class="border rounded-pill custom-select" name="service" required>
                                        <optgroup label="Hair">
                                            <option value="Brazilian Blowout Short - 800php">Brazilian Blowout Short - 800php</option>
                                            <option value="Brazilian Blowout Long - 1000php">Brazilian Blowout Long - 1000php</option>
                                            <option value="Hair Rebound Short - 999php">Hair Rebound Short - 999php</option>
                                            <option value="Hair Rebound Long - 1499php">Hair Rebound Long - 1499php</option>
                                            <option value="Hair Color Short - 349php">Hair Color Short - 349php</option>
                                            <option value="Hair Color Long - 499php">Hair Color Long - 499php</option>
                                            <option value="Hot Oil">Hot Oil</option>
                                            <option value="Hair Cellophane">Hair Cellophane</option>
                                            <option value="Keratin Treatment">Keratin Treatment</option>
                                            <option value="Bleaching">Bleaching</option>
                                            <option value="Highlights">Highlights</option>
                                            <option value="Haircut">Haircut</option>
                                        </optgroup>
                                        <optgroup label="Hair &amp; Make up"></optgroup>
                                        <optgroup label="Face"></optgroup>
                                        <optgroup label="Nails"></optgroup>
                                        <optgroup label="Cautery"></optgroup>
                                        <optgroup label="Waxing"></optgroup>
                                    </select></div>
                                <div class="col-lg-6 p-2"><input class="border rounded-pill form-control" type="datetime-local" required name="schedule"></div>
                                <div class="col-lg-6 p-2"><select class="border rounded-pill custom-select" name="esthetician" required>
                                        <optgroup label="Select Esthetician">
                                            <option value="Random Esthetician" selected>Random Esthetician</option>
                                            <option value="Esthetician 1">Esthetician 1</option>
                                            <option value="Esthetician 2">Esthetician 2</option>
                                            <option value="Esthetician 3">Esthetician 3</option>
                                        </optgroup>
                                    </select></div>
                                <div class="col-lg-12 p-2"><textarea class="border rounded-pill form-control" name="note" autocomplete="off" spellcheck="false" required placeholder="&nbsp;&nbsp;Your comment"></textarea></div>
                                <div class="col-lg-12 p-2">
                                    <div class="custom-control text-center custom-switch"><input class="custom-control-input" type="checkbox" id="formCheck-1" required=""><label class="custom-control-label" for="formCheck-1">I agree to&nbsp;<a href="#" target="_blank">Terms &amp; Conditions</a>&nbsp;and&nbsp;<a href="#" target="_blank">Privacy Policy.</a></label></div>
                                </div>
                                <div class="col-lg-12 p-2 d-flex d-sm-flex d-lg-flex justify-content-center align-items-center
                                justify-content-sm-center align-items-sm-center justify-content-lg-center g-recaptcha"
                                     data-sitekey="6LdtrmgaAAAAANnzQbbXN6K7wsv3CMKsnTBZyz0a"></div>
                                <br><br>
                                <div class="col d-flex d-sm-flex d-lg-flex justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-lg-center pt-3">
                                    <button class="btn btn-outline-danger btn-lg border rounded-pill d-sm-flex" type="submit">Make An Appointment Now&nbsp;</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('public/panelAssets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('public/panelAssets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/panelAssets/js/bs-init.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        $("form").submit(function(event) {
            var recaptcha = $("#g-recaptcha-response").val();
            if (recaptcha === "") {
                event.preventDefault();
                alert("Please check the recaptcha");
            }
        });
    </script>

    {{--Toastr Notification--}}
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
</body>

</html>
