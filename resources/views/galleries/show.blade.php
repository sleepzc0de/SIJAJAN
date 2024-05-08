<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gallery->title }}</title>
    <style>
        img {
            max-width: 40%;
            height: auto;
        }
    </style>
</head>

<body>
    <h2>{{ $gallery->title }}</h2>
    <img src="{{ asset($gallery->image) }}" alt="{{ $gallery->title }}">
    <p>{{ $gallery->description }}</p>
    <a href="{{ route('galleries.index') }}" class="btn-back">Back to Gallery</a>
</body>

</html>
