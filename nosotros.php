<?php require_once('inc/layout/head.php'); ?>

<!-- Header Section Begin -->
<?php require_once('inc/layout/header.php'); ?>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<?php if (Site::__HERO__) : ?>
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <?php require_once('inc/parts/categories.php'); ?>
            <?php require_once('inc/parts/search.php'); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<?php require_once('inc/parts/breadcrumb-section.php'); ?>
<!-- Breadcrumb Section End -->

<div class="container nosotros mt-5 mb-5">
    <div class="row">

        <div class="col-xs-12 col-sm-6">
            <h2 class="nosotros__title">Acerca de Nosotros</h2><hr>
            <p>Bul-Mak Ferretería Indsutrial es una división de <b>ARDUINO S.R.L.</b>, la cual es una empresa de alcance nacional, con más de treinta (30) años de experiencia en brindar soluciones en la fabricación de elementos metalmecánicos.</p>
            <p>Está orientada a brindar a nuestros clientes un trato personalizado, basado en el respeto y la seriedad, brindando soluciones acorde a las necesidades planteadas.</p>
            <p>Como empresa de servicios metalmecánicos posee todos sus recursos destinados a un mejor servicio técnico, potenciando el trato con nuestros clientes en función del crecimiento mutuo. Para esto el personal de <b>ARDUINO S.R.L.</b> cuenta con conocimientos técnicos avanzados y una capacitación permanente en las diferentes líneas de producción para desarrollar proyectos con la mejor relación costo beneficio.</p>
            <p>Está radicada en Bell Ville, Provincia de Córdoba, en un predio de 3600 mts2 con una superficie cubierta de 600 mts2. <b>ARDUINO S.R.L.</b> posee un local propio de exhibición, un amplio taller, máquinas y tornos modernos (CNC), para responder eficientemente a los requerimientos solicitados por nuestros clientes.</p>
        </div>

        <div class="col-xs-12 col-sm-6">
            <a href="img/empresa/empresa1.jpeg" data-lightbox="example-set" data-title="Empresa 1"><img class="mt-5 pt-3 pb-3" src="img/empresa/empresa1.jpeg" alt="empresa1"></a>
            <a href="img/empresa/empresa2.jpeg" data-lightbox="example-set" data-title="Empresa 2"><img class="mt-5 pt-3 pb-3" src="img/empresa/empresa2.jpeg" alt="empresa2"></a>
        </div>

        <div class="col-12 mt-5">
            <h3 class="nosotros__title">Galeria Exterior</h3><hr>
            <div class="nosotros__gallery">
                <?php 
                    $directory = "fotos/exterior/";
                    $directory_min = "fotos/exterior/min/";
                    $dirint = dir($directory);
                    while (($file = $dirint->read()) != false) :
                        if (strpos($file,'jpg') || strpos($file,'jpeg') || strpos($file,'png')) : ?>
                        <figure>
                            <a class="nosotros__item" href="<?php echo $directory . $file; ?>" data-lightbox="gallery-exterior" data-title="">
                                <img src="<?php echo $directory_min . $file; ?>" alt="">
                            </a>
                        </figure>
                        <?php endif; 
                    endwhile;
                    $dirint->close();
                ?>
            </div>
        </div>

        <div class="col-12 mt-5">
            <h3 class="nosotros__title">Galeria Interior</h3><hr>
            <div class="nosotros__gallery">
                <?php 
                    $directory = "fotos/";
                    $directory_min = "fotos/min/";
                    $dirint = dir($directory);
                    while (($file = $dirint->read()) != false) :
                        if (strpos($file,'jpg') || strpos($file,'jpeg') || strpos($file,'png')) : ?>
                        <figure>
                            <a class="nosotros__item" href="<?php echo $directory . $file; ?>" data-lightbox="gallery-interior" data-title="">
                                <img src="<?php echo $directory_min . $file; ?>" alt="">
                            </a>
                        </figure>
                        <?php endif; 
                    endwhile;
                    $dirint->close();
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section Begin -->
<?php require_once('inc/layout/footer.php'); ?>
<!-- Footer Section End -->