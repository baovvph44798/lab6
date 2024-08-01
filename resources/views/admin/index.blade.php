<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container" style="width: 100%">
        <h1 class="text text-center text-primary">List Accounts</h1>
        <table class="table table-border border-default table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Avatar</th>
                    <th scope="col">Position</th>
                    <th scope="col">Status</th>
                    <th scope="col">Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <th scope="row">{{ $account->id }}</th>
                        <td>{{ $account->fullname }}</td>
                        <td>{{ $account->username }}</td>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->password }}</td>
                        <td>{{ $account->avatar }}</td>
                        <td>{{ $account->role }}</td>
                        <td>{{ $account->active }}</td>
                        <td class="d-flex">
                            <button class="btn btn-success">Action</button>
                            <button class="btn btn-danger">Stop Action</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>
</body>

</html>
