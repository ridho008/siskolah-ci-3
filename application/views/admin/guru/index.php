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
	    				<a href="<?= base_url('admin/guru/tambah'); ?>" class="btn btn-primary" style="margin-bottom: 10px;">
						    Tambah Data Guru
						</a>
						<?= $this->session->flashdata('pesan'); ?>
						<?php if(validation_errors()) : ?>
							<div class="alert alert-danger"><?= validation_errors(); ?></div>
						<?php endif; ?>
	    			</div>
	    		</div>
	    		<div class="panel panel-primary" style="margin-top: 10px;">
	                <div class="panel-heading">
	                    Daftar Guru
	                </div>
	                <!-- /.panel-heading -->
	                <div class="panel-body">
	                    <div class="table-responsive">
	                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
	                            <thead>
	                                <tr>
	                                    <th>No</th>
	                                    <th>Foto</th>
	                                    <th>NIP</th>
	                                    <th>Guru</th>
	                                    <th>Tempat Lahir</th>
	                                    <th>Tanggal Lahir</th>
	                                    <th>Mapel</th>
	                                    <th>Pendidikan</th>
	                                    <th><i class="fa fa-cogs fa-fw"></i></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<?php $no = 1; foreach($guru as $g) : ?>
	                            		<tr>
	                            			<td><?= $no++; ?></td>
	                            			<td>
	                            				<img src="<?= base_url('assets/back/img/guru/' . $g->foto_guru); ?>" width="100px">
	                            			</td>
	                            			<td><?= $g->nip; ?></td>
	                            			<td><?= $g->nama_guru; ?></td>
	                            			<td><?= $g->tmp_lahir; ?></td>
	                            			<td><?= date('d-m-Y', strtotime($g->tgl_lahir)); ?></td>
	                            			<td><?= $g->nama_mapel; ?></td>
	                            			<td><?= $g->pendidikan; ?></td>
	                            			<td>
	                            				<a href="<?= base_url('admin/guru/edit/' . $g->id_guru); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
	                            				<a href="<?= base_url('admin/guru/hapus/' . $g->id_guru); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ?')"><i class="fa fa-trash fa-fw"></i></a>
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

