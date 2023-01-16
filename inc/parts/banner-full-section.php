<div class="banner-full mb-5">
    <div class="container">
        <div class="row">
            <?php 
                $banners = new Banners();
                $result = $banners->getBannersMini();
                if ($result) :
                    while ( $banner = $result->fetch_object() ) : ?>

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php if ( $banner->link ) : ?>
                                <a href="<?php echo $banner->link; ?>">
                            <?php endif; ?>
                            <div class="banner-full__pic" style="background-image: url(<?php echo $banner->image; ?>);">
                                <?php if ($banner->title) : ?>
                                    <h2><?php echo $banner->title; ?></h2>
                                <?php endif; ?>
                                <?php if ($banner->text) : ?>
                                    <p><?php echo $banner->text; ?></p>
                                <?php endif; ?>
                            </div>
                            <?php if ( $banner->link ) : ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        
                <?php endwhile; 
                endif;
                $banners->closeConnection(); 
            ?>
        </div>
    </div>
</div>