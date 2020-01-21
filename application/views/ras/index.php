<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addRas">
                Tambah Ras
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Ras</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d ) {?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->nama_ras?></td>
                            <td>
                            <?= '<a href=# onclick="editAsosiasi(\'' . $d->id . '\',\'' . $d->nama_ras . '\')" class="btn btn-warning" data-toggle="modal" data-target="#editAsosiasi">Edit</a>';
                                ?>
                            <a onclick="return confirm('Apakah data akan dihapus ?')" href="<?= base_url('asosiasi/delete/'.$d->id) ?>" class="btn btn-danger">
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
<div class="modal fade" id="addRas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Ras</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('ras/save') ?>">
            <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama_ras" class="col-3 col-lg-2 col-form-label text-right">Nama Ras</label>
                        <div class="col-9 col-lg-10">
                            <input id="nama_ras" type="text" required="" name="nama_ras" data-parsley-type="nama_ras"
                                placeholder="nama ras" class="form-control">
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