<!DOCTYPE html>
<html>
    <head>
        <title>Users</title>
    </head>
    <body>
        <H1>User List</H1>
        <ul>
            @foreach ($users as $user)
            <li>{{ $user }}</li>
            @endforeach
        </ul>
    </body>
</html>