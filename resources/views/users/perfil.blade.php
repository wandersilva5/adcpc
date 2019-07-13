@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-user"></i> Edição @section('description')Editar dados de um Novo Colaborador @endsection
@endSection

@section('content')

@component('alert') @endcomponent

    <form action="{{ route('users.update-perfil',Auth::user()->id) }}" method="POST">
        @csrf
    <div class="row clearfix">
        <div class="col-md-3">
            <a href="javascript:void(0);" class="thumbnail">
            <img src="{{ asset('storage/users/'.Auth::user()->foto) }}" class="img-responsive">
            </a>
        </div>
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Nome Completo', 'for_name'=>'name','value'=> Auth::user()->name, 'class'=>'form-control','col'=>'6', 'icon'=>'user'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Gênero', 'value'=> Auth::user()->gender, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'3', 'icon'=>'transgender'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'CPF', 'value'=> Auth::user()->cpf, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'3', 'icon'=>'credit-card'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Celular', 'value'=> Auth::user()->phone, 'class'=>'form-control', 'icon'=>'mobile-alt','col'=>'3'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Nascimento', 'value'=> Auth::user()->birth, 'class'=>'form-control', 'disabled'=>'disabled', 'icon'=>'birthday-cake'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'E-mail','value'=> Auth::user()->email, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4', 'icon'=>'envelope'])
            @include('layouts.formulario.input', ['type'=>'password', 'label'=>'Senha', 'for_name'=>'password', 'class'=>'form-control','col'=>'4', 'icon'=>'key'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Username', 'value'=> Auth::user()->username, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4', 'icon'=>'user-secret'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'CNH','value'=> Auth::user()->cnh, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'4', 'icon'=>'address-card'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Validade CNH', 'value'=> Auth::user()->validade_cnh, 'class'=>'form-control', 'disabled'=>'disabled', 'icon'=>'calendar-alt'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Admissao', 'value'=> Auth::user()->admissao, 'class'=>'form-control datas', 'disabled'=>'disabled', 'icon'=>'calendar-alt'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Cargo','value'=> Auth::user()->cargo_id, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'3', 'icon'=>'screwdriver'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Empresa que pertence','value'=> Auth::user()->empresa_id, 'class'=>'form-control', 'disabled'=>'disabled','col'=>'5', 'icon'=>'address-card'])
    </div>
    <div class="row clearfix">
        <div class="col-md-12">
            @include('layouts.formulario.footer', ['link'=>'index'])
        </div>
    </div>
    </form>
@endSection