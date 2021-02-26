<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BnBMS - Admin</title>
    <link rel="stylesheet" href="{{ asset('public/panelAssets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/fonts/fontawesome5-overrides.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/css/Article-Sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/css/Footer-Basic.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('public/panelAssets/css/styles.css') }}">
</head>

<body>
<ul class="nav flex-column shadow-lg d-flex sidebar mobile-hid" style="background: #f9e8f6;">
    <li class="nav-item logo-holder">
        <div class="text-center text-black-50 logo py-4 mx-4"><a class="text-black-50 text-decoration-none" id="title" href="#"><strong>BnBms</strong></a><a class="text-black-50 float-right" id="sidebarToggleHolder" href="#"><i class="fas fa-bars" id="sidebarToggle"></i></a>
            <p class="text-monospace text-capitalize text-black-50" id="title" style="font-size: 10px;letter-spacing: 5px;">Admin Panel</p>
        </div>
    </li>
    <li class="nav-item"><a class="nav-link active text-left text-black-50 py-1 px-0" href="#"><i class="fas fa-tachometer-alt mx-3"></i><span class="text-nowrap mx-2">Dashboard</span></a></li>
    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-black-50 py-1 px-0 position-relative" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">Services</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
        <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a></div>
    </li>
    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-black-50 py-1 px-0 position-relative" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">Pages</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
        <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a></div>
    </li>
    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-black-50 py-1 px-0 position-relative" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">Appointment</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
        <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a></div>
    </li>
    <li class="nav-item"><a class="nav-link text-left text-black-50 py-1 px-0" href="#"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">Add Customer</span></a></li>
    <li class="nav-item"><a class="nav-link text-left text-black-50 py-1 px-0" href="#"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">Invoices</span></a><a class="nav-link text-left text-black-50 py-1 px-0" href="#"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">Customer List</span></a></li>
    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-left text-black-50 py-1 px-0 position-relative" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-sliders-h mx-3"></i><span class="text-nowrap mx-2">Reports</span><i class="fas fa-caret-down float-none float-lg-right fa-sm"></i></a>
        <div class="dropdown-menu border-0 animated fadeIn"><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a><a class="dropdown-item text-white" href="#"><span>Dropdown</span></a></div>
    </li>
    <li class="nav-item"></li>
    <li class="nav-item"><a class="nav-link text-left text-black-50 py-1 px-0" href="#"><i class="fas fa-chart-bar mx-3"></i><span class="text-nowrap mx-2">Search Invoice</span></a></li>
    <li class="nav-item"><a class="nav-link text-left text-black-50 py-1 px-0" href="{{ route('log-out') }}"><i class="fas fa-sign-out-alt mx-3"></i><i class="fa fa-caret-right d-none position-absolute"></i><span class="text-nowrap mx-2">Log out</span></a></li>
</ul>
<div class="container article-clean">
    <div class="row">
        <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
            <div class="text-center intro">
                <h1 class="text-center">Your Wonderful Article Title</h1>
                <p class="text-center"><span class="by">by</span> <a href="#">Author Name</a><span class="date">Sept 8th, 2016 </span></p><img class="img-fluid" src="{{ asset('public/panelAssets/img/desk.jpg') }}">
            </div>
            <div class="text">
                <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                <h2>Aliquam In Arcu </h2>
                <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                <figure><img class="figure-img" src="{{ asset('public/panelAssets/img/beach.jpg') }}">
                    <figcaption>Caption</figcaption>
                </figure>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('public/panelAssets/js/jquery.min.js') }}"></script>
<script src="{{ asset('public/panelAssets/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/panelAssets/js/bs-init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="{{ asset('public/panelAssets/js/sidebar.js') }}"></script>
</body>

</html>