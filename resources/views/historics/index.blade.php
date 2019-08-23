@extends('layouts.principal')

@section('titulo-pag')
Histórico de Lançamentos 
@section('sub-titulo')
<i class="fa fa-history"></i>
@endsection
@endsection

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de Lançamentos de ofertas dos cultos</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <form action="{{ route('historics.busca') }}" method="POST">
            @csrf
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Pesquisa', 'for_name'=>'pesquisa', 'class'=>'form-control','col'=>'3'])
        </form>
        <!-- /.box-body -->
        <div class="box-footer">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td style="width: 90%">Tipo da Oferta</td>
                        <td style="width: 20%">Valor R$</td>
                        <td style="width: 10%">Ação</td>
                    </tr>
                </thead>
                <tbody>
                   
            </tbody>
        </table>
    </div>
        
            <!-- /.box-footer-->
    </div>
</div>

@endsection

@push('scripts')
    {{-- <script src="{{ asset('js/historics/index.js') }}"></script>      --}}
@endpush