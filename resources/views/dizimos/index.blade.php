@extends('layouts.principal')

@section('titulo-pag')
Dízimos e Ofertas
@section('sub-titulo')
Lançamentos
@endsection
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de Lançamentos Mensal</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
            <form action="{{ route('dizimos.store') }}" method="POST" >
            @csrf
            @include('layouts.formulario.select', ['type'=>'text','label'=>'Tipo Oferta', 'for_name'=>'descricao[]', 'col'=>'9'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Valor R$', 'for_name'=>'valor[]', 'class'=>'form-control','col'=>'3'])
            @include('layouts.formulario.select', ['type'=>'text','label'=>'Nome do Dizimista', 'for_name'=>'descricao[]', 'col'=>'9'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Valor R$', 'for_name'=>'valor[]', 'class'=>'form-control','col'=>'3'])
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-success btn-submit">
                <i class="fa fa-lg fa-save"></i> 
                <span> SALVAR</span> 
            </button>
        </div>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td style="width: 65%">Descrição</td>
                    <td style="width: 20%">Valor R$</td>
                    <td style="width: 15%">Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($dizimos as $list)
                <tr>
                    <td>{{ $list->descrcao }}</td>
                    <td>{{ $list->valor }}</td>
                    <td>
                        @include('layouts.formulario.links_acao', ['control'=>'agenda'])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        
            <!-- /.box-footer-->
    </div>
</div>

@endsection