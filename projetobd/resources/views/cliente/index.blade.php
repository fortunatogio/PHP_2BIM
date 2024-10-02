<x-app-layout>

    <h5 class="mt-3">Gerenciar Cliente</h5>

    <a class="btn btn-success" href="/cliente/create">
        Inserir novo Cliente
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cliente as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->email }}</td>
                <td>{{ $c->telefone }}</td>
                <td>
                    <a href="/cliente/{{ $c->id }}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/cliente/{{ $c->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>