@extends('layouts.principal')

@section('titulo-pag')
Usuários
@section('sub-titulo')
Gestão de Acessos
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de usuários</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <a class="btn btn-primary waves-effect" href="{{ route('users.create') }}">
                <i class="fa fa-plus-circle"></i>
                <span> CADASTRAR USUÁRIOS</span>
            </a>
        </div>
        <div class="col-md-12">
            @include('users.list', ['user_list' => $users])
        </div>
    </div>
</div>
    
@push('styles')
{{-- <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet"> --}}

@endpush

@push('scripts')
{{-- <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script> --}}
@endpush

@endSection
