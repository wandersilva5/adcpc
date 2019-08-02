<table id="tabUser"  class="table table-bordered table-hover">
    <thead>
        <tr>
            <td style="width: 10%"><b>Foto</b></td>
            <td style="width: 20%"><b>Nome</b></td>
            <td style="width: 10%"><b>Login</b></td>
            <td style="width: 20%"><b>E-mail</b></td>
            <td style="width: 15%"><b>Celular</b></td>
            <td style="width: 25%; text-align: center"><b>Ação</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach($user_list as $list)
        <tr>
            <td> <img src="{{ asset('storage/users/'. $list->foto) }}" width="80" alt="Foto Perfil"></td>
            <td>{{ $list->name }}</td>
            <td>{{ $list->username }}</td>
            <td>{{ $list->email }}</td>
            <td>{{ $list->celular }}</td>
            <td>
                @include('layouts.formulario.links_acao', ['control'=>'users'])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>