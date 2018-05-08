
        <!-- FA Questions Text -->
        <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
            <?php 
                foreach ($view->result() as $aa) {
            ?>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs"><?php echo $aa->judul_berita ?></h2>
            <div class="row g-margin-b-50--xs">
                <div class="col-sm-2">
                <?php echo $aa->data_entri; ?>
                </div>
              <div class="col-sm-10">
                <?php echo $aa->isi_berita ?>
                </div>
            </div>
            <div class="g-text-center--xs">
                <p class="g-margin-b-5--xs">Wassalamualaikum Wr, Wb.</p>
            </div>
            <?php
                    }
                 ?> 
        </div>
        <!-- End FA Questions Text -->