<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Item</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="mb-4">Input Item</h1>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category">Item Category:</label>
                        <select id="categorySelect" class="form-control" name="category">
                            <option value="">Choose Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Item Name:</label>
                        <input type="text" class="form-control" id="name" name="name" minlength="5" maxlength="80" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Item Price(Rp.):</label>
                        <input type="number" class="form-control" id="price" name="price" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="total">Item Quantity:</label>
                        <input type="number" class="form-control" id="total" name="total" min="0" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Item Image:</label>
                        <input type="file" class="form-control-file" id="image" name="image" >
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#categorySelect').select2({
                tags: true
            });
        });
    </script>
</body>
</html>
