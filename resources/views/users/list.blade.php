<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
    <thead>
        <tr>
            <td>Nome</td>
            <td>Username</td>
            <td>CPF</td>
            <td>Celular</td>
            <td>E-mail</td>
            <td>Permissão</td>
            <td>Status</td>
            <td>Ação</td>
        </tr>
    </thead>
    <tbody>
        @foreach($user_list as $list)
        <tr>
            <td>{{ $list->name }}</td>
            <td>{{ $list->listname }}</td>
            <td>{{ $list->cpf }}</td>
            <td>{{ $list->phone }}</td>
            <td>{{ $list->email }}</td>
            <td>{{ $list->permission }}</td>
            <td>
                @if($list->fl_ativo == 'ativo')
                <span class="badge bg-green">{{ $list->fl_ativo }}</span>
                @else
                <span class="badge bg-warning">{{ $list->fl_ativo }}</span>
                @endif
            </td>
            <td>
                @include('layouts.formulario.links_acao', ['control'=>'users'])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>