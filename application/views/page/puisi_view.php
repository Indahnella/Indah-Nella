<div class="g-bg-position--center js__parallax-window" style="background: url(<?php echo base_url() ?>assets/img/1920x1080/09.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Jurnalis Nesas</p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Creative Puisi</h1>
            </div>
        </div>
<!-- Speakers -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">

<?php 
    foreach ($puisi->result() as $ya) {
        ?>
<div class="col-xs-4 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                    <!-- Speaker -->
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <div class="g-position--overlay g-padding-x-60--xs g-padding-y-60--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-20--xs g-font-size-26--sm g-color--white g-margin-b-0--xs"><?php echo $ya->judul_puisi; ?></h4>
                            </div>
                            <p class="g-font-weight--700"><?php echo $ya->data_entri; ?></p>
                            <br> <a href="<?php echo base_url().'index.php/puisi/view'; ?>" class="btn btn-info">Lihat Selengkapnya</a>
                        </div>
                    </div>
                    <!-- End Speaker -->
                </div>

    <?php
    }
 ?>

                </div>
            </div>
        </div>
        <!-- End Speakers -->