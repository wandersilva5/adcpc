@extends('layouts.principal')

@section('titulo-pag')
Permissões
@section('sub-titulo')
Gestão de Permissões de Acessos
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de permissões</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <a class="btn btn-info" href="{{ route('permissions.create') }}">
                <i class="fa fa-plus-circle"></i>
                <span> CADASTRAR NOVA PERMISSÃO</span>
            </a>
        </div>
        <div class="col-md-12">
            @include('permissions.list', ['permissions_list' => $permissions])
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
