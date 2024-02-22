<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task Manager</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body>
    @auth
    <form method="POST" action="/logout">
        @csrf

        <button type="submit">Subm</button>
    </form>
    @else
    {{$slot}}

    @endauth
</body>
</html>