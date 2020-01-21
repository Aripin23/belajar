<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-header">
            <h5>Basic Table</h5>
            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#addAsosiasi">
                Launch demo modal
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
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
                            <td>edit | delete</td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addAsosiasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <form id="form" data-parsley-validate="" novalidate="">
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="email" required="" data-parsley-type="email"
                                placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputPassword2" type="password" required="" placeholder="Password"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Web Site</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputWebSite" type="url" required="" data-parsley-type="url" placeholder="URL"
                                class="form-control">
                        </div>
                    </div>
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span
                                    class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
    </div>
</div>