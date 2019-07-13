<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <td><b>Nome</b></td>
            <td><b>Login</b></td>
            <td><b>CPF</b></td>
            <td><b>Celular</b></td>
            <td><b>Permissão</b></td>
            <td style="width: 20%; text-align: center"><b>Ação</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach($user_list as $list)
        <tr>
            <td>{{ $list->name }}</td>
            <td>{{ $list->listname }}</td>
            <td>{{ $list->cpf }}</td>
            <td>{{ $list->phone }}</td>
            <td>{{ $list->permission }}</td>
            <td>
                @include('layouts.formulario.links_acao', ['control'=>'users'])
            </td>
        </tr>
        @endforeach
    </tbody>
</table>