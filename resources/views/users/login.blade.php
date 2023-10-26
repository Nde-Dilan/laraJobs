<x-layout>
    <div class="mx-4">
        <x-card class="rounded-xl w-8/12 max-w-lg mx-auto mt-24 p-10">
            <header class="text-center">
                <h2 class="text-2xl font-bolder uppercase mb-1">
                    Login
                </h2>
                <p class="mb-4 font-bold">Log into your account to post gigs</p>
            </header>

            <form action="/users/login" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="email" class="inline-block text-lg mb-2">Email</label>
                    <input type="email" value="{{old('email')}}" class="border border-gray-200 rounded p-2 w-full" name="email" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password" class="inline-block text-lg mb-2">
                        Password
                    </label>
                    <input type="password" value="{{old('password')}}" class="border border-gray-200 rounded p-2 w-full" name="password" />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">*{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                        Login
                    </button>
                </div>

                <div class="flex justify-between mt-8">
                    <p class="text-xl font-mono font-bold mt-2">
                        Don't have an account?</p>
                        <button class="bg-black rounded-xl border border-white text-white py-2 px-5 mb-1 hover:text-black hover:bg-white hover:border hover:border-black"><a href="/users/register" class="">Sign Up</a></button>
                    
                </div>
            </form>
        </x-card>
    </div>
</x-layout>
