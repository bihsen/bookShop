


<body>
    @foreach ($users as $user)

    <h2>Name: {{$user->first_name}} </h2>
    <h3> Last name: {{$user->last_name}}</h3>
    <h4>Email: {{$user->email}}</h4>
    <hr>
    @endforeach
</body>
