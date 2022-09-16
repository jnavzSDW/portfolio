<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-secondary">
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="height: 40px">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand">Navs</a>
        </div>
    </nav>

    <div class="container">
        <div class="card shadow w-50 mx-auto mt-5">
            <div class="card-header bg-dark">
                <h1 class="card-title text-white">Login as owner</h1>
            </div>
            <form action="{{ url('login/authenticate') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-field">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-field">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end bg-secondary">
                    <a href="{{ url('/') }}" class="btn btn-danger mx-1" style="width: 5rem">Cancel</a>
                    <input type="submit" value="Login" class="btn btn-success mx-1" style="width: 5rem">
                </div>
            </form>
        </div>

    </div>

</body>
</html>