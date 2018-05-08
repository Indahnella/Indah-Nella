<!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">
                    <!-- Speaker -->
                    <?php 
                        foreach ($artikel->result() as $bla) {
                            ?>
                        <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                        <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <img style="width: 400px; height:290px;" class="img-responsive g-width-100-percent--xs" src="<?php echo base_url('upload/artikel/'. $bla->gambar_artikel); ?>" alt="Image">
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs"><?php echo $bla->judul_artikel; ?></h4>
                            </div>
                            <p class="g-font-weight--700"><?php echo $bla->data_entri; ?></p>
                            <a href="<?php echo base_url().'index.php/article/view'; ?>" class="btn btn-info" style="margin-left: 220px;">Selanjutnya</a>
                        </div>
                    </div>
                </div>

                    <?php
                        }
                     ?>
              
            </div>
        </div>
        <!-- End Speakers -->

      