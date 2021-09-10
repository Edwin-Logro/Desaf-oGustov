
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>GUSTOV</title>
    <link rel="apple-touch-icon" href="{{ asset('ventas') }}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ventas') }}/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/app-assets/css/pages/faq.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('ventas') }}/assets/css/style.css">
</head>
  <div class="header-navbar-shadow"></div>
    <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name">Edwin Logro</span><span class="user-status text-muted">Administrador</span></div><span><img class="round" src="{{ asset ('ventas') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                                <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset('ventas') }}/html/ltr/vertical-menu-boxicons-template/index.html">
                        <div class="brand-logo"><img class="logo" src="{{asset('ventas') }}/app-assets/images/logo/logo.png" /></div>
                        <h2 class="brand-text mb-0">GUSTOV</h2>
                    </a></li>
               </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="">   
            <li class=" nav-item"><a href="#"><i class="bx bx-menu"></i><span class="menu-title" data-i18n="Menu Levels">Menú</span></a>    <ul class="menu-content">
                        <li><a href="{{ url('/menu/create') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Avatar">Register Menú</a>
                        </li>
                        <li><a href="{{ url('/menu/') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Divider">Lists Menu</span></a>
                        </li>
                    </ul>
                </li>
                </li>
                <li class=" nav-item"><a href="#"><i class="bx bx-menu"></i><span class="menu-title" data-i18n="Menu Levels">Sale</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ url('/invoice/create') }}"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Register Sale</span></a>
                        </li>
                        <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Second Level">Reports</span></a>
                            <ul class="menu-content">
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                                <li><a href="#"><i class="bx bx-right-arrow-alt"></i><span class="menu-item" data-i18n="Third Level">Third Level</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
 <script src="{{ asset('ventas') }}/app-assets/vendors/js/vendors.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/core/app-menu.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/core/app.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/components.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/footer.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/forms/wizard-steps.js"></script>
    <script src="{{ asset('ventas') }}/app-assets/js/scripts/pages/faq.js"></script>
