<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    <thead>
        <tr>
            <td style="width: 20%">Nome</td>
            <td style="width: 50%">Descrição</td>
            <td style="width: 10%">Status</td>
            <td style="width: 20%; text-align: center">Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($roles_list as $list)
        <tr>
            <td>{{ $list->name }}</td>
            <td>{{ $list->label }}</td>
            <td style="text-align: center">
                @if($list->fl_ativo == '1')
                <span class="badge bg-green">Ativo</span>
                @else
                <span class="badge bg-warning">Desativado</span>
                @endif
            </td>
            <td>
                @include('layouts.formulario.links_acao', ['control'=>'roles'])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>