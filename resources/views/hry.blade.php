<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Galerie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>     
        .obrazky {
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

<div class="container mt-4 " style="padding-top:4%; padding-bottom:8%; color: White;">
    <div style="padding-left:1%; padding-bottom:1%" class="row container">
        <div class="row">  

        <div class="container" style="padding-right:15.5%; padding-bottom:2%">      
            <div>
                <form action="{{ route('items.search') }}" method="GET">
                    <div class="card-body row no-gutters">
                        <div>
                            <i class="fas fa-search h4 text-body"></i>
                        </div>
                        <div class="col">
                            <input name="query" class="form-control form-control-lg form-control-borderless" style="background-color:#141313; color: white;" type="search" placeholder="Hledej...">
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-lg btn-success" type="submit" style="background-color:#141313">Hledat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

            <h1>HRY</h1>
        </div>
    </div>
    @if(isset($searchResults))
        <div class="container mt-4" style="color: White;">
            <h2>Search Results:</h2>
            <div class="row">
                @forelse($searchResults as $result)
                    <div class="obrazky col-md-2">
                        <a href="{{ $result->link }}" class="image-card">
                            <img src="{{ $result->image }}" alt="{{ $result->name }}">
                        </a>
                        <h2>{{ $result->name }}</h2>
                    </div>
                @empty
                    <p>No results found.</p>
                @endforelse
            </div>
        </div>
    @endif

    <!-- Add button to navigate to create_item.blade.php -->
    <div class="container mt-4">
        <a href="{{ route('items.create') }}" class="btn btn-primary">Create New Item</a>
    </div>
</div>

<!-- Existing content -->

</section>
@include('components.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>