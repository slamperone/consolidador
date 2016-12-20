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
            </script> &copy; 2016  BGT Sistemas S.a. de C.v.
        </div>
        <div class="footer-items">
            <span class="go-top"><i class="clip-chevron-up"></i></span>
        </div>
    </div>
    <!-- end: FOOTER -->
    </div><!-- end: conCuchara-->
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
<?php if ($scriptsLoc){
     foreach ($scriptsLoc as $plus) {
        echo '<script type="text/javascript" src="'.base_url('assets/'.$plus).'"></script>';
    }
}
?>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {

            <?php if (isset($jsFunc)){
                
                    foreach ($jsFunc as $item) {
                    echo $item.".init();";
                }
            }
            ?>
        });


  Pace.on('start', function(e){
       // console.log('Pace.start')
    });
  Pace.on('done', function(e){
        //console.log('Pace.start')
        $('.conCuchara').fadeIn(1000);
        $('.dentro').css({
            'background-image':'<?= base_url('assets/images/menu-back2.jpg'); ?>',
            'background-size': '438px',
            'background-position':'left',
            'background-repeat': 'no-repeat', 
        });

    });
    Pace.start()

    </script>
</body>

</html>