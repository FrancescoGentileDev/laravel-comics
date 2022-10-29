<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC comics</title>
</head>
<body>
    <h1>DC comics</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{ route('comic', ['id' => $comic['id']]) }}">
                    {{ $comic['title'] }}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>