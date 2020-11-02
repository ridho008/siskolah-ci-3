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
	                    Edit Berita
	                </div>
					<div class="panel-body">
						<?= form_open_multipart('admin/berita/edit/' . $berita->id_berita); ?>
                            <div class="form-group">
                            	<label for="judul">Judul</label>
                            	<input type="text" name="judul" class="form-control" placeholder="Judul Berita" value="<?= $berita->judul_berita; ?>">
                            	<small class="muted text-danger"><?= form_error('judul'); ?></small>
                            </div>
                            <div class="form-group">
                            	<label for="isi">Isi Berita</label>
                            	<textarea name="isi" id="editor1" cols="30" rows="10" class="form-control"><?= $berita->isi_berita; ?></textarea>
                            	<small class="muted text-danger"><?= form_error('isi'); ?></small>
                            </div>
                            <div class="form-group">
                            	<label for="foto">Foto</label><br>
                                <img src="<?= base_url('assets/back/img/berita/' . $berita->foto_berita); ?>" width="100px">
                            	<input type="file" name="foto" id="foto" class="form-control-file">
                                <input type="hidden" name="fotoBeritaLama" id="fotoBeritaLama" value="<?= $berita->foto_berita; ?>" class="form-control-file">
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

