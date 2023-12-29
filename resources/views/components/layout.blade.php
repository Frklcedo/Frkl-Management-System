<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Debt Management System</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div id="app" class="bg-slate-100 min-h-screen">
        <header class="sticky bg-white shadow-sm">
            <div class="container px-16 h-20 flex items-center justify-between">
                <div class="logo">
                    logo
                </div>
                <div class="flex gap-2">
                    @auth
                    <div class="text-center text-sm font-medium text-slate-600">
                        Hello, <span class="text-sky-700 font-bold">{{ auth()->user()->name }}</span>
                    </div>
                    @else
                    <a tabindex="-1" href="{{ route('auth.create') }}">
                        <x-button>
                            Login
                        </x-button>
                    </a>
                    @endauth
                </div>
            </div>
        </header>
        <div class="container flex">
            <nav id="nav" class="bg-white shadow-sm">
                <ul class="flex flex-col gap-2">
                    <li><a class="block text-slate-600 font-medium hover:text-sky-700 hover:translate-x-2 transition-all duration-300" href="{{ route('profiles.index') }}">Profiles</a></li>
                </ul>
            </nav>
            <div class="content px-16 py-12">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
