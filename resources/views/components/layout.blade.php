<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <title>Interview</title>
     @livewireStyles
</head>
<body>
     <div class="main px-4 py-3">
          {{ $slot }}
     </div>
     @livewireScripts
</body>
</html>