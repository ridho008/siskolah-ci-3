</div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url('assets/back'); ?>/js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/startmin.js"></script>
        <script src="<?= base_url('assets/vendor'); ?>/ckeditor/ckeditor.js"></script>

        <!-- DataTables JavaScript -->
        <script src="<?= base_url('assets/back'); ?>/js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/back'); ?>/js/dataTables/dataTables.bootstrap.min.js"></script>

        <script>
            CKEDITOR.replace('editor1');
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>