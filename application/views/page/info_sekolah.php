<div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">INFORMASI SEKOLAH</p>
                </div>
                <div class="row">
                    

                    <?php 

                    foreach ($info->result() as $in) {
                        ?>

                        <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img style="width: 400px; height: 320px;" class="img-responsive" src="<?php echo base_url('upload/info/'. $in->gambar_info); ?>" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">
                                    <?php echo $in->data_entri; ?>
                                </p>
                                <h2 class="g-font-size-26--xs g-font-family--playfair g-letter-spacing--1"><a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes"><?php echo $in->judul_info; ?></a></h2>
                                <p><?php echo $in->isi_info; ?>.</p>
                                <a href="#" class="btn btn-primary">Selengkapnya</a>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>

                        <?php
                    }
                     ?>
                    
                    
                </div>
            </div>
        </div>
        <!-- End News -->


        <!-- End Feedback Form -->
        <!--========== END PAGE CONTENT ==========-->