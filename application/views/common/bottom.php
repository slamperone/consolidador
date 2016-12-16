 </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <!-- end: MAIN CONTAINER -->
    <!-- start: FOOTER -->
    <div class="footer clearfix">
        <div class="footer-inner">
            <script>
                document.write(new Date().getFullYear())
            </script> &copy; clip-one by cliptheme.
        </div>
        <div class="footer-items">
            <span class="go-top"><i class="clip-chevron-up"></i></span>
        </div>
    </div>
    <!-- end: FOOTER -->
    
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
     ); 

    foreach ($scripts as $script) {
        echo '<script type="text/javascript" src="'.base_url('assets/'.$script).'"></script>';
    }
     ?>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->     
<?php if ($scriptsBot){
     foreach ($scriptsBot as $plus) {
        echo '<script type="text/javascript" src="'.base_url('assets/'.$plus).'"></script>';
    }
}
?>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
            <?php if (isset($jsFunc)){
                echo $jsFunc.".init();";
            }
            ?>
        });
    </script>

</body>

</html>