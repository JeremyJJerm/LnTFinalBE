<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </head>
  <body>
    <x-navbar/>
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Admin Login</h1>
                </div>
                <div class="card-body" id="adminForm">
                    <form method="POST" action="{{ route('admin') }}">
                        @csrf
                        <div class="form-group p-2">
                            <input type="text" name="admin_id" class="form-control" placeholder="Admin ID" required>
                        </div>
                        <div class="form-group p-2">
                            <input type="password" name="password" class="form-control" placeholder="Password (6-12)" required minlength="6" maxlength="12">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Login as Admin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>