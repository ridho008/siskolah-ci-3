<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title; ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/back'); ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url('assets/back'); ?>/css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url('assets/back'); ?>/css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/back'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Harap Masuk</h3>
                        </div>
                        <div class="panel-body">
                            <?= $this->session->flashdata('pesan'); ?>
                            <?= form_open('auth'); ?>
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                        <small class="muted text-danger"><?= form_error('username'); ?></small>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        <small class="muted text-danger"><?= form_error('password'); ?></small>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                </fieldset>
                            <?= form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?= base_url('assets/back'); ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/startmin.js"></script>

    </body>
</html>
