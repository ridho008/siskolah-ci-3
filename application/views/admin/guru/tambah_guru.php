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
	                    Tambah Guru
	                </div>
					<div class="panel-body">
						<?= form_open_multipart('admin/guru/tambah'); ?>
                            <div class="form-group">
                            	<label for="nip">NIP</label>
                            	<input type="number" name="nip" class="form-control" placeholder="Nip">
                            	<small class="muted text-danger"><?= form_error('nip'); ?></small>
                            </div>
                            <div class="form-group">
                            	<label for="nama">Nama Guru</label>
                            	<input type="text" name="nama" class="form-control" placeholder="nama">
                            	<small class="muted text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="row">
                            	<div class="col-lg-6">
                            		<div class="form-group">
                            			<label for="tmp_lahir">Tempat Lahir</label>
                            			<input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control">
                            			<small class="muted text-danger"><?= form_error('tmp_lahir'); ?></small>
                            		</div>
                            		<div class="form-group">
                            			<label for="mapel">Mata Pelajaran</label>
                            			<select name="mapel" id="mapel" class="form-control">
                            				<option value="">-- Pilih Mata Pelajaran --</option>
                            				<?php foreach($mapel as $m) : ?>
                            					<option value="<?= $m->id_mapel; ?>"><?= $m->nama_mapel; ?></option>
                            				<?php endforeach; ?>
                            			</select>
                            			<small class="muted text-danger"><?= form_error('mapel'); ?></small>
                            		</div>	
                            	</div>
                            	<div class="col-lg-6">
                            		<div class="form-group">
                            			<label for="tgl_lahir">Tanggal Lahir</label>
                            			<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            			<small class="muted text-danger"><?= form_error('tgl_lahir'); ?></small>
                            		</div>
                            		<div class="form-group">
                            			<label for="pendidikan">Pendidikan</label>
                            			<select name="pendidikan" id="pendidikan" class="form-control">
                            				<option value="">-- Pilih Pendidikan --</option>
                            				<option value="S1">S1</option>
                            				<option value="S2">S2</option>
                            				<option value="S3">S3</option>
                            			</select>
                            			<small class="muted text-danger"><?= form_error('pendidikan'); ?></small>
                            		</div>
                            	</div>
                            </div>
                            <div class="form-group">
                            	<label for="foto">Foto</label>
                            	<input type="file" name="foto" id="foto" class="form-control-file">
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

