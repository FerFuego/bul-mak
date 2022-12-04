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

<!-- Slider Begin -->
<?php require_once('inc/parts/slider.php'); ?>
<!-- Slider End -->

<!-- Contact -->
<?php require_once('inc/parts/contact-data.php'); ?>
<!-- End Contact -->

<!-- Banner Begin -->
<?php //require_once('inc/parts/banner-section.php'); ?>
<!-- Banner End -->

<!-- Marcas Section Begin -->
<?php require_once('inc/parts/marcas-section.php'); ?>
<!-- Marcas Section End -->

<!-- Categories Section Begin -->
<?php //require_once('inc/parts/categories-section.php'); ?>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<?php //require_once('inc/parts/featured-products-section.php'); ?>
<!-- Featured Section End -->

<!-- Latest Product Section Begin -->
<?php //require_once('inc/parts/last-products-section.php'); ?>
<!-- Latest Product Section End -->

<!-- Blog Section Begin -->
<?php //require_once('inc/parts/blog-section.php'); ?>
<!-- Blog Section End -->

<!-- Footer Section Begin -->
<?php require_once('inc/layout/footer.php'); ?>
<!-- Footer Section End -->