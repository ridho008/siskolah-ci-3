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
	                    Tambah Galeri
	                </div>
					<div class="panel-body">
						<?= form_open_multipart('admin/galeri/tambah'); ?>
                            <div class="form-group">
                            	<label for="nama">Nama Galeri</label>
                            	<input type="text" name="nama" class="form-control" placeholder="Nama Galeri">
                            	<small class="muted text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                            	<label for="sampul">Sampul</label>
                            	<input type="file" name="sampul" id="sampul" class="form-control-file">
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

