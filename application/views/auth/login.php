
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../assets/images/logo.png" alt="logo"></a><span class="splash-description">Masukan data anggota anda.</span></div>
            <div class="card-body">
                <form class="user" method="post" action="<?= base_url('dashboard'); ?>">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="email" name="email" type="text" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <p>Belum punya akun? <a href="<?= base_url('auth/daftar'); ?>" class="footer-link">Buat akun.</a></p>
                </div>
            </div>
        </div>
    </div>
