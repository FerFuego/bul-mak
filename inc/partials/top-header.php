<?php if (SITE::__TOPHEADER__) : ?>

<div class="header__top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="header__top__left">
                    <ul>
                        <?php if ($general->email) : ?>
                            <li><i class="fa fa-envelope"></i> <?php echo $general->email; ?></li>
                        <?php endif; ?>
                        <?php if ($general->direccion) : ?>
                            <li><?php echo $general->direccion; ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="header__top__right">
                <?php if ($general->facebook || $general->instagram || $general->twitter) : ?>
                        <div class="header__top__right__social">
                            <?php if ($general->facebook) : ?>
                                <a href="<?php echo $general->facebook; ?>" targte="_blank"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if ($general->instagram) : ?>
                                <a href="<?php echo $general->instagram; ?>" targte="_blank"><i class="fa fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if ($general->twitter) : ?>
                                <a href="<?php echo $general->twitter; ?>" targte="_blank"><i class="fa fa-twitter"></i></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="header__top__right__auth">
                        <?php echo Site::getItemsSession(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>