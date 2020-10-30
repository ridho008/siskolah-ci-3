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
	                    Tambah Siswa
	                </div>
					<div class="panel-body">
						<?= form_open_multipart('admin/siswa/tambah'); ?>
                            <div class="form-group">
                            	<label for="nis">NIS</label>
                            	<input type="number" name="nis" class="form-control" placeholder="nis">
                            	<small class="muted text-danger"><?= form_error('nis'); ?></small>
                            </div>
                            <div class="form-group">
                            	<label for="nama">Nama Siswa</label>
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
                            			<label for="kelas">Kelas</label>
                            			<select name="kelas" id="kelas" class="form-control">
                            				<option value="">-- Pilih Kelas --</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                            			</select>
                            			<small class="muted text-danger"><?= form_error('kelas'); ?></small>
                            		</div>	
                            	</div>
                            	<div class="col-lg-6">
                            		<div class="form-group">
                            			<label for="tgl_lahir">Tanggal Lahir</label>
                            			<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                            			<small class="muted text-danger"><?= form_error('tgl_lahir'); ?></small>
                            		</div>
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
					</div>
				</div>    		
	    	</div>
	    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

