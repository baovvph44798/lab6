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
    <div class="container w-50">
        <h1>Login</h1>
        @if (session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('loginError'))
            <div class="alert alert-danger">{{ session('loginError') }}</div>
        @endif
        <form action="{{ route('postLogin') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">User Name</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="{{ route('register')}}" class="btn btn-success">Register</a>
            </div>
        </form>
    </div>
</body>

</html>
