<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="h-screen bg-gray-100 font-nunito">
    <div id="app">
        <nav class="bg-white shadow-sm">
            <div class="container flex justify-between items-center mx-auto px-6 py-4">
                <div>
                    <a href="{{ url('/') }}" class="text-xl text-gray-800">{{ config('app.name', 'Laravel') }}</a>
                </div>

                <div>
                    @guest
                    <a href="{{ route('login') }}"
                        class="text-gray-700 font-light mx-4 hover:underline">{{ __('Login') }}</a>
                    <a href="{{ route('register') }}"
                        class="text-gray-700 font-light hover:underline">{{ __('Register') }}</a>
                    @else
                    <div class="relative">
                        <button @click="dropdownOpen = !dropdownOpen"
                            class="relative z-10 block text-gray-700 font-light focus:outline-none">
                            @if (Auth::user()->avatar)
                            <div class="flex items-center justify-center">
                                <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->avatar }}" alt="User Avatar">
                                <svg class="ml-1 fill-current text-gray-600" :class="{ 'text-blue-500': dropdownOpen }"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="10" height="10"
                                    viewBox="0 0 292.362 292.362" xml:space="preserve">
                                    <path
                                        d="M286.935 69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952 0-9.233 1.807-12.85 5.424C1.807 72.998 0 77.279 0 82.228c0 4.948 1.807 9.229 5.424 12.847l127.907 127.907c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428L286.935 95.074c3.613-3.617 5.427-7.898 5.427-12.847 0-4.948-1.814-9.229-5.427-12.85z" />
                                </svg>
                            </div>
                            @else
                            <div class="flex items-center justify-center">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="ml-1 fill-current text-gray-600" :class="{ 'text-blue-500': dropdownOpen }"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="10" height="10"
                                    viewBox="0 0 292.362 292.362" xml:space="preserve">
                                    <path
                                        d="M286.935 69.377c-3.614-3.617-7.898-5.424-12.848-5.424H18.274c-4.952 0-9.233 1.807-12.85 5.424C1.807 72.998 0 77.279 0 82.228c0 4.948 1.807 9.229 5.424 12.847l127.907 127.907c3.621 3.617 7.902 5.428 12.85 5.428s9.233-1.811 12.847-5.428L286.935 95.074c3.613-3.617 5.427-7.898 5.427-12.847 0-4.948-1.814-9.229-5.427-12.85z" />
                                </svg>
                            </div>

                            @endif
                        </button>

                        <div v-if="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10">
                        </div>

                        <div v-if="dropdownOpen"
                            class="absolute right-0 mt-2 py-2 w-56 bg-gray-100 rounded-md shadow-xl z-20">
                            <div class="px-4 py-2 text-sm text-gray-700">
                                Signed in as <span class="font-bold">{{ Auth::user()->name }}</span>
                            </div>
                            <a href="{{ route('logout') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f1a41227258dc118beed3d5/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>