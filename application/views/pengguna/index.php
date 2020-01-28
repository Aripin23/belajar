<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addPengguna">
                Tambah Pengguna
            </a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <?=$this->session->flashdata('notif')?>
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Tgl_Lahir</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d ) {?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->nama?></td>
                            <td><?= $d->alamat?></td>
                            <td><?= $d->username?></td>
                            <td><?= $d->password?></td>
                            <td><?= $d->email?></td>
                            <td><?= $d->tgl_lahir?></td>
                            <td><?= $d->role?></td>
                            <td>
                            <?= '<a href=# onclick="editAsosiasi(\'' . $d->id . '\',\'' . $d->nama . '\')" class="btn btn-warning" data-toggle="modal" data-target="#editPengguna"><i class="fas fa-pencil-alt pr-2" aria-hidden="true"></i>Edit</a>';
                                ?>

                            <a onclick="return confirm('Apakah data akan dihapus ?')" href="<?= base_url('pengguna/delete/'.$d->id) ?>" type="button" class="btn btn-danger"><i class="fas fa-trash pr-2" aria-hidden="true"></i>
                            Hapus
                            </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal add-->
<div class="modal fade" id="addPengguna" tabindex="-1" role="dialog" aria-labelledby="penggunaModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="penggunaModal">Tambah Pengguna</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('pengguna/save') ?>">
            <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-lg-2 col-form-label text-right">Nama</label>
                        <div class="col-9 col-lg-10">
                            <input id="nama" type="text" required="" name="nama" data-parsley-type="nama"
                                placeholder="Nama" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-3 col-lg-2 col-form-label text-right">Alamat</label>
                        <div class="col-9 col-lg-10">
                            <input id="alamat" type="text" required="" name="alamat" data-parsley-type="alamat"
                                placeholder="Alamat" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-3 col-lg-2 col-form-label text-right">Username</label>
                        <div class="col-9 col-lg-10">
                            <input id="username" type="text" required="" name="username" data-parsley-type="username"
                                placeholder="Username" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                        <div class="col-9 col-lg-10">
                            <input id="password" type="password" required="" name="password" data-parsley-type="password"
                                placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                        <div class="col-9 col-lg-10">
                            <input id="email" type="email" required="" name="email" data-parsley-type="email"
                                placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-3 col-lg-2 col-form-label text-right">Tgl_Lahir</label>
                        <div class="col-9 col-lg-10">
                            <input id="tgl_lahir" type="date" required="" name="tgl_lahir" data-parsley-type="tgl_lahir"
                                placeholder="Tgl_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-3 col-lg-2 col-form-label text-right">Role</label>
                        <div class="col-9 col-lg-10">
                            <input id="role" type="" required="" name="role" data-parsley-type="role"
                                placeholder="Role" class="form-control">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>


