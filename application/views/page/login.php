 <!--========== PAGE CONTENT ==========-->
        <div class="g-bg-position--center g-fullheight--xs" style="background: url('<?php echo base_url() ?>assets/img/1920x1080/08.jpg');">
            <div class="container js__ver-center-aligned">
                <div class="g-text-center--xs">
                    <div class="g-margin-t-40--xs g-margin-b-60--xs g-margin-b-80--sm">
                        <h1 class="g-font-size-32--xs g-font-size-50--sm g-font-size-60--md g-margin-b-30--xs" style="font-family: 'Pristina';">Selamat Login</h1>
                        <p class="g-font-size-20--md g-font-weight--300" style="font-family: 'Berlin Sans FB';">Berpikir Kritis Selalu Optimis!!</p>
                    </div>
                    <form action="<?php echo base_url('login/cek'); ?>" method="POST">
                        <div class="row g-margin-b-80--xs">
                            <div class="col-sm-4 col-sm-offset-2 col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--md">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <i class="s-form-v4__icon ti-user"></i>
                                    </span>
                                    <input type="text" class="form-control s-form-v4__input" name="username" placeholder="User Name">
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6 g-full-width--xs">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <i class="s-form-v4__icon ti-email"></i>
                                    </span>
                                    <input type="password" name="password" class="form-control s-form-v4__input" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--dark-brd g-radius--50 g-padding-x-50--xs g-margin-b-20--xs" name="submit" value="submit">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
        <!--========== END PAGE CONTENT ==========-->