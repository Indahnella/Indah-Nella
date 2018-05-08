<div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">
<?php 
    foreach ($artikel->result() as $bla) {
		?>
<div class="col-xs-12 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
<h4 class="g-font-size-22--xs g-font-size-26--sm g-color--black g-margin-b-0--xs-text-center"><?php echo $bla->judul_artikel; ?></h4>
<p><?php echo $bla->isi_artikel; ?></p>
</div>
<?php
                        }
                     ?>
                 </div>
             </div>