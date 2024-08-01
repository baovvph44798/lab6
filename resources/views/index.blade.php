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
        <h1 class="text text-center text-primary">Account Information</h1>
        @auth
            <div class="mb-3">
                <label for="" class="form-label">Full Name</label>
                <input class="form-control" type="text" value="{{ Auth::user()->fullname }} " disabled readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">User Name</label>
                <input class="form-control" type="text" value="{{ Auth::user()->username }} " disabled readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input class="form-control" type="text" value="{{ Auth::user()->email }} " disabled readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input class="form-control" type="text" value="{{ Auth::user()->password }} " disabled readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Avatar</label>
                <input class="form-control" type="text" value="{{ Auth::user()->avatar }} " disabled readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Position</label>
                <input class="form-control" type="text" value="{{ Auth::user()->role }} " disabled readonly>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Active</label>
                <input class="form-control" type="text" value="{{ Auth::user()->active }} " disabled readonly>
            </div>
        @endauth
        <a href="{{ route('update')}}" class="btn btn-warning">Update</a>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>
</body>

</html>
