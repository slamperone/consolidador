<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Portal de cosolidación V 0.1</title>
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

<body class="lock-screen bg_style_2">

    <div class="main-ls">
        <div class="logo">
            P<i class="fa fa-pie-chart" aria-hidden="true"></i>RTAL DE CONSOLIDACIÓN
        </div>
        <div class="box-ls">
            <img alt="" src="<?= base_url('assets/images/guy128.png'); ?>" />
            <div class="user-info">
                <h1><i class="fa fa-lock"></i> Juan Perez</h1>
                <span>juan@mail.com</span>
                <span><em>Escribe tu contraseña para desbloquear el sistema</em></span>
                <form action="<?= site_url('dashboard'); ?>">
                    <div class="input-group">
                        <input type="text" placeholder="Contraseña" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-blue" type="submit">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </span>
                    </div>
                    <div class="relogin">
                        <a href="<?= site_url('login'); ?>">
                            Entrar con otro usuario
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="copyright">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; Develop by bgt sistemas sa de cv
        </div>
    </div>

    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
            <script src="<?= base_url('assets/bowers/respond/dest/respond.min.js'); ?>"></script>
            <script src="<?= base_url('assets/bowers/Flot/excanvas.min.js'); ?>"></script>
            <script src="<?= base_url('assets/bowers/jquery-1.x/dist/jquery.min.js'); ?>"></script>
            <![endif]-->
    <!--[if gte IE 9]><!-->
    <script type="text/javascript" src="<?= base_url('assets/bower/jquery/dist/jquery.min.js'); ?>"></script>
    <!--<![endif]-->

    <?php 
    $scripts = array('bower/jquery-ui/jquery-ui.min.js',
    'bower/bootstrap/dist/js/bootstrap.min.js',
    'bower/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
    'bower/blockUI/jquery.blockUI.js',
    'bower/iCheck/icheck.min.js',
    'bower/perfect-scrollbar/js/min/perfect-scrollbar.jquery.min.js',
    'bower/jquery.cookie/jquery.cookie.js',
    'bower/sweetalert/dist/sweetalert.min.js',
    'bower/jquery-validation/dist/jquery.validate.min.js',
    'js/main.js',
    'js/login.js',
     ); 

    foreach ($scripts as $script) {
    	echo '<script type="text/javascript" src="'.base_url('assets/'.$script).'"></script>';
    }
     ?>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Login.init();
        });
    </script>

</body>

</html>