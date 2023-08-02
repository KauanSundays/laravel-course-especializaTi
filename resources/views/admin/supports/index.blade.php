<h1>Listagem das duvidas</h1>

<a href="{{ route('supports.create') }}" class="btn btn-primary">Criar</a> <!--create button-->

<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Description</th>
        <th></th>
    </thead>

    <tbody>
        @foreach ($supports as $support)
            <tr>
                <td>{{ $support->subject }}</td>
                <td>{{ $support->status }}</td>
                <td>{{ $support->body }}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">Ir</a>
                    <a href="{{ route('supports.edit', $support->id) }}">Edit</a>
                    <a href="{{ route('supports.delete', $support->id) }}"
                       onclick="event.preventDefault(); if (confirm('Tem certeza que deseja excluir esse suporte?')) {document.getElementById('delete-form-{{ $support->id }}').submit();}">
                        Excluir
                    </a>
                    <form id="delete-form-{{ $support->id }}" action="{{ route('supports.delete', $support->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
