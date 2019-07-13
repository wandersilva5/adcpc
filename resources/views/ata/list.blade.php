<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    <thead>
        <tr>
            <td>Título</td>
            <td>Pautas</td>
            <td>Anexo</td>
            <td>Data</td>
            <td>Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($atas_list as $list)
        <tr>
            <td>{{ $list->titulo }}</td>
            <td>{{ $list->pauta }}</td>
            <td>{{ $list->anexo }}</td>
            <td>{{ $list->created_at }}</td>
            <td>
                @include('layouts.formulario.links_acao', ['control'=>'ata'])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>