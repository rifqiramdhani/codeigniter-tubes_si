</body>
    <!--   Core JS Files   -->
    <script src="<?= base_url(); ?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?= base_url(); ?>assets/js/chartist.min.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?= base_url(); ?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Animate Velocity -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/velocity.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/velocity.ui.js"></script>

    <script>
        $(document).ready(function(){
            $("body").velocity("transition.fadeIn", {
                                stagger: 150,
                                duration: 1500
                            });
        });

    </script>

</html>
