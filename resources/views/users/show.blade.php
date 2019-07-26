@extends('layouts.principal')

@section('titulo-pag')
Usuários
@section('sub-titulo')
Visualização do cadastro individual do usuário <i class="fa fa-arrow-down"></i>
@endsection
@endsection

@section('content')

<div class="box">
    <img src="{{ asset('storage/users/'.$user->foto) }}" class="img-responsive" width="200">
    <div class="box-body">
        @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Nome Completo', 'for_name'=>'name','value'=> $user->name, 'class'=>'form-control','col'=>'6', 'disabled'=>'disabled'])
        @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Username', 'value'=> $user->username, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4'])
        @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Celular', 'value'=> $user->celular, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'2'])
        @include('layouts.formulario.input', ['type'=>'text', 'label'=>'E-mail','value'=> $user->email, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4'])
        <br>
        <br>
        <div class="col-md-12">
            @include('layouts.formulario.button_back')
        </div>
    </div>
</div>

@endSection