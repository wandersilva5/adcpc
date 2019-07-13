@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-user"></i> Edição @section('description')Editar dados de um Novo Colaborador @endsection
@endSection

@section('content')

    <form action="{{ url('users/'.$users->id.'/update') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row clearfix">
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Nome Completo', 'for_name'=>'name','value'=> $users->name, 'class'=>'form-control','col'=>'6', 'icon'=>'person'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'Username', 'for_name'=>'username','value'=> $users->username, 'class'=>'form-control','col'=>'4', 'icon'=>'perm_identity'])
            @include('layouts.formulario.input', ['type'=>'text', 'label'=>'E-mail', 'for_name'=>'email','value'=> $users->email, 'class'=>'form-control','col'=>'4', 'icon'=>'@'])
            @include('layouts.formulario.input', ['type'=>'password', 'label'=>'Senha', 'for_name'=>'password', 'class'=>'form-control','col'=>'4', 'icon'=>'vpn_key'])
        <br>
        <br>
        <div class='input-wrapper'>
            <label for='input-file' class="btn btn-lg btn-block btn-primary waves-effect">
                SELECIONE UMA FOTO
            </label>
            <input id='input-file' name="foto" type='file' onchange="readURL(this);" />
            <span id='file-name'></span>
        </div>
        <br>
            <div class="col-md-12">
                @include('layouts.formulario.footer', ['link'=>'users.index'])
            </div>
        </div>
    </form>
@push('styles')
<link href="{{ asset('css/upload/input-file.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/jquery.mask.js') }}"></script>
<script src="{{ asset('css/upload/input-file.js') }}"></script>
@endpush

@endSection