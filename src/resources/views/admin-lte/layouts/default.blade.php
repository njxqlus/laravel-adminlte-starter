@include('admin-lte.parts.html-header')
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin-lte.parts.header')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">

            @yield('page-header')

            @include('admin-lte.parts.breadcrumbs')

        </section>

        <!-- Main content -->
        <section class="content">

            @yield('content')

        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->

    @include('admin-lte.parts.footer')

    @include('admin-lte.parts.control-sidebar')

</div>
<!-- ./wrapper -->

@include('admin-lte.parts.main-sidebar')

@include('admin-lte.parts.html-footer')