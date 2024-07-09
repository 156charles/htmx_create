<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('htmx/htmx.min.js')}}"></script>
    <script src="{{asset('tailwind/tailwind.min.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <div class="flex justify-between bg-blue-600 p-2 text-white">
        <div>
            Welcome
        </div>

        {{-- @if (Auth::check())
            <div>
                <a href="{{route('admin.dashboard')}}">Dashboard</a>
            </div>
              
        @else --}}
            
        <div>
            <a class="bg-blue-400 text-black p-2 rounded" href="/login">Login</a>
        </div>
        
        {{-- @endif --}}
    </div>

    <div id="content">
        @yield('content')
    </div>
</body>
</html>