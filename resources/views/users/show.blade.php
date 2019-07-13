@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-user"></i> Visualização do Usuário @section('description') 
Dados Cadastrais do Usuário @endsection
@endSection

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        <div class="thumbnail">
            <img src="{{ asset('storage/users/'.$user->foto) }}" class="img-responsive" width="200">
            <div class="caption">
                @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Nome Completo', 'for_name'=>'name','value'=> $user->name, 'class'=>'form-control','col'=>'6', 'icon'=>'user'])
                @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Username', 'value'=> $user->username, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4', 'icon'=>'user-secret'])
                @include('layouts.formulario.input', ['type'=>'text', 'label'=>'E-mail','value'=> $user->email, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4', 'icon'=>'envelope'])
                @include('layouts.formulario.input', ['type'=>'password', 'label'=>'Senha', 'for_name'=>'password', 'class'=>'form-control','col'=>'4', 'icon'=>'key'])
            </div>
        </div>
    </div>
        <br>
        <br>
    <div class="col-md-12">
        @include('layouts.formulario.button_back')
    </div>
</div>

@endSection