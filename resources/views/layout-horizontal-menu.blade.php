<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Materialize - Material Design Admin Template</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->    
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav-->    
    <link href="css/layouts/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/jvectormap/jquery-jvectormap.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="js/plugins/chartist-js/chartist.min.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body id="layouts-horizontal">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="images/materialize-logo.png" alt="materialize logo"></a> <span class="logo-text">Materialize</span></h1></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize"/>
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen"><i class="mdi-action-settings-overscan"></i></a>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        
                        </a>
                        </li>                        
                        <li><a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse"><i class="mdi-communication-chat"></i></a>
                        </li>
                    </ul>
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                      <li>
                        <a href="#!"><img src="images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
                      </li>
                      <li>
                        <a href="#!"><img src="images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
                      </li>
                      
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      <li>
                        <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                      </li>
                      <li>
                        <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
                        <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                      </li>
                    </ul>
                </div>
            </nav>

            <!-- HORIZONTL NAV START-->
             <nav id="horizontal-nav" class="white hide-on-med-and-down">
                <div class="nav-wrapper">                  
                  <ul id="ul-horizontal-nav" class="left hide-on-med-and-down">
                    <li>
                        <a href="index.html" class="cyan-text">
                            <i class="mdi-action-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="app-email.html" class="cyan-text">
                            <i class="mdi-communication-email"></i>
                            <span>Kontak Kami</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="CSSdropdown">
                            <i class="mdi-action-invert-colors"></i>
                            <span>Tentang Kami<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="UIElementsdropdown">
                            <i class="mdi-image-palette"></i>
                            <span>Struktur Pusat<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="app-widget.html" class="cyan-text">
                            <i class="mdi-device-now-widgets"></i>
                            <span>Peta Lokasi</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Tablesdropdown">
                            <i class="mdi-editor-border-all"></i>
                            <span>Program Studi<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>Forms<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Pagesdropdown">
                            <i class="mdi-social-pages"></i>
                            <span>Pages<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Usersdropdown">
                            <i class="mdi-action-account-circle"></i>
                            <span>Users<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Chartsdropdown">
                            <i class="mdi-editor-insert-chart"></i>
                            <span>Charts<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                    
                  </ul>
                </div>
              </nav>

                <!-- CSSdropdown -->
                <ul id="CSSdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="css-typography.html" class="cyan-text">Sejarah</a></li>
                  <li><a href="css-icons.html" class="cyan-text">Visi & Misi</a></li>

                </ul>

                <!-- UIElementsdropdown-->
                <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="ui-buttons.html" class="cyan-text">Pimpinan Lembaga</a></li>
                  <li><a href="ui-badges.html" class="cyan-text">Tenaga Pengajar</a></li>
                    <li><a href="ui-badges.html" class="cyan-text">Karyawan Tata Usaha</a></li>

                </ul>

                <!-- Tablesdropdown -->
                <ul id="Tablesdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="table-basic.html" class="cyan-text">S1 Teknik Informatika</a></li>
                  <li><a href="table-data.html" class="cyan-text">S1 Pendidikan Teknologi Informasi</a></li>
                  <li><a href="table-data.html" class="cyan-text">S1 Sistem Informasi</a></li>
                  <li><a href="table-data.html" class="cyan-text">D3 Manajemen Informatika</a></li>

                </ul>

                <!-- Formsdropdown -->
                <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
                  <li><a href="form-elements.html" class="cyan-text">Form Elements</a></li>
                  <li><a href="form-layouts.html" class="cyan-text">Form Layouts</a></li>
                </ul>

                <!-- Pagesdropdown -->
                <ul id="Pagesdropdown" class="dropdown-content dropdown-horizontal-list">
                    
                    <li><a href="page-invoice.html" class="cyan-text">Invoice</a></li>
                    <li><a href="page-404.html" class="cyan-text">404</a></li>
                    <li><a href="page-500.html" class="cyan-text">500</a></li>
                    <li><a href="page-blank.html" class="cyan-text">Blank</a></li>
                </ul>

                <!-- eCommers -->
                <ul id="eCommersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="eCommerce-products-page.html"  class="cyan-text">eCommerce Products </a></li>
                    <li><a href="eCommerce-pricing.html"  class="cyan-text">Pricing Page</a></li>
                    <li><a href="eCommerce-invoice.html"  class="cyan-text">Invoice</a></li>
                </ul>

                <!-- Mediasdropdown -->
                <ul id="Mediasdropdown" class="dropdown-content dropdown-horizontal-list">                    
                    <li><a href="media-gallary-page.html"  class="cyan-text">Gallary Page</a></li>
                    <li><a href="media-hover-effects.html"  class="cyan-text">Image Hover Effects</a></li>
                </ul>

                <!-- Usersdropdown -->
                <ul id="Usersdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="user-profile-page.html"  class="cyan-text">User Profile</a></li>
                    <li><a href="user-login.html"  class="cyan-text">Login</a></li>
                    <li><a href="user-register.html" class="cyan-text">Register</a></li>
                    <li><a href="user-forgot-password.html" class="cyan-text">Forgot Password</a></li>                    
                    <li><a href="user-lock-screen.html" class="cyan-text">Lock Screen</a></li>
                    <li><a href="user-sesssion-timeout.html" class="cyan-text">Session Timeout</a></li>
                </ul>

                <!-- Chartsdropdown -->
                <ul id="Chartsdropdown" class="dropdown-content dropdown-horizontal-list">
                    <li><a href="charts-chartjs.html" class="cyan-text">Chart JS</a></li>
                    <li><a href="charts-chartist.html" class="cyan-text">Chartist</a></li>
                    <li><a href="charts-morris.html" class="cyan-text">Morris Charts</a></li>
                    <li><a href="charts-xcharts.html" class="cyan-text">xCharts</a></li>
                    <li><a href="charts-flotcharts.html" class="cyan-text">Flot Charts</a></li>
                    <li><a href="charts-sparklines.html" class="cyan-text">Sparkline Charts</a></li>
                </ul>
            <!-- HORIZONTL NAV END-->
            
            

        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav hide-on-large-only">
                <ul id="slide-out" class="side-nav leftside-navigation ">
                    <li class="user-details cyan darken-2">
                        <div class="row">
                            <div class="col col s4 m4 l4">
                                <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                            </div>
                            <div class="col col s8 m8 l8">
                                <ul id="profile-dropdown" class="dropdown-content">
                                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                                    </li>
                                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                                    </li>
                                </ul>
                                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                                <p class="user-roal">Administrator</p>
                            </div>
                        </div>
                    </li>
                    <li class="bold active"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                    </li>
                    <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>
                    </li>
                    <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i> CSS</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="css-typography.html">Typography</a>
                                        </li>                                        
                                        <li><a href="css-icons.html">Icons</a>
                                        </li>
                                        <li><a href="css-shadow.html">Shadow</a>
                                        </li>
                                        <li><a href="css-media.html">Media</a>
                                        </li>
                                        <li><a href="css-sass.html">Sass</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li><a href="ui-badges.html">Badges</a>
                                        </li>
                                        <li><a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li><a href="ui-collections.html">Collections</a>
                                        </li>
                                        <li><a href="ui-accordions.html">Accordian</a>
                                        </li>
                                        <li><a href="ui-tabs.html">Tabs</a>
                                        </li>
                                        <li><a href="ui-navbar.html">Navbar</a>
                                        </li>
                                        <li><a href="ui-pagination.html">Pagination</a>
                                        </li>
                                        <li><a href="ui-preloader.html">Preloader</a>
                                        </li>
                                        <li><a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li><a href="ui-media.html">Media</a>
                                        </li>
                                        <li><a href="ui-toasts.html">Toasts</a>
                                        </li>
                                        <li><a href="ui-tooltip.html">Tooltip</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="table-basic.html">Basic Tables</a>
                                        </li>
                                        <li><a href="table-data.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="form-elements.html">Form Elements</a>
                                        </li>
                                        <li><a href="form-layouts.html">Form Layouts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                                <div class="collapsible-body">
                                    <ul>                                        
                                        <li><a href="page-contact.html">Contact Page</a>
                                        </li>
                                        <li><a href="page-todo.html">ToDos</a>
                                        </li>
                                        <li><a href="page-blog-1.html">Blog Type 1</a>
                                        </li>
                                        <li><a href="page-blog-2.html">Blog Type 2</a>
                                        </li>
                                        <li><a href="page-404.html">404</a>
                                        </li>
                                        <li><a href="page-500.html">500</a>
                                        </li>
                                        <li><a href="page-blank.html">Blank</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-shopping-cart"></i> eCommers</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="eCommerce-products-page.html">Products Page</a>
                                        </li>                                        
                                        <li><a href="eCommerce-pricing.html">Pricing Table</a>
                                        </li>
                                        <li><a href="eCommerce-invoice.html">Invoice</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-image"></i> Medias</a>
                                <div class="collapsible-body">
                                    <ul>                                        
                                        <li><a href="media-gallary-page.html">Gallery Page</a>
                                        </li>
                                        <li><a href="media-hover-effects.html">Image Hover Effects</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> User</a>
                                <div class="collapsible-body">
                                    <ul>     
                                        <li><a href="user-profile-page.html">User Profile</a>
                                        </li>                                   
                                        <li><a href="user-login.html">Login</a>
                                        </li>                                        
                                        <li><a href="user-register.html">Register</a>
                                        </li>
                                        <li><a href="user-forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li><a href="user-lock-screen.html">Lock Screen</a>
                                        </li>                                        
                                        <li><a href="user-session-time-out.html">Session Timeout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li><a href="charts-chartjs.html">Chart JS</a>
                                        </li>
                                        <li><a href="charts-chartist.html">Chartist</a>
                                        </li>
                                        <li><a href="charts-morris.html">Morris Charts</a>
                                        </li>
                                        <li><a href="charts-xcharts.html">xCharts</a>
                                        </li>
                                        <li><a href="charts-flotcharts.html">Flot Charts</a>
                                        </li>
                                        <li><a href="charts-sparklines.html">Sparkline Charts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
                    <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>
                    </li>
                    <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>
                    </li>
                    <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>
                    </li>
                    <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>
                    </li>                    
                    <li class="li-hover"><div class="divider"></div></li>
                    <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="sample-chart-wrapper">                            
                                    <div class="ct-chart ct-golden-section" id="ct2-chart"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->
                    <div id="chart-dashboard">
                        <div class="row">
                            <div class="col s12 m8 l8">
                                <div class="card">
                                    <div class="card-move-up waves-effect waves-block waves-light">
                                        <div class="move-up cyan darken-1">
                                            <div>
                                                <span class="chart-title white-text">Revenue</span>
                                                <div class="chart-revenue cyan darken-2 white-text">
                                                    <p class="chart-revenue-total">$4,500.85</p>
                                                    <p class="chart-revenue-per"><i class="mdi-navigation-arrow-drop-up"></i> 21.80 %</p>
                                                </div>
                                                <div class="switch chart-revenue-switch right">
                                                    <label class="cyan-text text-lighten-5">
                                                      Month
                                                      <input type="checkbox">
                                                      <span class="lever"></span> Year
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="trending-line-chart-wrapper">
                                                <canvas id="trending-line-chart" height="70"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="col s12 m3 l3">
                                            <div id="doughnut-chart-wrapper">
                                                <canvas id="doughnut-chart" height="200"></canvas>
                                                <div class="doughnut-chart-status">4500
                                                    <p class="ultra-small center-align">Sold</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m2 l2">
                                            <ul class="doughnut-chart-legend">
                                                <li class="mobile ultra-small"><span class="legend-color"></span>Mobile</li>
                                                <li class="kitchen ultra-small"><span class="legend-color"></span> Kitchen</li>
                                                <li class="home ultra-small"><span class="legend-color"></span> Home</li>
                                            </ul>
                                        </div>
                                        <div class="col s12 m5 l6">
                                            <div class="trending-bar-chart-wrapper">
                                                <canvas id="trending-bar-chart" height="90"></canvas>                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by Month <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="id">ID</th>
                                                    <th data-field="month">Month</th>
                                                    <th data-field="item-sold">Item Sold</th>
                                                    <th data-field="item-price">Item Price</th>
                                                    <th data-field="total-profit">Total Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>January</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>February</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>March</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>April</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>May</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>June</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>July</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>August</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Septmber</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Octomber</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td>November</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                                <tr>
                                                    <td>12</td>
                                                    <td>December</td>
                                                    <td>122</td>
                                                    <td>100</td>
                                                    <td>$122,00.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>

                            <div class="col s12 m4 l4">
                                <div class="card">
                                    <div class="card-move-up teal waves-effect waves-block waves-light">
                                        <div class="move-up">
                                            <p class="margin white-text">Browser Stats</p>
                                            <canvas id="trending-radar-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-content  teal darken-2">
                                        <a class="btn-floating btn-move-up waves-effect waves-light darken-2 right"><i class="mdi-content-add activator"></i></a>
                                        <div class="line-chart-wrapper">
                                            <p class="margin white-text">Revenue by country</p>
                                            <canvas id="line-chart" height="114"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Revenue by country <i class="mdi-navigation-close right"></i></span>
                                        <table class="responsive-table">
                                            <thead>
                                                <tr>
                                                    <th data-field="country-name">Country Name</th>
                                                    <th data-field="item-sold">Item Sold</th>
                                                    <th data-field="total-profit">Total Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>USA</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>UK</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Canada</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Brazil</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>

                                                    <td>India</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>France</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Austrelia</td>
                                                    <td>65</td>
                                                    <td>$452.55</td>
                                                </tr>
                                                <tr>
                                                    <td>Russia</td>
                                                    <td>76</td>
                                                    <td>$452.55</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> New Clients</p>
                                        <h4 class="card-stats-number">566</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 15% <span class="green-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action  green darken-2">
                                        <div id="clients-bar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content pink lighten-1 white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> New Invoice</p>
                                        <h4 class="card-stats-number">1806</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-down"></i> 3% <span class="deep-purple-text text-lighten-5">from last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action  pink darken-2">
                                        <div id="invoice-line" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Today Profit</p>
                                        <h4 class="card-stats-number">$806.52</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 80% <span class="blue-grey-text text-lighten-5">from yesterday</span>
                                        </p>
                                    </div>
                                    <div class="card-action blue-grey darken-2">
                                        <div id="profit-tristate" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Sales</p>
                                        <h4 class="card-stats-number">$8990.63</h4>
                                        <p class="card-stats-compare"><i class="mdi-hardware-keyboard-arrow-up"></i> 70% <span class="purple-text text-lighten-5">last month</span>
                                        </p>
                                    </div>
                                    <div class="card-action purple darken-2">
                                        <div id="sales-compositebar" class="center-align"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--card widgets start-->
                    <div id="card-widgets">
                        <div class="row">

                            <div class="col s12 m12 l4">
                                <ul id="task-card" class="collection with-header">
                                    <li class="collection-header cyan">
                                        <h4 class="task-card-title">My Task</h4>
                                        <p class="task-card-date">March 26, 2015</p>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task1" />
                                        <label for="task1">Create Mobile App UI. <a href="#" class="secondary-content"><span class="ultra-small">Today</span></a>
                                        </label>
                                        <span class="task-cat teal">Mobile App</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task2" />
                                        <label for="task2">Check the new API standerds. <a href="#" class="secondary-content"><span class="ultra-small">Monday</span></a>
                                        </label>
                                        <span class="task-cat purple">Web API</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task3" checked="checked" />
                                        <label for="task3">Check the new Mockup of ABC. <a href="#" class="secondary-content"><span class="ultra-small">Wednesday</span></a>
                                        </label>
                                        <span class="task-cat pink">Mockup</span>
                                    </li>
                                    <li class="collection-item dismissable">
                                        <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
                                        <label for="task4">I did it !</label>
                                        <span class="task-cat cyan">Mobile App</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="col s12 m6 l4">
                                <div id="flight-card" class="card">
                                    <div class="card-header amber darken-2">
                                        <div class="card-title">
                                            <h4 class="flight-card-title">Flight</h4>
                                            <p class="flight-card-date">June 18, Thu 04:50</p>
                                        </div>
                                    </div>
                                    <div class="card-content-bg white-text">
                                        <div class="card-content">
                                            <div class="row flight-state-wrapper">
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">LDN</h4>
                                                        <p class="ultra-small">London</p>
                                                    </div>
                                                </div>
                                                <div class="col s2 m2 l2 center-align">
                                                    <i class="mdi-device-airplanemode-on flight-icon"></i>
                                                </div>
                                                <div class="col s5 m5 l5 center-align">
                                                    <div class="flight-state">
                                                        <h4 class="margin">SFO</h4>
                                                        <p class="ultra-small">San Francisco</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6 m6 l6 center-align">
                                                    <div class="flight-info">
                                                        <p class="small"><span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                                                        <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                                                        <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> B</p>
                                                    </div>
                                                </div>
                                                <div class="col s6 m6 l6 center-align flight-state-two">
                                                    <div class="flight-info">
                                                        <p class="small"><span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                                                        <p class="small"><span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                                                        <p class="small"><span class="grey-text text-lighten-4">Terminal:</span> C</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col s12 m6 l4">
                                <div id="profile-card" class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img class="activator" src="images/user-bg.jpg" alt="user background">
                                    </div>
                                    <div class="card-content">
                                        <img src="images/avatar.jpg" alt="" class="circle responsive-img activator card-profile-image">
                                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                            <i class="mdi-action-account-circle"></i>
                                        </a>

                                        <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>

                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4">Roger Waters <i class="mdi-navigation-close right"></i></span>
                                        <p>Here is some more information about this card.</p>
                                        <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Project Manager</p>
                                        <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                                        <p><i class="mdi-communication-email cyan-text text-darken-2"></i> mail@domain.com</p>
                                        <p><i class="mdi-social-cake cyan-text text-darken-2"></i> 18th June 1990</p>
                                        <p><i class="mdi-device-airplanemode-on cyan-text text-darken-2"></i> BAR - AUS</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <!-- blog card -->
                            <div class="col s12 m12 l4">
                                <div class="blog-card" >
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img src="images/gallary/30.jpg" alt="blog-img">
                                    </div>
                                    <ul class="card-action-buttons">
                                        <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-social-share"></i></a>
                                        </li>                            
                                        <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                                        </li>
                                    </ul>
                                    <div class="card-content">
                                        <p class="row">
                                          <span class="left"><a href="">Web Design</a></span>
                                          <span class="right">18th June, 2015</span>
                                        </p>
                                        <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Materialize Featured Blog Post Card</a>
                                        </h4>                                        
                                        <div class="row">
                                          <div class="col s2">
                                            <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                                          </div>
                                          <div class="col s9"> By <a href="#">John Doe</a></div>
                                        </div>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                                        <p>Here is some more information about this blog that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <!-- product-card -->
                            <div class="col s12 m12 l4">
                                <div class="product-card">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light  pink accent-2">$189</a>
                                            <img src="images/gallary/33.jpg" alt="product-img">
                                        </div>
                                        <ul class="card-action-buttons">
                                            <li><a class="btn-floating waves-effect waves-light green accent-4"><i class="mdi-av-repeat"></i></a>
                                            </li>
                                            <li><a class="btn-floating waves-effect waves-light red accent-2"><i class="mdi-action-favorite"></i></a>
                                            </li>
                                            <li><a class="btn-floating waves-effect waves-light light-blue"><i class="mdi-action-info activator"></i></a>
                                            </li>
                                        </ul>
                                        <div class="card-content">

                                            <div class="row">
                                                <div class="col s8">
                                                    <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Featured Product of The Month</a>
                                                    </p>
                                                </div>
                                                <div class="col s4 no-padding">
                                                    <a href=""></a><img src="images/amazon.jpg" alt="amazon" class="responsive-img">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4"><i class="mdi-navigation-close right"></i> Apple MacBook Pro A1278 13"</span>
                                            <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- map-card -->
                            <div class="col s12 m12 l4">
                                <div class="map-card">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                                        </div>
                                        <div class="card-content">                    
                                            <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                                                <i class="mdi-maps-pin-drop"></i>
                                            </a>
                                            <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Company Name LLC</a>
                                            </h4>
                                            <p class="blog-post-content">Some more information about this company.</p>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Company Name LLC <i class="mdi-navigation-close right"></i></span>                   
                                            <p>Here is some more information about this company. As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results.Some more information about this company.</p>
                                            <p><i class="mdi-action-perm-identity cyan-text text-darken-2"></i> Manager Name</p>
                                            <p><i class="mdi-communication-business cyan-text text-darken-2"></i> 125, ABC Street, New Yourk, USA</p>
                                            <p><i class="mdi-action-perm-phone-msg cyan-text text-darken-2"></i> +1 (612) 222 8989</p>
                                            <p><i class="mdi-communication-email cyan-text text-darken-2"></i> support@geekslabs.com</p>                    
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <!--card widgets end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->

                    <!--work collections start-->
                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-file-folder circle light-blue darken-2"></i>
                                        <span class="collection-header">Projects</span>
                                        <p>Your Favorites</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Web App</p>
                                                <p class="collections-content">AEC Company</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat cyan">Development</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-1"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Mobile App for Social</p>
                                                <p class="collections-content">iSocial App</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat grey darken-3">UI/UX</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-2"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">Website</p>
                                                <p class="collections-content">MediTab</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat teal">Marketing</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-3"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">AdWord campaign</p>
                                                <p class="collections-content">True Line</p>
                                            </div>
                                            <div class="col s3">
                                                <span class="task-cat green">SEO</span>
                                            </div>
                                            <div class="col s3">
                                                <div id="project-line-4"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-bug-report circle red darken-2"></i>
                                        <span class="collection-header">Issues</span>
                                        <p>Assigned to you</p>
                                        <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#102</strong> Home Page</p>
                                                <p class="collections-content">Web Project</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat pink accent-2">P1</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                     <div class="determinate" style="width: 70%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#108</strong> API Fix</p>
                                                <p class="collections-content">API Project </p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat yellow darken-4">P2</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 40%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#205</strong> Profile page css</p>
                                                <p class="collections-content">New Project </p>
                                            </div>
                                            <div class="col s2">                                                
                                                <span class="task-cat light-green darken-3">P3</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                    <div class="determinate" style="width: 95%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"><strong>#188</strong> SAP Changes</p>
                                                <p class="collections-content">SAP Project</p>
                                            </div>
                                            <div class="col s2">
                                                <span class="task-cat pink accent-2">P1</span>
                                            </div>
                                            <div class="col s3">
                                                <div class="progress">
                                                     <div class="determinate" style="width: 10%"></div>   
                                                </div>                                                
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--work collections end-->

                    <!-- Floating Action Button -->
                    <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                        <a class="btn-floating btn-large">
                          <i class="mdi-action-stars"></i>
                        </a>
                        <ul>
                          <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                          <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                          <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                          <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                        </ul>
                    </div>
                    <!-- Floating Action Button -->

                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                    <a href="#" data-activates="chat-out" class="chat-close-collapse right"><i class="mdi-navigation-close"></i></a>
                    <div id="right-search" class="row">
                        <form class="col s12">
                            <div class="input-field">
                                <i class="mdi-action-search prefix"></i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Search</label>
                            </div>
                        </form>
                    </div>
                    </li>
                    <li class="li-hover">
                        <ul class="chat-collapsible" data-collapsible="expandable">
                        <li>
                            <div class="collapsible-header teal white-text active"><i class="mdi-social-whatshot"></i>Recent Activity</div>
                            <div class="collapsible-body recent-activity">
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-add-shopping-cart"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">just now</a>
                                        <p>Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-device-airplanemode-on"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Yesterday</a>
                                        <p>Your Next flight for USA will be on 15th August 2015.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-store"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">Last Week</a>
                                        <p>Jessy Jay open a new store at S.G Road.</p>
                                    </div>
                                </div>
                                <div class="recent-activity-list chat-out-list row">
                                    <div class="col s3 recent-activity-list-icon"><i class="mdi-action-settings-voice"></i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#">5 Days Ago</a>
                                        <p>Natalya Parker Send you a voice mail for next conference.</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header light-blue white-text active"><i class="mdi-editor-attach-money"></i>Sales Repoart</div>
                            <div class="collapsible-body sales-repoart">
                                <div class="sales-repoart-list  chat-out-list row">
                                    <div class="col s8">Target Salse</div>
                                    <div class="col s4"><span id="sales-line-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Payment Due</div>
                                    <div class="col s4"><span id="sales-bar-1"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Delivery</div>
                                    <div class="col s4"><span id="sales-line-2"></span>
                                    </div>
                                </div>
                                <div class="sales-repoart-list chat-out-list row">
                                    <div class="col s8">Total Progress</div>
                                    <div class="col s4"><span id="sales-bar-2"></span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="collapsible-header red white-text"><i class="mdi-action-stars"></i>Favorite Associates</div>
                            <div class="collapsible-body favorite-associates">
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Eileen Sideways</p>
                                        <p class="place">Los Angeles, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Zaham Sindil</p>
                                        <p class="place">San Francisco, CA</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Renov Leongal</p>
                                        <p class="place">Cebu City, Philippines</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img online-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Weno Carasbong</p>
                                        <p>Tokyo, Japan</p>
                                    </div>
                                </div>
                                <div class="favorite-associate-list chat-out-list row">
                                    <div class="col s4"><img src="images/avatar.jpg" alt="" class="circle responsive-img offline-user valign profile-image">
                                    </div>
                                    <div class="col s8">
                                        <p>Nusja Nawancali</p>
                                        <p class="place">Bangkok, Thailand</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <!-- LEFT RIGHT SIDEBAR NAV-->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->



    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START FOOTER -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">World Market</h5>
                    <p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>
                    <div id="world-map-markers"></div>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Sales by Country</h5>
                    <p class="grey-text text-lighten-4">A sample polar chart to show sales by country.</p>
                    <div id="polar-chart-holder">
                        <canvas id="polar-chart-country" width="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.
                <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->


    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    

    <!-- chartist -->
    <script type="text/javascript" src="js/plugins/chartist-js/chartist.min.js"></script>   

    <!-- chartjs -->
    <script type="text/javascript" src="js/plugins/chartjs/chart.min.js"></script>
    <script type="text/javascript" src="js/plugins/chartjs/chart-script.js"></script>

    <!-- sparkline -->
    <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="js/plugins/sparkline/sparkline-script.js"></script>
    
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="js/plugins/jvectormap/vectormap-script.js"></script>    
    
    <!--google map-->
    <script type="text/javascript" src="js/plugins/google-map/google-map-script.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
    <!-- Toast Notification -->
    <script type="text/javascript">
    // Toast Notification
    $(window).load(function() {
        setTimeout(function() {
            Materialize.toast('<span>Hiya! I am a toast.</span>', 1500);
        }, 1500);
        setTimeout(function() {
            Materialize.toast('<span>You can swipe me too!</span>', 3000);
        }, 5000);
        setTimeout(function() {
            Materialize.toast('<span>You have new order.</span><a class="btn-flat yellow-text" href="#">Read<a>', 3000);
        }, 15000);
    });
    </script>
</body>

</html>