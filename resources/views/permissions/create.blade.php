@extends('layouts.principal')

@section('titulo-pag')
Permissão
@section('sub-titulo')
Criar Uma Nova Permissão
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">
            <i class="ion ion-locked"></i>
            Formulário de criação
        </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('permissions.store') }}" method="post">
            @csrf
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Nome da Permissão', 'for_name'=>'name', 'class'=>'form-control','col'=>'4'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Descrição', 'for_name'=>'Label', 'class'=>'form-control','col'=>'8'])
            <div class="box-footer clearfix no-border">
                @include('layouts.formulario.footer', ['link'=>'permissions.index'])
            </div>
        </form>
    </div>
</div>
    
@endSection
