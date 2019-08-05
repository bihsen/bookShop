


<h1>Edit a book</h1>
<form action="/books/{{ $id }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title : </label>
    <input type="text" name="Title"
    value="{{ $books->Title }}"><br>

    <label for="author">Author : </label>
    <input type="text" name="Author"
    value="{{ $books->Author}}"><br>

    <input type="submit" value="Submit">
</form>

