<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $title; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
	    <div class="row">
	    	<div class="col-lg">
				<div class="panel panel-primary">
					<div class="panel-heading">
	                    Tambah Foto Galeri
	                </div>
					<div class="panel-body">
						<?= form_open_multipart('admin/download/tambah'); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nama">Nama File</label>
                                    <input type="text" name="nama" class="form-control" placeholder="nama file">
                                    <small class="muted text-danger"><?= form_error('nama'); ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="file">Upload File</label>
                                    <input type="file" name="file" id="file" class="form-control-file">
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            	<button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
						<?= form_close(); ?>
					</div>
				</div> 
	    	</div>
	    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

