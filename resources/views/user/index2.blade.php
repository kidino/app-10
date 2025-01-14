<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USERS</h1>

    <table border="1">
        <thead>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>

        @foreach( $users as $u )

        <tr>
            <td>{{ $u->id }}  </td>
            <td>{{ $u->name }}</td>
            <td>{{ $u->email }}</td>
            <td>
                <a href="http://app-10.test/user/{{ $u->id }}">EDIT</a>
            </td>
        </tr>

        @endforeach 

        </tbody>
    </table>
</body>
</html>