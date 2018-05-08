<!--========== PAGE CONTENT ==========-->
        <!-- Mockup -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md">
                <?php 
                    foreach ($new->result() as $aa) {
                        ?>

                    <div class="row g-hor-centered-row--md g-row-col--5">
                    <div class="col-sm-6 col-sm-push-6 g-hor-centered-row__col">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs"><?php echo $aa->data_entri; ?></p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs"><?php echo $aa->judul_berita ?></h2>
                    <p class="g-font-size-18--sm"><?php echo $aa->isi_berita ?></p>
                <a href="<?php echo base_url().'index.php/News/view'; ?>" class="btn btn-success">Selengkapnya</a>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                    <img style="width: 400px; height: 400px;" class="img-responsive" src="<?php echo base_url('upload/berita/'. $aa->gambar_berita); ?>" alt="Mockup Image">
                </div>
            </div>
        </div> 
                <?php
                    }
                 ?> 
                
                </div>
            </div>
        </div>
        <!-- End Plan -->
