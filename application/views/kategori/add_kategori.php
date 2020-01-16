<div class="right_col" role="main">
    <div class="col-md-6 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Kategori</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
                <form class="form-horizontal form-label-left" action="<?= base_url('Kategori/create')?>" method="post">
                    <div class="form-group row ">
                        <label class="control-label col-md-3 col-sm-3 ">Nama</label>
                        <div class="col-md-9 col-sm-9 ">
                            <input name="nama" type="text" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-9 col-sm-9  offset-md-3">
                            <button type="button" class="btn btn-primary">Cancel</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>