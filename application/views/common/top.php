<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title><?= $page_title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('assets/icon.png'); ?>" />
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="Responsive Admin Template build with Twitter Bootstrap and jQuery" name="description" />
    <meta content="ClipTheme" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Raleway:400,100,200,300,500,600,700,800,900/" />

    <?php 
    $estilos = array('bower/bootstrap/dist/css/bootstrap.css',
					    'bower/font-awesome/css/font-awesome.min.css',
					    'bower/iCheck/skins/all.css',
					    'bower/perfect-scrollbar/css/perfect-scrollbar.min.css',
					    'bower/sweetalert/dist/sweetalert.css',
					    'fonts/clip-font.min.css',
					    'css/main.css',
					    'css/main-responsive.min.css',
					    'css/print.min.css',
					    'css/light.css',
					); 

    foreach ($estilos as $estilo) {
    	echo '<link type="text/css" rel="stylesheet" ';
					if ($estilo == "css/print.min.css"){
						echo 'media="print"'; 
						}elseif($estilo == "css/light.min.css") { 
							echo 'id="skin_color"';
						}
    	echo ' href="'.base_url('assets/'.$estilo).'" />';
    }
     ?>
</head>
<body>
 <!-- start: HEADER -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <!-- start: TOP NAVIGATION CONTAINER -->
        <div class="container">
            <div class="navbar-header">
                <!-- start: RESPONSIVE MENU TOGGLER -->
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="clip-list-2"></span>
            </button>
                <!-- end: RESPONSIVE MENU TOGGLER -->
                <!-- start: LOGO -->
                <a class="navbar-brand" href="<?= base_url('dashboard'); ?>">
                 P<i class="fa fa-pie-chart" aria-hidden="true"></i>RTAL DE CONSOLIDACIÓN
            </a>
                <!-- end: LOGO -->
            </div>
            <div class="navbar-tools">
                <!-- start: TOP NAVIGATION MENU -->
                <ul class="nav navbar-right">
                 
                   
                    <!-- start: MESSAGE DROPDOWN ->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
                            <i class="clip-bubble-3"></i>
                            <span class="badge"> 9</span>
                        </a>
                        <ul class="dropdown-menu posts">
                            <li>
                                <span class="dropdown-menu-title"> You have 9 messages</span>
                            </li>
                            <li>
                                <div class="drop-down-wrapper">
                                    <ul>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-2.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Nicole Bell</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time"> Just Now</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-1.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Peter Clark</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">2 mins</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-3.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Steven Thompson</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">8 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-1.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Peter Clark</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">9 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="clearfix">
                                                    <div class="thread-image">
                                                        <img alt="" src="./assets/images/avatar-5.jpg">
                                                    </div>
                                                    <div class="thread-content">
                                                        <span class="author">Kenneth Ross</span>
                                                        <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                        <span class="time">14 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="view-all">
                                <a href="pages_messages.html">
                                See all messages <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            </li>
                        </ul>
                    </li>
                    < ! -- end: MESSAGE DROPDOWN -->
                    <!-- start: USER DROPDOWN -->
                    <li class="dropdown current-user">
                        <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                            <img src="<?= base_url('assets/images/guy32.png'); ?>" class="circle-img" alt="">
                            <span class="username">Juan Perez</span>
                            <i class="clip-chevron-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <i class="clip-user-2"></i> &nbsp;Mi perfil
                                </a>
                            </li>
                            <!--li>
                                <a href="pages_calendar.html">
                                    <i class="clip-calendar"></i> &nbsp;My Calendar
                                </a>
                                <li>
                                    <a href="pages_messages.html">
                                        <i class="clip-bubble-4"></i> &nbsp;My Messages (3)
                                    </a>
                                </li-->
                                <li class="divider"></li>
                                <li>
                                    <a href="<?= site_url('dashboard/lock'); ?>">
                                        <i class="clip-locked"></i> &nbsp;Bloquear Pantalla
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= site_url('login'); ?>">
                                        <i class="clip-exit"></i> &nbsp;Cerrar sesión
                                    </a>
                                </li>
                        </ul>
                        </li>
                        <!-- end: USER DROPDOWN -->
                        <!-- start: PAGE SIDEBAR TOGGLE -->
                        <li>
                            <a class="sb-toggle" href="#"><i class="fa fa-outdent"></i></a>
                        </li>
                        <!-- end: PAGE SIDEBAR TOGGLE -->
                </ul>
                <!-- end: TOP NAVIGATION MENU -->
            </div>
        </div>
        <!-- end: TOP NAVIGATION CONTAINER -->
    </div>
    <!-- end: HEADER -->