@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-user"></i> Lista de Usuários @section('description')tela de acompanhamento @endsection
@endSection

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <a class="btn btn-primary waves-effect" href="{{ route('users.create') }}">
            <i class="fas fa-plus-circle"></i>
            <span> CADASTRAR PEDIDO</span>
        </a>
    </div>
    <div class="col-md-12">
        @include('users.list', ['user_list' => $users])
    </div>
</div>
    
@push('styles')
<link href="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
@endpush

@endSection
