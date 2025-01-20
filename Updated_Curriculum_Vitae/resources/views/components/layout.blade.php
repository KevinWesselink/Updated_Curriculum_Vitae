<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: '#ef3b2d',
                        laravel_hover:'#d43124',
                    },
                },
            },
        }
    </script>
    <title>Kevin Wesselink | Curriculum Vitae</title>
</head>

<body class="mb-4">
    <nav class="flex justify-between items-center mt-4 mb-4">
        <a href="/" class="ml-6 hover:text-laravel">
            <i class="fa-solid fa-house"></i> {{ __('layout.home') }}
        </a>

        <a href="{{ route('searchPage') }}" class="ml-6 hover:text-laravel">
            <i class="fa-solid fa-address-card"></i> {{ __('layout.search_personalia') }}
        </a>

        <a href="{{ route('aboutCV') }}" class="ml-6 hover:text-laravel">
            <i class="fa-solid fa-address-card"></i> {{ __('layout.about_website') }}
        </a>

        <a href="https://github.com/KevinWesselink" target="_blank" class="ml-6 hover:text-laravel">
            <i class="fa-brands fa-github"></i> {{ __('layout.github') }}
        </a>

        <form action="{{ route('lang.switch') }}" method="POST">
            @csrf
            <select name="lang" id="langSwitch" onchange="this.form.submit()" class="border border-gray-200 rounded p-2">
                @foreach (config('languages') as $lang => $language)
                <option value="{{ $lang }}" {{ session('applocale', config('app.locale')) == $lang ? 'selected' : '' }}>
                    {{ $language }}
                </option>
                @endforeach
            </select>
        </form>

        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
                <li>
                    <a href="{{ route('settings') }}" class="ml-6 hover:text-laravel">
                        <i class="fa-solid fa-gear"></i> {{ __('layout.settings') }}
                    </a>
                </li>
                <li>
                    <span class="font-bold uppercase">
                        {{ __('layout.welcome') }} {{ auth()->user()->firstName }}
                    </span>
                </li>
                <li>
                    <a href="{{ route('manage', auth()->user()->id) }}" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> {{ __('layout.manage') }}</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="hover:text-laravel" type="submit">
                            <i class="fa-solid fa-door-closed"></i> {{ __('layout.logout') }}
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('register') }}" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> {{ __('layout.register') }}</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        {{ __('layout.login') }}</a>
                </li>
            @endauth
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>

    {{-- <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights Reserved</p>
        <a href="/choice" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Update CV</a>
    </footer> --}}

    <x-flash-message />
</body>

</html>
