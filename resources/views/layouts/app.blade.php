<!DOCTYPE html>
<html lang="en">
<head>
	{{-- meta --}}
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kaz-Library">

	<title>@yield('title') - {{ config('app.name', 'Kaz-Library') }}</title>

	{{-- Favicon --}}
	<link rel="shortcut icon" href="{{ asset('images/logo.png') }}">
	{{-- AdminLTE CSS --}}
	<link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
	{{-- Font Awesome CSS --}}
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
	{{-- Overlay Scrollbars CSS --}}
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
	{{-- DataTables & plugins CSS --}}
	<link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
	@yield('css')
	{{-- Custom CSS --}}
	<style>
		/* fonts */
		@font-face {
			font-family: "Poppins";
			src: url("{{ asset('fonts/poppins/poppins.woff2') }}") format("truetype");
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: "Play";
			src: url("{{ asset('fonts/play/play.woff2') }}") format("truetype");
			font-weight: normal;
			font-style: normal;
		}
		@font-face {
			font-family: "Press Start 2P";
			src: url("{{ asset('fonts/pressStart2P/pressStart2P.woff2') }}") format("truetype");
			font-weight: normal;
			font-style: normal;
		}
		/* /.fonts */

		/* body */
		body {
			font-family: "Poppins", sans-serif;
			display: block;
		}
		body::-webkit-scrollbar {
			width: 5px;
		}
		body::-webkit-scrollbar-track {
			background-color: rgb(60, 60, 60);
		}
		body::-webkit-scrollbar-thumb {
			background-color: orangered;
			border-radius: 5px;
		}
		/* /.body */

		/* sidebar */
		.main-sidebar .brand-text {
			font-family: "Press Start 2P", sans-serif;
			font-size: 1rem;
			color: orangered;
		}
	</style>
	
	{{-- jQuery JS --}}
	<script type="text/javascript" src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Poppins', sans-serif">
	<div class="wrapper">

		{{-- navbar --}}
		@include('partials.navbar')
		{{-- sidebar --}}
		@include('partials.sidebar')

		{{-- content --}}
		<div class="content-wrapper">
			{{-- content header --}}
			<section style="font-family: 'Play', sans-serif">
				@yield('page-header')
			</section>
			{{-- main content --}}
			<section class="content">
				@yield('content')
			</section>
		</div>
		{{-- footer --}}
		@include('partials.footer')

		{{-- sidebar control --}}
		<aside class="control-sidebar control-sidebar-dark"></aside>
	</div>
	{{-- /.wrapper --}}

	{{-- Bootstrap 4 JS --}}
	<script type="text/javascript" src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	{{-- overlayScrollbars JS --}}
	<script type="text/javascript" src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"><script>
	{{-- AdminLTE JS --}}
	<script type="text/javascript" src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>
	{{-- SweetAlert2 JS  --}}
	<script type="text/javascript" src="{{ asset('adminlte/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
	{{-- DataTables & plugins JS --}}
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
	{{-- Custom JS --}}
	<script>
		$(document).ready(function() {

			/* Toggle sidebar visibility
			 * This script toggles the sidebar visibility based on screen size
			 * and allows users to toggle it manually using a button.
			 */

			// Set elements
			const SIDEBAR_TOGGLER = $('#sidebarToggler');
			const SIDEBAR = $('#sidebar');
			const CONTENT_WRAPPER = $('.content-wrapper');
			const MAIN_HEADER = $('.main-header');
			const MAIN_FOOTER = $('.main-footer');

			// Helper to show/hide the sidebar
			function setSidebar() {

				// Remove initial classes to reset the state
				SIDEBAR.removeClass('main-sidebar');
				SIDEBAR.removeClass('d-block d-none');
				CONTENT_WRAPPER.removeClass('d-block d-none ml-0 w-100');
				MAIN_HEADER.removeClass('d-none ml-0 w-100');
				MAIN_FOOTER.removeClass('d-block d-none ml-0 w-100');

				// Add classes to set the initial state
				SIDEBAR.addClass('main-sidebar');
				SIDEBAR.addClass('d-block d-none');
				CONTENT_WRAPPER.addClass('d-block d-none ml-0 w-100');
				MAIN_HEADER.addClass('d-none ml-0 w-100');
				MAIN_FOOTER.addClass('d-block d-none ml-0 w-100');
				
				if ($(window).width() >= 768) {
					// At bigger screens, show the sidebar by default
					SIDEBAR.toggleClass('d-none');
					CONTENT_WRAPPER.toggleClass('d-none ml-0 w-100');
					MAIN_HEADER.toggleClass('d-none ml-0 w-100');
					MAIN_FOOTER.toggleClass('d-none ml-0 w-100');

					// Sidebar toggler functionality
					SIDEBAR_TOGGLER.on('click', function(e) {
						e.preventDefault();
						SIDEBAR.toggleClass('d-block d-none');
						
						// Make other elements wider
						CONTENT_WRAPPER.toggleClass('ml-0 w-100');
						MAIN_HEADER.toggleClass('ml-0 w-100');
						MAIN_FOOTER.toggleClass('ml-0 w-100');
					});
				} else {
					// At smaller screens, hide the sidebar by default
					SIDEBAR.toggleClass('main-sidebar');
					SIDEBAR.toggleClass('d-block');
					CONTENT_WRAPPER.toggleClass('d-none');
					MAIN_HEADER.toggleClass('d-none');
					MAIN_FOOTER.toggleClass('d-none');

					// Sidebar toggler functionality
					SIDEBAR_TOGGLER.on('click', function(e) {
						e.preventDefault();
						SIDEBAR.toggleClass('d-none');
						SIDEBAR.toggleClass('d-block');
						CONTENT_WRAPPER.toggleClass('d-block d-none');
					});
				}
			}

			// Initial call to set the sidebar
			setSidebar();

			// Listen for window resize events
			$(window).on('resize', function() {
				setSidebar();
			});

			// Toggle fullscreen mode
			$('#fullscreenBtn').on('click', function(e) {
				e.preventDefault();
				if (document.fullscreenElement) {
					document.exitFullscreen();
				} else {
					document.documentElement.requestFullscreen();
				}
			});
		});
	</script>
	@yield('js')
</body>
</html>
