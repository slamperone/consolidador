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

<body class="login example2">

    <div class="main-login col-sm-4 col-sm-offset-4">
        <div class="logo">
            P<i class="fa fa-pie-chart" aria-hidden="true"></i>RTAL DE CONSOLIDACIÓN
        </div>
        <!-- start: LOGIN BOX -->
        <div class="box-login">
            <h3>Bienvenido</h3>
            <p>
               Capture sus ceredenciales para acceder al sistema
            </p>
            <form class="form-login" action="">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> Usuario y/o contraseña inválido(s) reintente
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <i class="fa fa-user"></i>
                        </span>
                    </div>
                    <div class="form-group form-actions">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                            <a class="forgot" href="#">
                                Olvidé mi contraseña
                            </a>
                        </span|                    </div>
                    <div class="form-actions">
                        <label for="remember" class="checkbox-inline">
                            <input type="checkbox" class="grey remember" id="remember" name="remember">
                            Mantenerme logeado
                        </label>
                        <button type="submit" class="btn btn-primary pull-right">
                            Entrar ahora <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                    <!--div class="new-account">
                        Don't have an account yet?
                        <a href="#" class="register">
                            Create an account
                        </a>
                    </div-->
                </fieldset>
            </form>
        </div>
        <!-- end: LOGIN BOX -->
        <!-- start: FORGOT BOX -->
        <div class="box-forgot">
            <h3>Forget Password?</h3>
            <p>
                Enter your e-mail address below to reset your password.
            </p>
            <form class="form-forgot">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="form-actions">
                        <a class="btn btn-light-grey go-back">
                            <i class="fa fa-circle-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-bricky pull-right">
                            Submit <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- end: FORGOT BOX -->
        <!-- start: REGISTER BOX -->
        <div class="box-register">
            <h3>Sign Up</h3>
            <p>
                Enter your personal details below:
            </p>
            <form class="form-register">
                <div class="errorHandler alert alert-danger no-display">
                    <i class="fa fa-remove-sign"></i> You have some form errors. Please check below.
                </div>
                <fieldset>
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <div>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="F" name="gender">
                                Female
                            </label>
                            <label class="radio-inline">
                                <input type="radio" class="grey" value="M" name="gender">
                                Male
                            </label>
                        </div>
                    </div>
                    <p>
                        Enter your account details below:
                    </p>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="password" class="form-control" name="password_again" placeholder="Password Again">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="agree" class="checkbox-inline">
                                <input type="checkbox" class="grey agree" id="agree" name="agree">
                                I agree to the Terms of Service and Privacy Policy
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn btn-light-grey go-back">
                            <i class="fa fa-circle-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-bricky pull-right">
                            Submit <i class="fa fa-arrow-circle-right"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
        <!-- end: REGISTER BOX -->
        <!-- start: COPYRIGHT -->
        <div class="copyright">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; Develop by bgt sistemas sa de cv
        </div>
        <!-- end: COPYRIGHT -->
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