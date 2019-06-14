<footer class="main-footer bg-footer text-center">
	Copyright &copy; 2019 SMP Maju Mundur
</footer>
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jquery js -->
<script src="<?= base_url('assets/js/jquery-2.2.3.min.js') ?>"></script>
<!-- bootstrap js -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- admin LTE js -->
<script src="<?= base_url('assets/js/app.min.js') ?>"></script>

<!-- datatable -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

<!-- velocity animation -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/velocity.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/velocity.ui.js"></script>

<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>

</body>

</html>