<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="{{asset('images/favicon.ico')}}" />
        @vite('resources/css/app.css')

        <title>LaraJobs | Find Laravel Jobs & Projects</title>
    </head>
    <body class="mb-48">
        
        <nav class="flex justify-between items-center mb-4">
            <a href="/"
                ><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
                <li><button 
                    class="border border-black rounded-xl font-bold p-2">
                    
                        <a href="register.html" class="hover:text-laravel"
                            ><i class="fa-solid fa-user-plus"></i> Register</a
                        >
                </button>
                </li>
                <li>
                    <button 
                    class="border border-black font-bold rounded-xl p-2">
                        <a href="login.html" class="hover:text-laravel"
                            ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login</a
                        >
                    </button>
                </li>
            </ul>
        </nav>
        
<main>
      
    
    {{-- @yield('content') --}}
    
    {{$slot}}


</main>




<footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
>
    <p class="ml-2">Copyright &copy; 2023, All Rights reserved, by Nde Dilan </p>

    <button
    class="">
        <a
            href="create.html"
            class="absolute top-1/3 right-10 bg-black rounded-xl border border-white text-white py-2 px-5 hover:text-black hover:bg-white hover:border hover:border-black"
            >Post Job</a
        >
    </button>
</footer>
</body>
</html>

</body>
</html>