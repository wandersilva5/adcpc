@extends('layouts.principal')

@section('titulo-pag')
Perfil
@section('sub-titulo')
Criar Um Novo Perfil de Acesso
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário de criação</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Nome do Perfil', 'for_name'=>'name', 'class'=>'form-control','col'=>'4'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Descrição', 'for_name'=>'Label', 'class'=>'form-control','col'=>'8'])
            <div class="col-md-12">
                <h5>Escolha as Permissiões</h5><br>
                @foreach ($permissions as $permission)
                    <input type="checkbox" name="permission" id="{{ $permission->name }}" class="filled-in">
                    <label for="{{ $permission->name }}">
                        {{ $permission->label }}
                    </label> 
                    <br>
                @endforeach
            </div>
        </div>
    </div>
</div>
    
@push('styles')
{{-- <link href="{{ asset('plugins/iCheck/all.css') }}" rel="stylesheet"> --}}

@endpush

@push('scripts')
{{-- <script src="{{ asset('plugins/iCheck/icheck.min.js.js') }}"></script> --}}
@endpush

@endSection
