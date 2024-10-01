<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Blog</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <div>{{ $post->author }} / {{ $post->date->diffForHumans() }}</div>
    <div>{{ $post->contents }}</div>
</body>
</html>