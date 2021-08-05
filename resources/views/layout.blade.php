<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','CodigoNativo')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}" defer></script>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen" style="height: 100vh">
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        <main class="py-4">
            @yield('content')    
        </main>
        <footer class="bg-white text-black-50 py-3">
            {{ config('app.name')}} | Copyrigth @ {{ date('Y') }}  
        </footer>
    </div>
</body>
</html>