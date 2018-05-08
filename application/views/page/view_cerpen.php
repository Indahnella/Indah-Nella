      <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-text-center--xs g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">Cerita Pendek Terbaru</p>
                </div>
<div class="row">
                    <?php foreach ($cerpen->result() as $in) {
                        ?>
                        <div class="col-sm-12 g-margin-b-30--xs g-margin-b-0--md">
                        <!-- News -->
                        <article>
                            <img style="width: 400px; height: 300px; margin-left: 400px;" class="img-responsive" src="<?php echo base_url('upload/cerpen/'. $in->gambar_cerpen); ?>" alt="Image">
                                <p class="text-uppercase g-font-size-26--xs g-font-weight--700 g-color--primary g-letter-spacing--2"><?php echo $in->judul_cerpen; ?></p>
                                <p><?php echo $in->isi_cerpen; ?></p>
                            </div>
                        </article>
                        <!-- End News -->
                    </div>
                     <?php   
                    } 
                    ?>
