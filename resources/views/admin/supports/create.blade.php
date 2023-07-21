<h1>Nova Duvida</h1>

<form action=" {{route('supports.store')}} " method="POST">
    @csrf
    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="" id="" cols="30" rows="5" placeholder="Description..."></textarea>
    <button type="submit">Send</button>
</form>