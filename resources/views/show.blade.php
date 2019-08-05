
</head>
<body>
    <h1>Books Details</h1>
    <ul>
        @foreach ($books as $book)

    <a href="/book/{{$book->id_book}}">  <li>Author: {{$book->Author }} </li>  </a>
        <li>Title: {{$book->Title}}</li>
        <a href="/delete/{{$book->id_book}}"> <button>  Delete</button></a>
        <a href="/edit/{{$book->id_book}}"> <button>  Edit</button></a>
        <br>
        <br>
        @endforeach
    </ul>

</body>
</html>
