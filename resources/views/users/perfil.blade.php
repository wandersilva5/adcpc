@extends('layouts.principal')

@section('titulo-pag')
<i class="fa fa-user"></i>
Usuários
@section('sub-titulo')
Alterar dados do meu perfil 
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
        <form action="{{ url('users/'.Auth::user()->id.'/update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Nome Completo', 'for_name'=>'name','value'=> Auth::user()->name, 'class'=>'form-control','col'=>'6', 'disabled'=>'disabled'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Username', 'for_name'=>'username','value'=> Auth::user()->username, 'class'=>'form-control','col'=>'4', 'disabled'=>'disabled'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Celular', 'for_name'=>'celular', 'value'=> Auth::user()->celular,'class'=>'form-control','col'=>'2', 'disabled'=>'disabled'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'E-mail', 'for_name'=>'email','value'=> Auth::user()->email, 'class'=>'form-control','col'=>'4', 'disabled'=>'disabled'])
            @include('layouts.formulario.input', ['type'=>'password', 'label'=>'Senha', 'for_name'=>'password', 'class'=>'form-control','col'=>'4'])
            <div class="col-md-12">
                @include('layouts.formulario.footer', ['link'=>'users.index'])
            </div>
        </form>
    </div>
</div>
@push('styles')
<link href="{{ asset('css/upload/input-file.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('css/upload/input-file.js') }}"></script>
@endpush

@endSection