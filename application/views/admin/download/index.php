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
    				<a href="<?= base_url('admin/download/tambah'); ?>" class="btn btn-primary" style="margin-bottom: 10px;">
					    Tambah Data File
					</a>
					<?= $this->session->flashdata('pesan'); ?>
					<?php if(validation_errors()) : ?>
						<div class="alert alert-danger"><?= validation_errors(); ?></div>
					<?php endif; ?>
    			</div>
    		</div>
    		<div class="panel panel-primary" style="margin-top: 10px;">
                <div class="panel-heading">
                    Daftar File Download
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama File</th>
                                    <th>File</th>
                                    <th><i class="fa fa-cogs fa-fw"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php $no = 1; foreach($download as $d) : ?>
                            		<tr>
                            			<td><?= $no++; ?></td>
                            			<td><?= $d->nama_file; ?></td>
                            			<td><?= $d->file; ?></td>
                            			<td>
                            				<a href="<?= base_url('admin/download/edit/' . $d->id_file); ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil fa-fw"></i></a>
                            				<a href="<?= base_url('admin/download/hapus/' . $d->id_file); ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ?')"><i class="fa fa-trash fa-fw"></i></a>
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

