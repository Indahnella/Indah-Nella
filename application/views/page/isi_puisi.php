  <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">
<?php 
    foreach ($puisi->result() as $ya) {
        ?>
<div class="col-xs-12 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--black g-margin-b-0--xs"><?php echo $ya->judul_puisi; ?></h4>
                            </div>
                            <p><?php echo $ya->isi_puisi; ?></p>
                        </div>

    <?php
    }
 ?>