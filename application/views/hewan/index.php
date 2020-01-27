<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addHewan">
                Tambah hewan
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
                            <!-- <th>ID Ras</th> -->
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                            <!-- <th>ID Warna</th> -->
                            <!-- <th>No Pedigree Ibu</th> -->
                            <!-- <th>No Pedigree Ayah</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($data as $d ) {?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $d->nama?></td>
                            <!-- <td>< ?= $d->ras_id?></td> -->
                            <td><?= $d->tgl_lahir?></td>
                            <td><?= $d->jenis_kelamin?></td>
                            <!-- <td>< ?= $d->warna_id?></td> -->
                            <!-- <td>< ?= $d->no_pedigree_ibu?></td> -->
                            <!-- <td>< ?= $d->no_pedigree_ayah?></td> -->

                            <td>
                                <?= '<a href=# onclick="editHewan(\'' . $d->id . '\',\'' . $d->nama . '\')" class="btn btn-warning" data-toggle="modal" data-target="#editHewan"><i class="fas fa-pencil-alt pr-2" aria-hidden="true"></i>Edit</a>';
                                ?>

                                <a onclick="return confirm('Apakah data akan dihapus ?')"
                                    href="<?= base_url('hewan/delete/'.$d->id) ?>" type="button"
                                    class="btn btn-danger"><i class="fas fa-trash pr-2" aria-hidden="true"></i>
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
<div class="modal fade" id="addHewan" tabindex="-1" role="dialog" aria-labelledby="hewanodal" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hewanModal">Tambah Hewan</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form method="POST" action="<?= base_url('hewan/save') ?>">
                <div class="modal-body">
                    <div class="container col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <table class="table borderless" width="100%">
                                    <tr>
                                        <td colspan="2" height="300px">ini nanti muncul foto
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:center">
                                            <input type="file" name="foto" class="btn btn-default" value="Pilih File">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="nama" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td><input type="date" name="tgl_lahir" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><input type="text" name="jenis_kelamin" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:right">
                                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <!-- <div class="col-md-6">
                                <table class="table borderless">
                                    <tr>
                                        <td>No Pedigree</td>
                                        <td><input type="text" name="no_pedegree" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>No Pedegree Ibu</td>
                                        <td><input type="text" name="pedegree_ibu" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>No Pedegree Ayah</td>
                                        <td><input type="text" name="pedegree_ayah" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Asosiasi</td>
                                        <td><input type="text" name="asosiasi" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>JK</td>
                                        <td><input type="text" name="jenis_kelamin" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Warna</td>
                                        <td><input type="text" name="warna" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Ras</td>
                                        <td><input type="text" name="ras" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="text-align:right">
                                            <a href="#" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </td>
                                    </tr>
                                </table>
                            </div> -->
                        </div>
                    </div>
                </div>
        </div>
        <div class="modal-footer">

        </div>
        </form>

    </div>
</div>