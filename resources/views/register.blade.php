<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <x-navbar/>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body" id="registerForm">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group p-2">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" required minlength="3" maxlength="40">
                        </div>
                        <div class="form-group p-2">
                            <input type="email" name="email" class="form-control" placeholder="Email (Example: name@gmail.com)" required>
                        </div>
                        <div class="form-group p-2">
                            <input type="password" name="password" class="form-control" placeholder="Password (6-12)" required minlength="6" maxlength="12">
                        </div>
                        <div class="form-group p-2">
                            <input type="text" name="handphone" class="form-control" placeholder="Nomor Handphone (Example: 0812xxxxxxxx)" required pattern="08[0-9]{9,}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>