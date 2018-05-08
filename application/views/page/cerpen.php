<!--========== PROMO BLOCK ==========-->
        <div class="s-promo-block-v3 g-bg-position--center g-fullheight--sm" style="background: url('<?php echo base_url() ?>assets/img/1920x1080/09.jpg');">
            <div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
                <div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">Cerita Pendek</h1>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
                        <div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
                        <div class="row">
                            <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".4s">
                                    <p class="g-font-size-18--xs g-color--white-opacity">Halaman ini berisi kumpulan-kumpulan cerita pendek (cerpen) yang dibuat oleh siswa-siswi jurnalistik SMKN 1 Subang.</p>
                                </div>
                            </div>
                            <div class="col-sm-5 col-sm-offset-1">
                                <div class="clearfix">
                                    <div class="pull-left">
                                        <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                                            <span class="s-promo-block-v3__date g-font-size-80--xs g-font-size-90--lg g-font-weight--300 g-color--primary">Nesas</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
      <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Cerita Pendek Terbaru</p>
                </div>
                <div class="row">
                    <?php foreach ($cerpen->result() as $in) {
                        ?>
                        <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img style="width: 400px; height: 300px;" class="img-responsive" src="<?php echo base_url('upload/cerpen/'. $in->gambar_cerpen); ?>" alt="Image">
                            <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                                <p class="text-uppercase g-font-size-26--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $in->judul_cerpen; ?></p>
                                <a href="<?php echo base_url().'index.php/cerpen/view'; ?>" class="btn btn-info">Selengkapnya</a>
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