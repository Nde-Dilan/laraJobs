<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js','resources/js/isMobile.js'])

    <title>LaraJobs | Find Laravel Jobs & Projects</title>
</head>

<body class="mb-48 dark:bg-slate-950">

    {{-- En suivant la regle du 60-30-10 pour le choix des couleurs ,j'ai un design de 60% de blanc, 30% de rouge et 10% de noir. Quelles couleures(toujours en suivant la regle du 60-30-10) dois je utiliser pour implementer mon dark mode? --}}

    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="" class="logo" /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li>
                <button class="mt-3">
                    <svg class="sun" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-sun" viewBox="0 0 16 16">
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                      </svg>
                </button>
            </li>
            @auth
            <li>
                <p class="font-bold mt-2 text-black dark:text-white">Welcome {{auth()->user()->name}} ✨</p>
            </li>
            <li>
                <button class="border border-black font-bold rounded-xl p-2 dark:border dark:border-white dark:text-white">
                    <a href="/users/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket "></i>
                       ⚙️ Manage Jobs</a>
                </button>
            </li>
            <li>
                <form action="/users/logout" method="POST" class="border border-black font-bold rounded-xl p-1 dark:border dark:border-red-600 cursor-pointer dark:bg-white dark:text-red-600">
                    @csrf
                       <button type="submit">Logout</button>
                </form>
            </li>
            @else
            <li>
                <button class="border border-black rounded-xl font-bold p-2 dark:border dark:border-white dark:text-white">

                    <a href="/users/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i>
                        Register</a>
                </button>
            </li>
            <li>
                <button class="border border-black font-bold rounded-xl p-2 dark:border dark:border-white dark:text-white">
                    <a href="/users/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket "></i>
                        Login</a>
                </button>
            </li>
            @endauth
           
        </ul>
    </nav>

    <main>


        {{-- @yield('content') --}}

        {{ $slot }}


    </main>




    <footer
        class="dark:bg-neutral-800 fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2023, All Rights reserved, by Nde Dilan </p>

        <button class="">
            <a href="/jobs/create/"
                class="absolute top-1/3 right-10 bg-black rounded-xl border border-white text-white py-2 px-5 hover:text-black hover:bg-white hover:border hover:border-black">Post
                Job</a>
        </button>
    </footer>
</body>
<x-flash-message />

</html>

</body>

</html>
