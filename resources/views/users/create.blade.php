@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-user"></i> Cadastro @section('description')Cadastro de um Novo Colaborador @endsection
@endSection

@section('content')

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf
    
    <div class="row clearfix">
        @include('layouts.formulario.input', ['type'=>'text','label'=>'Nome Completo', 'for_name'=>'name', 'class'=>'form-control','col'=>'6', 'icon'=>'person'])
        @include('layouts.formulario.input', ['type'=>'text','label'=>'Username', 'for_name'=>'username', 'class'=>'form-control cpf','col'=>'4', 'icon'=>'credit_card'])
        @include('layouts.formulario.input', ['type'=>'text','label'=>'E-mail', 'for_name'=>'email', 'class'=>'form-control','col'=>'4', 'icon'=>'@'])
        @include('layouts.formulario.input', ['type'=>'password','label'=>'Senha', 'for_name'=>'password', 'class'=>'form-control','col'=>'4', 'icon'=>'vpn_key'])
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
        <div class="col-md-12">
            @include('layouts.formulario.footer',['link'=>'index'])
        </div>
    </div>
</form>
   

@push('styles')
<link href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/dropzone/dropzone.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/multi-select/css/multi-select.css') }}" rel="stylesheet">
<style>
    .btnInicio {
        position: relative;
        left: 43%;
        height: 100px;
        width: 100px;
        border-radius: 100%;
        font-size: 4.33333em;
        display: block;
    }
</style>

@endpush
@push('scripts')
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script src="{{ asset('plugins/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('js/jquery.mask.js') }}"></script>

@endpush

@endSection