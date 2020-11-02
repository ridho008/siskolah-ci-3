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
	                    Tambah Foto Galeri <strong><?= $galeri->nama_galeri; ?></strong>
	                </div>
					<div class="panel-body">
						<?= form_open_multipart('admin/galeri/tambahFoto/' . $galeri->id_galeri); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="keterangan">keterangan Foto</label>
                                    <input type="text" name="keterangan" class="form-control" placeholder="Keterangan Foto">
                                    <small class="muted text-danger"><?= form_error('keterangan'); ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" name="foto" id="foto" class="form-control-file">
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            	<button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
						<?= form_close(); ?>
                        <div class="row">
                            <?php foreach($foto as $f) : ?>
                            <div class="col-lg-3">
                                <label><?= $f->ket_foto ?></label>
                                <img src="<?= base_url('assets/back/img/foto_galeri/' . $f->foto); ?>" alt="" class="img-thumbnail">
                                <div class="text-center">
                                    <a href="<?= base_url('admin/galeri/hapusFoto/' . $f->id_foto) ?>" class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash fa-fw"></i></a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>  		
					</div>
				</div> 
	    	</div>
	    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

