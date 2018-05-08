 <div class="container g-padding-y-100--xs">
            <div class="s-portfolio">
                <div id="js__filters-portfolio-gallery" class="s-portfolio__filter-v1 cbp-l-filters-text cbp-l-filters-center">
                    <div data-filter="*" class="s-portfolio__filter-v1-item cbp-filter-item cbp-filter-item-active">KUMPULAN GAMBAR_GAMBAR</div>
                </div>
            </div>
        </div>
 <!-- Portfolio Gallery -->
        <div class="container">
            <div id="js__grid-portfolio-gallery" class="cbp">
                <!-- Item -->
                <?php 
                    foreach ($galeri->result() as $in) {
                        ?>

                    <div class="s-portfolio__item cbp-item logos motion">
                    <div class="s-portfolio__img-effect">
                        <img src="<?php echo base_url('upload/galeri/'. $in->gambar); ?>" alt="Portfolio Image">
                    </div>
                    <div class="s-portfolio__caption-hover--cc">
                        <div class="g-margin-b-25--xs">
                            <h2 class="g-font-size-18--xs g-color--white g-margin-b-5--xs"><?php echo $in->ket; ?></h2>
                            <p class="g-color--white-opacity"><?php echo $in->data; ?></p>
                        </div>
                        <ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
                            <li>
                                <a href="<?php echo base_url('upload/galeri/'. $in->gambar); ?>" class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle" data-title="<?php echo $in->ket; ?> <br/> <?php echo $in->data; ?>">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <?php
                    }
                 ?>
                       </div>
                <!-- Item -->
                

                 <!-- End Portfolio Gallery -->
        </div>
        <!-- End Portfolio -->