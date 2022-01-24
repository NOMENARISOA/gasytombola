

<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic Live preview | Keenthemes</title>
		<meta name="description" content="Updates and statistics" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<link href="{{ asset('assets/backoffice/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backoffice/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backoffice/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/backoffice/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/backoffice/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
        {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css"> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	</head>
	<body id="kt_body" class="header-fixed subheader-enabled page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="d-flex flex-row flex-column-fluid page">
				<div class="d-flex flex-column flex-row-fluid wrapper" style="margin-top: 3%" id="kt_wrapper">
					<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
						<div class="container">
							<!--begin::Header Menu-->
							<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">
								<!--begin::Header Nav-->
								<ul class="menu-nav">
									<li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here" data-menu-toggle="click" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="menu-text">Dashboard</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-left">
											<ul class="menu-subnav">
												<li class="menu-item menu-item-active" aria-haspopup="true">
													<a href="index.html" class="menu-link">
														<span class="menu-text">Application</span>
														<span class="menu-desc"></span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a target="_blank" href="https://preview.keenthemes.com/metronic/demo8/builder.html" class="menu-link">
														<span class="menu-text">Layout Builder</span>
														<span class="menu-desc"></span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-rel" aria-haspopup="true">
										<a href="{{ route('admin.tombola.index') }}" class="menu-link ">
											<span class="menu-text">Gestion Tombola</span>
										</a>
									</li>
                                    <li class="menu-item menu-item-rel" aria-haspopup="true">
										<a href="{{ route('admin.company.index') }}" class="menu-link ">
											<span class="menu-text">Gestion Entreprise </span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="d-flex flex-row flex-column-fluid container">
						@yield('content')
					</div>
                    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2021©</span>
								<a href="http://keenthemes.com/metronic" target="_blank" class="text-white text-hover-primary">Keenthemes</a>
							</div>
							<div class="nav nav-dark order-1 order-md-2">
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0 text-muted text-hover-primary">About</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link px-3 text-muted text-hover-primary">Team</a>
								<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0 text-muted text-hover-primary">Contact</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#8950FC", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#EEE5FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<script src="{{ asset('assets/backoffice/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/backoffice/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
		<script src="{{ asset('assets/backoffice/js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('assets/backoffice/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{ asset('assets/backoffice/js/pages/widgets.js') }}"></script>

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

	</body>
	<!--end::Body-->
</html>
