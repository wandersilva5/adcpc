<div class="content-wrapper">
    <!-- Content Header (Page header) --> @include('alert')
    <section class="content-header">
        <h1>@yield('titulo-pag')<small> @yield('sub-titulo') </small></h1>
        <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">{{ ucfirst(Request::segment(1)) }}</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->