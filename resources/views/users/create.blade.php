@extends('layouts.principal')

@section('titulo-pag')
Usuários
@section('sub-titulo')
Cadastro de um Novo Usuário <i class="fa fa-arrow-down"></i>
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário de Cadastro</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Nome Completo', 'for_name'=>'name', 'class'=>'form-control','col'=>'6'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Login', 'for_name'=>'username', 'class'=>'form-control cpf','col'=>'4'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Celular', 'for_name'=>'celular', 'class'=>'form-control','col'=>'2'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'E-mail', 'for_name'=>'email', 'class'=>'form-control','col'=>'4'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Senha', 'class'=>'form-control','col'=>'4','value'=> 'Padrão'])
            <br>
            <br>
            <div class="col-md-12">
            <label for='input-file' class="btn btn-lg btn-primary">
                <i class="fa fa-download"></i>
                SELECIONE UMA FOTO
            </label>
            <input id='input-file' name="foto" type='file' onchange="readURL(this);" />
            <span id='file-name'></span>
            </div>
    </div>
    <div class="box-footer">
        @include('layouts.formulario.footer', ['link'=>'users.index'])
    </form>
    </div>
</div>
@push('styles')
{{-- <link href="{{ asset('css/upload/input-file.css') }}" rel="stylesheet"> --}}
<style>
#input-file{
    display: none;
}
</style>
@endpush

@push('scripts')
    <script src="{{ asset('js/jquery.mask.js') }}"></script>
@endpush

@endSection