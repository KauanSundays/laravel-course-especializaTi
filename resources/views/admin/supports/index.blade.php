<h1>Listagem das duvidas</h1>

<a href="{{ route('supports.create') }}" 
class="btn btn-primary">
    Criar
</a> <!--create button-->


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
                <td>{{ $support->body}}</td>
                <td>
                    <a href="{{route('supports.show', $support->id)}}">Ir</a>
                    <a href="{{route('supports.edit', $support->id)}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>