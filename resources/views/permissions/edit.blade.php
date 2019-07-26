@extends('layouts.master')

@section('title')
<i class="fas fa-lg fa-users-cog"></i> Cadastrar Perfil @section('description') Formulário de cadastro de um novo perfil @endsection
@endSection

@section('content')

<div class="row clearfix">
        <div class="col-md-12">
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Nome da Funcionalidade', 'for_name'=>'name', 'value'=>$roles->name,'class'=>'form-control','col'=>'4'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Descrição', 'for_name'=>'Label', 'class'=>'form-control', 'value'=>$roles->Label,'col'=>'8'])
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
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
@endpush

@endSection
