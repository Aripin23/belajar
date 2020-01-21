<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addAsosiasi">
                Tambah Ems
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <?= '<a href=# onclick="editAsosiasi(\'' . $d->id . '\',\'' . $d->kode_ems . '\')" class="btn btn-warning" data-toggle="modal" data-target="#editAsosiasi">Edit</a>';
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