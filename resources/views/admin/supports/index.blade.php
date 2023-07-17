<h1>Listagem das duvidas</h1>

<a href="{{ route('supports.create') }}" class="btn btn-primary">Ir para a Bio</a> <!--create button-->


<table>
    <thead>
        <th>Subject</th>
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
                <td></td>
            </tr>
        @endforeach
    </tbody>
</table>