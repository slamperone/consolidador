<?php 

$menu = array(
    array('title' => 'Tablero',
            'icon' => 'clip-compass',
                'link' => 'dashboard',
     ),
     array('title' => 'Catálogos',
            'icon' => 'clip-stack-empty',
                'link' => 'catalogo',
     ), 
     array('title' => 'Balanzas',
            'icon' => 'fa fa-balance-scale',
                'link' => 'balanza',
     ), 
     array('title' => 'Polizas',
            'icon' => 'fa fa-calendar-check-o',
                'link' => 'poliza',
     ),
     array('title' => 'Auxiliar ctas',
            'icon' => 'fa fa-book fa-fw',
                'link' => 'auxiliar',
     ),
     array('title' => 'Consolidar',
            'icon' => 'clip-fullscreen-exit',
                'link' => 'consolidar',
     ),

    );

 ?>

 <!-- start: MAIN CONTAINER -->
    <div class="main-container">
        <div class="navbar-content">
            <!-- start: SIDEBAR -->
            <div class="main-navigation navbar-collapse collapse">
                <!-- start: MAIN MENU TOGGLER BUTTON -->
                <div class="navigation-toggler">
                    <i class="clip-chevron-left"></i>
                    <i class="clip-chevron-right"></i>
                </div>
                <!-- end: MAIN MENU TOGGLER BUTTON -->
                <!-- start: MAIN NAVIGATION MENU -->
                <ul class="main-navigation-menu">
                <?php foreach ($menu as $item): ?>
                    <li>
                        <!--active open-->
                        <a href="<?= site_url($item['link']); ?>">
                            <i class="<?= $item['icon']; ?>"></i>
                            <span class="title"> <?= $item['title']; ?> </span><span class="selected"></span>
                        </a>
                    </li>
                <?php endforeach ?>   
                </ul>
                <!-- end: MAIN NAVIGATION MENU -->
            </div>
            <!-- end: SIDEBAR -->
        </div>
