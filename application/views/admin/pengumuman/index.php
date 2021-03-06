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
	    				<a href="<?= base_url('admin/pengumuman/tambah'); ?>" class="btn btn-primary" style="margin-bottom: 10px;">
						    Tambah Data Pengumuman
						</a>
						<?= $this->session->flashdata('pesan'); ?>
						<?php if(validation_errors()) : ?>
							<div class="alert alert-danger"><?= validation_errors(); ?></div>
						<?php endif; ?>
	    			</div>
	    		</div>
	    		<div class="panel panel-primary" style="margin-top: 10px;">
	                <div class="panel-heading">
	                    Daftar Pegumuman
	                </div>
	                <!-- /.panel-heading -->
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
	                                    <th>Judul</th>
	                                    <th>Isi</th>
	                                    <th>Tanggal</th>
	                                    <th><i class="fa fa-cogs fa-fw"></i></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<?php $no = 1; foreach($pengumuman as $p) : ?>
	                            		<tr>
	                            			<td><?= $no++; ?></td>
	                            			<td><?= $p->judul_pengumuman; ?></td>
	                            			<td><?= $p->isi_pengumuman; ?></td>
	                            			<td><?= date('d-m-Y', strtotime($p->tgl_pengumuman)); ?></td>
	                            			<td>
	                            				<a href="<?= base_url('admin/pengumuman/edit/' . $p->id_pengu); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
	                            				<a href="<?= base_url('admin/pengumuman/hapus/' . $p->id_pengu); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ?')"><i class="fa fa-trash fa-fw"></i></a>
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

