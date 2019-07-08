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
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        
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
        
    <div class="box-footer">
            @include('layouts.formulario.button_back', ['link'=>'dizimos.index'])
    </div>
        <!-- /.box-footer-->
</div>

@endsection