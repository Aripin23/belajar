<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Default Example <small>Users</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li>
                              <a class="btn btn-primary" href="<?= base_url('KodeEms/form_add');?>">Tambah</a>  
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <div id="datatable_wrapper"
                                        class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="dataTables_length" id="datatable_length"><label>Show <select
                                                            name="datatable_length" aria-controls="datatable"
                                                            class="form-control input-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div id="datatable_filter" class="dataTables_filter">
                                                    <label>Search:<input type="search" class="form-control input-sm"
                                                            placeholder="" aria-controls="datatable"></label></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="datatable"
                                                    class="table table-striped table-bordered dataTable no-footer"
                                                    style="width: 100%;" role="grid" aria-describedby="datatable_info">

                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="datatable" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="No: activate to sort column descending"
                                                                style="width: 72px;">No</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Nama asosiasi: activate to sort column ascending"
                                                                style="width: 121px;">Kode Ems</th>
                                                            <th class="sorting" tabindex="0" aria-controls="datatable"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Aksi: activate to sort column ascending"
                                                                style="width: 53px;">Aksi</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <!-- <div class="alert alert-success" role="alert">
                                                        Selamat, tambah data berhasil :)
                                                        </div> -->
                                                        <?php $no=1; foreach ($ems as $em) { ?>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1"><?= $no++ ?></td>
                                                            <td><?= $em->kode_ems ?></td>
                                                            <td>
                                                                <a href="<?= base_url('kodeEms/form_update/'.$em->id) ?>">Edit</a> | <a href="<?= base_url('kodeEms/delete/'.$em->id) ?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>


                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <div class="dataTables_info" id="datatable_info" role="status"
                                                    aria-live="polite">
                                                    Showing 31 to 40 of 57 entries</div>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="datatable_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button previous" id="datatable_previous"><a
                                                                href="#" aria-controls="datatable" data-dt-idx="0"
                                                                tabindex="0">Previous</a>
                                                        </li>
                                                        <li class="paginate_button "><a href="#"
                                                                aria-controls="datatable" data-dt-idx="1"
                                                                tabindex="0">1</a></li>
                                                        <li class="paginate_button "><a href="#"
                                                                aria-controls="datatable" data-dt-idx="2"
                                                                tabindex="0">2</a></li>
                                                        <li class="paginate_button "><a href="#"
                                                                aria-controls="datatable" data-dt-idx="3"
                                                                tabindex="0">3</a></li>
                                                        <li class="paginate_button active"><a href="#"
                                                                aria-controls="datatable" data-dt-idx="4"
                                                                tabindex="0">4</a></li>
                                                        <li class="paginate_button "><a href="#"
                                                                aria-controls="datatable" data-dt-idx="5"
                                                                tabindex="0">5</a></li>
                                                        <li class="paginate_button "><a href="#"
                                                                aria-controls="datatable" data-dt-idx="6"
                                                                tabindex="0">6</a></li>
                                                        <li class="paginate_button next" id="datatable_next"><a href="#"
                                                                aria-controls="datatable" data-dt-idx="7"
                                                                tabindex="0">Next</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>