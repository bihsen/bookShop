<form action="\books" method="POST">
    @csrf
    <input type="text" name="author" placeholder="Author">
    <input type="text" name="title" placeholder="Title">
    <input type="submit" name="submit" value="Submit">
</form>
