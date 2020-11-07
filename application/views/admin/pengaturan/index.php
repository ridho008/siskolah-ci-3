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
	    	<div class="col-md">
	    		<?= $this->session->flashdata('pesan'); ?>
	    		<div class="panel panel-primary" style="margin-top: 10px;">
	                <div class="panel-heading">
	                    Pengaturan Website
	                </div>
	                <!-- /.panel-heading -->
	                <div class="panel-body">
	                	<?= form_open_multipart('admin/pengaturan'); ?>
	                    <div class="row">
	                    	<div class="col-md-6">
	                    		<div>
	                    		<img src="<?= base_url('assets/back/img/kepsek/' . $setting->foto_kepsek); ?>" class="img-thumbnail">
	                    		<input type="file" class="form-control-file" name="foto_kepsek">
	                    		<input type="hidden" value="<?= $setting->foto_kepsek; ?>" class="form-control-file" name="foto_kepsek_lama">
	                    		</div>
	                    	</div>
	                    	<div class="col-md-6">
	                    		<div class="form-group">
	                    			<label for="sekolah">Nama Sekolah</label>
	                    			<input type="text" name="sekolah" id="sekolah" class="form-control" value="<?= $setting->nama_sekolah; ?>">
	                    			<small class="muted text-danger"><?= form_error('sekolah'); ?></small>
	                    		</div>
	                    		<div class="form-group">
	                    			<label for="kepsek">Nama Kepala Sekolah</label>
	                    			<input type="text" name="kepsek" id="kepsek" class="form-control" value="<?= $setting->kepsek; ?>">
	                    			<small class="muted text-danger"><?= form_error('kepsek'); ?></small>
	                    		</div>
	                    		<div class="form-group">
	                    			<label for="nip">NIP</label>
	                    			<input type="text" name="nip" id="nip" class="form-control" value="<?= $setting->nip; ?>">
	                    			<small class="muted text-danger"><?= form_error('nip'); ?></small>
	                    		</div>
	                    		<div class="form-group">
	                    			<label for="telp">Telepon</label>
	                    			<input type="number" name="telp" id="telp" class="form-control" value="<?= $setting->telp; ?>">
	                    			<small class="muted text-danger"><?= form_error('telp'); ?></small>
	                    		</div>
	                    		<div class="form-group">
	                    			<label for="alamat">Alamat Sekolah</label>
	                    			<input type="text" name="alamat" id="alamat" class="form-control" value="<?= $setting->alamat; ?>">
	                    			<small class="muted text-danger"><?= form_error('alamat'); ?></small>
	                    		</div>
	                    	</div>
	                    </div>
	                    <hr>
	                    <div class="row">
	                    	<div class="col-md-4">
	                    		<div class="form-group">
	                    			<label for="visi">Visi</label>
	                    			<textarea name="visi" id="visi" class="form-control"><?= $setting->visi; ?></textarea>
	                    			<small class="muted text-danger"><?= form_error('visi'); ?></small>
	                    		</div>
	                    		<div class="form-group">
	                    			<button type="submit" class="btn btn-primary">Perbarui</button>
	                    		</div>
	                    	</div>
	                    	<div class="col-md-4">
	                    		<div class="form-group">
	                    			<label for="misi">Misi</label>
	                    			<textarea name="misi" id="misi" class="form-control"><?= $setting->misi; ?></textarea>
	                    			<small class="muted text-danger"><?= form_error('misi'); ?></small>
	                    		</div>
	                    	</div>
	                    	<div class="col-md-4">
	                    		<div class="form-group">
	                    			<label for="sejarah">Sejarah</label>
	                    			<textarea name="sejarah" id="sejarah" class="form-control"><?= $setting->sejarah; ?></textarea>
	                    			<small class="muted text-danger"><?= form_error('sejarah'); ?></small>
	                    		</div>
	                    	</div>
	                    </div>
	                    <?= form_close(); ?>
	                </div>
	                <!-- /.panel-body -->
	            </div>
	    	</div>
	    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

