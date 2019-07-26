@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-users-cog"></i> Cadastrar Perfil @section('description') Formulário de cadastro de um novo perfil @endsection
@endSection

@section('content')

<div class="row clearfix">
    <div class="col-md-12">
        @include('layouts.formulario.input', ['type'=>'text','label'=>'Nome da Funcionalidade', 'for_name'=>'name', 'class'=>'form-control','col'=>'4'])
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
    
@push('styles')
{{-- <link href="{{ asset('plugins/iCheck/all.css') }}" rel="stylesheet"> --}}

@endpush

@push('scripts')
{{-- <script src="{{ asset('plugins/iCheck/icheck.min.js.js') }}"></script> --}}
@endpush

@endSection
