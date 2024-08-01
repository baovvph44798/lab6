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
        <h1 class="text text-center text-primary">Update Account</h1>
        <form action="" method="post">
            @auth
                <div class="mb-3">
                    <label for="" class="form-label">Full Name</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->fullname}} ">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">User Name</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->username }} ">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->email }} ">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->password }} ">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Avatar</label>
                    <input class="form-control" type="file" value="{{ Auth::user()->avatar }} ">
                </div>
                {{-- <div class="mb-3">
                    <label for="" class="form-label">Position</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->role }} ">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Active</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->active }} ">
                </div> --}}
            @endauth
            <button class="btn btn-warning">Update</button>
            <a href="{{ route('index') }}" class="btn btn-primary">Account Information</a>
        </form>
    </div>
</body>

</html>
