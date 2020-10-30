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
	    				<a href="<?= base_url('admin/siswa/tambah'); ?>" class="btn btn-primary" style="margin-bottom: 10px;">
						    Tambah Data Siswa
						</a>
						<?= $this->session->flashdata('pesan'); ?>
						<?php if(validation_errors()) : ?>
							<div class="alert alert-danger"><?= validation_errors(); ?></div>
						<?php endif; ?>
	    			</div>
	    		</div>
	    		<div class="panel panel-primary" style="margin-top: 10px;">
	                <div class="panel-heading">
	                    Daftar Siswa
	                </div>
	                <!-- /.panel-heading -->
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
	                                    <th>Foto</th>
	                                    <th>NIS</th>
	                                    <th>Siswa</th>
	                                    <th>Tempat Lahir</th>
	                                    <th>Tanggal Lahir</th>
	                                    <th>Kelas</th>
	                                    <th><i class="fa fa-cogs fa-fw"></i></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<?php $no = 1; foreach($siswa as $s) : ?>
	                            		<tr>
	                            			<td><?= $no++; ?></td>
	                            			<td>
	                            				<img src="<?= base_url('assets/back/img/siswa/' . $s->foto_siswa); ?>" width="100px">
	                            			</td>
	                            			<td><?= $s->nis; ?></td>
	                            			<td><?= $s->nama_siswa; ?></td>
	                            			<td><?= $s->tmp_lahir; ?></td>
	                            			<td><?= date('d-m-Y', strtotime($s->tgl_lahir)); ?></td>
	                            			<td><?= $s->kelas; ?></td>
	                            			<td>
	                            				<a href="<?= base_url('admin/siswa/edit/' . $s->id_siswa); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
	                            				<a href="<?= base_url('admin/siswa/hapus/' . $s->id_siswa); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ?')"><i class="fa fa-trash fa-fw"></i></a>
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

