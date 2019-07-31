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
        <form action="{{ route('dizimos.store') }}" method="POST" >
            @csrf
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Tipo Oferta', 'for_name'=>'descricao', 'class'=>'form-control','col'=>'9'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Valor R$', 'for_name'=>'valor', 'class'=>'form-control','col'=>'3'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Valor R$', 'for_name'=>'valor', 'class'=>'form-control','col'=>'3'])
    </div>
        <!-- /.box-body -->
    <div class="box-footer">
            @include('layouts.formulario.footer', ['link'=>'dizimos.index'])
        </form>
    </div>
        <!-- /.box-footer-->
</div>

@endsection