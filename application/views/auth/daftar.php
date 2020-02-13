
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Form Registrasi</h3>
                <p>Tolong masukan informasi anda.</p>
            </div>
            <form class="card-body" method="post" action="<?= base_url('/auth/daftar'); ?>">
                <div class="form-group">
                    <input class="form-control" type="text" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="email" name="email" placeholder="E-mail" value="<?= set_value('email'); ?>">
                    <?= form_error('email'); ?>
                </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" id="password" class="form-control" name="password1" placeholder="Password">
                        </div>
                        <!--<div class="col">
                            <input type="password" id="confirm_password" class="form-control" name="comfirm_password" placeholder="Konfirmasi Pass">
                            <span id="pesan"></span>
                        </div> -->
                    </div>
                <div class="form-group pt-2">
                    <input class="btn btn-block btn-primary" type="submit"></input>
                </div>
            </form>
            <div class="card-footer bg-white">
                <p>Sudah punya akun? <a href="<?= base_url('auth'); ?>" class="text-secondary">Login disini.</a></p>
            </div>
        </div>
</div>
