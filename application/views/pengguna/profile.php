
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h5 class="h5 mb-4 text-gray-800"><?= $title; ?></h5>

          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <!-- <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?> " class="card-img">
              </div> -->
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $pengguna['nama']; ?></h5>
                  <p class="card-text"><?= $pengguna['email']; ?></p>
                  <p class="card-text"><small class="text-muted">Anggota sejak <?= date('d F Y', $pengguna['tgl_buat']); ?></small></p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->      