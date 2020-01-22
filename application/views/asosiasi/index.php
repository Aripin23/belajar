<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addAsosiasi">
                Tambah asosiasi
            </a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <?=$this->session->flashdata('notif')?>
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Asoisasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d ) {?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->nama?></td>
                            <td>
                            <?= '<a href=# onclick="editAsosiasi(\'' . $d->id . '\',\'' . $d->nama . '\')" class="btn btn-warning" data-toggle="modal" data-target="#editAsosiasi"><i class="fas fa-pencil-alt pr-2" aria-hidden="true"></i>Edit</a>';
                                ?>

                            <a onclick="return confirm('Apakah data akan dihapus ?')" href="<?= base_url('asosiasi/delete/'.$d->id) ?>" type="button" class="btn btn-danger"><i class="fas fa-trash pr-2" aria-hidden="true"></i>
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
<div class="modal fade" id="addAsosiasi" tabindex="-1" role="dialog" aria-labelledby="asosiasiModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="asosiasiModal">Tambah Asosiasi</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('asosiasi/save') ?>">
            <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-lg-2 col-form-label text-right">Nama</label>
                        <div class="col-9 col-lg-10">
                            <input id="nama" type="text" required="" name="nama" data-parsley-type="nama"
                                placeholder="nama" class="form-control">
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

<!-- Modal edit-->
<div class="modal fade" id="editAsosiasi" tabindex="-1" role="dialog" aria-labelledby="asosiasiModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="asosiasiModal">Edit Asosiasi</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('asosiasi/edit') ?>">
            <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-lg-2 col-form-label text-right">Nama</label>
                        <div class="col-9 col-lg-10">
                            <input type="hidden"  name="id" id="idAsosiasi">
                            <input id="namaAsosiasi" type="text" required="" name="nama" data-parsley-type="nama"
                                placeholder="nama" class="form-control">
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

<script>
function editAsosiasi(id,nama) {
    $('#idAsosiasi').val(id);
    $('#namaAsosiasi').val(nama);
}
</script>