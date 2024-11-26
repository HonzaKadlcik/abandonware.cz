<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <!-- Navigation bar content -->
    </nav>
    <div class="container mt-4" style="color: White;">
        <h1>Search Results</h1>
        @if($items->isEmpty())
            <p>No items found.</p>
        @else
            <ul>
                @foreach($items as $item)
                    <li>{{ $item->name }}</li> <!-- Adjust the field name as needed -->
                @endforeach
            </ul>
        @endif
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>