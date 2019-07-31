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
        <form action="{{ route('dizimos.store') }}" method="POST">
            @csrf
            @include('layouts.formulario.select', ['label'=>'Nome do Dizimista', 'for_name'=>'descricao', 'lista'=>$list_user,'col'=>'9'])
            @include('layouts.formulario.input', ['type'=>'text','label'=>'Valor R$', 'for_name'=>'valor', 'class'=>'form-control decimais','col'=>'3'])
            @include('layouts.formulario.input', ['type'=>'hidden','for_name'=>'user_id', 'id'=>'userID'])
            
        </form>
        <!-- /.box-body -->
        <div class="box-footer">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td style="width: 90%">Nome do Dizimista</td>
                        <td style="width: 20%">Valor R$</td>
                        <td style="width: 10%">Ação</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_dizimos as $list)
                    <tr>
                        <td>{{ $list_user[$list->descricao] }}</td>
                        <td>{{ $list->valor }}</td>
                        <td>
                            <form action="{{ route( "dizimos.destroy", $list->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger btn-social-icon">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
            <!-- /.box-footer-->
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('js/jquery.mask.js') }}"></script>     
    <script src="{{ asset('js/dizimos/index.js') }}"></script>     
@endpush