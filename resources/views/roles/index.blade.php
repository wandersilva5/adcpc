@extends('layouts.principal')

@section('titulo-pag')
Perfil
@section('sub-titulo')
Gestão de Perfis de Acessos
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de perfis</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <a class="btn btn-default" href="{{ route('roles.create') }}">
                <i class="fa fa-plus-circle"></i>
                <span> CADASTRAR NOVO PERFIL</span>
            </a>
        </div>
        <div class="col-md-12">
            @include('roles.list', ['roles_list' => $roles])
        </div>
    </div>
</div>
    
@push('styles')
{{-- <link href="{{ asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet"> --}}
@endpush

@push('scripts')
{{-- <script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script> --}}
@endpush

@endSection
