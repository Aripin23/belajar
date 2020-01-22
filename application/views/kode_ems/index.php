<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addEms">
                Tambah Ems
            </a>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <?=$this->session->flashdata('notif')?>
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Ems</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d ) {?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->kode_ems?></td>
                            <td>
                            <?= '<a href=# onclick="editEms(\'' . $d->id . '\',\'' . $d->kode_ems . '\')" class="btn btn-warning" data-toggle="modal" data-target="#editEms"><i class="fas fa-pencil-alt pr-2" aria-hidden="true"></i>Edit</a>';
                                ?>
                            <a onclick="return confirm('Apakah data akan dihapus ?')" href="<?= base_url('KodeEms/delete/'.$d->id) ?>" type="button" class="btn btn-danger"><i class="fas fa-trash pr-2" aria-hidden="true"></i>
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
<div class="modal fade" id="addEms" tabindex="-1" role="dialog" aria-labelledby="emsModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emsModal">Tambah Ems Kode</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('KodeEms/save') ?>">
            <div class="modal-body">
                    <div class="form-group row">
                        <label for="kode_ems" class="col-3 col-lg-2 col-form-label text-right">Kode Ems</label>
                        <div class="col-9 col-lg-10">
                            <input id="kode_ems" type="text" required="" name="kode_ems" data-parsley-type="kode_ems"
                                placeholder="kode ems" class="form-control">
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
<div class="modal fade" id="editEms" tabindex="-1" role="dialog" aria-labelledby="emsModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emsModal">Edit Ems</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('KodeEms/edit') ?>">
            <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-lg-2 col-form-label text-right">Kode Ems</label>
                        <div class="col-9 col-lg-10">
                            <input type="hidden"  name="id" id="idEms">
                            <input id="KodeEms" type="text" required="" name="kode_ems" data-parsley-type="KodeEms"
                                placeholder="kode ems" class="form-control">
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
function editEms(id,KodeEms) {
    $('#idEms').val(id);
    $('#KodeEms').val(KodeEms);
}
</script>