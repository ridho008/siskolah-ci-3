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
	    		<div class="row">
	    			<div class="col-md-6">
	    				<button type="button" class="btn btn-primary" style="margin-bottom: 10px;" data-toggle="modal" data-target="#modalMapel">
						    Tambah Data Mata Pelajaran
						</button>
						<?= $this->session->flashdata('pesan'); ?>
						<?php if(validation_errors()) : ?>
							<div class="alert alert-danger"><?= validation_errors(); ?></div>
						<?php endif; ?>
	    			</div>
	    		</div>
	    		<div class="panel panel-primary" style="margin-top: 10px;">
	                <div class="panel-heading">
	                    Daftar Mata Pelajaran
	                </div>
	                <!-- /.panel-heading -->
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
	                                    <th>Mata Pelajaran</th>
	                                    <th><i class="fa fa-cogs fa-fw"></i></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<?php $no = 1; foreach($mapel as $m) : ?>
	                            		<tr>
	                            			<td><?= $no++; ?></td>
	                            			<td><?= $m->nama_mapel; ?></td>
	                            			<td>
	                            				<button data-toggle="modal" data-target="#edit<?= $m->id_mapel; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil fa-fw"></i> Edit</button>
	                            				<a href="<?= base_url('admin/mapel/hapus/' . $m->id_mapel); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ?')"><i class="fa fa-trash fa-fw"></i> Hapus</a>
	                            			</td>
	                            		</tr>
	                            	<?php endforeach; ?>
	                            </tbody>
	                        </table>
	                    </div>
	                    <!-- /.table-responsive -->
	                </div>
	                <!-- /.panel-body -->
	            </div>
	    	</div>
	    </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->


<!-- Modal -->
<div class="modal fade" id="modalMapel" tabindex="-1" role="dialog" aria-labelledby="myModalMapel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalMapel">Tambah Mata Pelajaran</h4>
            </div>
            <div class="modal-body">
                <?= form_open('admin/mapel'); ?>
                <div class="form-group">
                	<label for="mapel">Mata Pelajaran</label>
                	<input type="text" name="mapel" class="form-control">
                	<small class="muted text-danger"><?= form_error('mapel'); ?></small>
                </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">Tambah</button>
	            </div>
                <?= form_close(); ?>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<?php foreach($mapel as $m) : ?>
<div class="modal fade" id="edit<?= $m->id_mapel; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalEditMapel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalEditMapel">Edit Mata Pelajaran</h4>
            </div>
            <div class="modal-body">
                <?= form_open('admin/mapel/edit/' . $m->id_mapel); ?>
                <div class="form-group">
                	<label for="mapel">Mata Pelajaran</label>
                	<input type="text" name="mapel" class="form-control" value="<?= $m->nama_mapel; ?>">
                	<small class="muted text-danger"><?= form_error('mapel'); ?></small>
                </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary">Edit</button>
	            </div>
                <?= form_close(); ?>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php endforeach; ?>