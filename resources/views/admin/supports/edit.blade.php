<h1>Edite a duvida Duvida</h1>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Description..."></textarea>
    <button type="submit">Send</button>
</form>
