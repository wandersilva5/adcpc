@extends('layouts.principal')

@section('titulo-pag')
Usuários
@section('sub-titulo')
Gestão de Acessos
@endsection
@endsection

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Lista de usuários</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <a class="btn btn-primary waves-effect" href="{{ route('users.create') }}">
                <i class="fa fa-plus-circle"></i>
                <span> CADASTRAR USUÁRIOS</span>
            </a>
        </div>
        <div class="col-md-12">
            @include('users.list', ['user_list' => $users])
        </div>
    </div>
</div>
    
@push('styles')
<link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">

@endpush

@push('scripts')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(function () {
        // $('#tabUser').DataTable()
        $('#tabUser').DataTable({
            responsive: true,
            "lengthMenu": [3, 5, 10],
            "bJQueryUI": true,
            "oLanguage": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        })
    })
    </script>
@endpush

@endSection
