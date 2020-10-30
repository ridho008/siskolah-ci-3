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
	                    Tambah Pengumuman
	                </div>
					<div class="panel-body">
						<?= form_open('admin/pengumuman/tambah'); ?>
                            <div class="form-group">
                            	<label for="judul">Judul Pengumuman</label>
                            	<input type="text" name="judul" class="form-control" placeholder="Judul Pengumuman">
                            	<small class="muted text-danger"><?= form_error('judul'); ?></small>
                            </div>
                            <div class="form-group">
                            	<label for="isi">Isi Pengumuman</label>
                            	<textarea name="isi" id="isi" class="form-control" placeholder="Isi Pengumuman"></textarea>
                            	<small class="muted text-danger"><?= form_error('isi'); ?></small>
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

