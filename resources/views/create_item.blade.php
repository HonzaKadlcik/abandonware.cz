<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>     
        .form-container {
            padding: 2%;
            margin: 2%; 
            border-radius: 4%; 
            background-color: #1D3461;
        }
    </style>
</head>
<body style="background-color:#141313">
@include('components.navbar')

<section style="margin-left:13%">

<div class="container mt-4" style="padding-top:4%; padding-bottom:8%; color: White;">
    <div class="row">
        <div class="col-md-8 offset-md-2 form-container">
            <h1>Create Item</h1>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Item Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="url" name="link" id="link" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </form>
        </div>
    </div>
</div>

</section>
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>