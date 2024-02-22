@auth
    
<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Task Manager</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        
    </head>
    <body {{$attributes(['class' => 'items-center gap-14  px-10 py-6 flex h-screen'])}} >
        <x-sidebar/>
        {{$slot}}
    </body>
    </html>

@endauth