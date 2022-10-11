
<script>
    $(document).ready(function(){
        $('.alert-success').fadeIn().delay(1000).fadeOut();
    });
</script>
<script src="https://cdn.tiny.cloud/1/94znnv8jlox9mcy0w2l6y34drayykqj7gffd4wz5rvzc5iiq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
    selector: 'textarea',
    plugins: 'undo|redo code image bootstrap n1ed a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker importcss jsplusInclude jsplusBootstrapEditor jsplusFileUploaderLite fontawesome noneditable',
    toolbar: 'undo|redo code image fontawesome a11ycheck bootstrap addcomment showcomments casechange checklist formatpainter pageembed permanentpen table',
    toolbar_mode: 'floating',
    relative_urls: true,
    noneditable_noneditable_class: 'fa',
    contextmenu: "bootstrap",
    bootstrapConfig: {
            iconFont: 'fontawesome5',
            imagesPath: '/images/',
        },
    //   content_css: ["{{ asset('css/custom2.css') }}", "{{ asset('css/style.css') }}"],
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    extended_valid_elements: 'span[*]',
    importcss_append: true,
    branding: false
    });
</script>



<!--
<script>
$(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
</script> -->

<!--   Core JS Files   -->
    <script src="/dash/js/core/jquery.3.2.1.min.js"></script>
	<script src="/dash/js/core/popper.min.js"></script>
	<script src="/dash/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="/dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="/dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="/dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="/dash/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="/dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="/dash/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="/dash/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="/dash/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="/dash/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="/dash/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Atlantis JS -->
	<script src="/dash/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="/dash/js/setting-demo.js"></script>
	<script src="/dash/js/demo.js"></script>
    <script src="/assets/js/app.js" defer></script>
