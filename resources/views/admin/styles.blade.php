<link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
<link rel="shortcut icon" type="image/x-icon" href="{{ 'images/logo.png' }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
    rel="stylesheet">

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors' . $dir . '.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.min.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/bootstrap.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/bootstrap-extended.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/colors.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/components.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/themes/dark-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/themes/bordered-layout.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/themes/semi-dark-layout.css') }}">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css' . $dir . '/core/menu/menu-types/vertical-menu.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/pages/dashboard-ecommerce.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/pages/authentication.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/plugins/charts/chart-apex.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('app-assets/css' . $dir . '/plugins/extensions/ext-component-toastr.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
@if ($dir == '-rtl')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css' . $dir . '/custom' . $dir . '.css') }}">
@endif
<link rel="stylesheet" type="text/css" href="{{ asset('app-assets/assets/css/style' . $dir . '.css') }}">
<!-- END: Custom CSS-->
