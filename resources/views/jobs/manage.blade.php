<x-layout>
    <div class="mx-4">
        <x-card class="p-10">
            <header>
                <h1 class="text-3xl text-center font-bold text-customBlack my-6 uppercase">
                    Manage Gigs 📜 ✍️ 
                </h1>
            </header>

            <table class="w-full table-auto rounded-sm">
                <tbody>
                    @unless (count($jobs) == 0)
                    @foreach ($jobs as $job)
                        <tr class="border-gray-300">
                            <td><img class="mb-6 max-md:hidden"
                                src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('images/no-image.png') }}"
                                alt="{{ $job->company }}" width="68" /></td>
                            <td class=" py-8 border-t border-b border-gray-300 text-lg">
                                
                                <a href="/jobs/{{ $job->id }}" class="font-bold">
                                    {{ $job->title }}
                                </a>
                                <p class="font-semibold">{{ substr($job->description, 1, 100) }}...</p>
                            </td>
                            <div class="flex justify-between space-x-6 mt-4 p-2">

                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <button class="h-10 w-20 text-white rounded-lg bg-green-500 hover:bg-green-600"><a
                                            href="/jobs/edit/{{ $job->id }}">✍️ Edit</a></button>
                                </td>
                                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                    <form action="/jobs/{{ $job->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="h-10 w-28 text-white rounded-lg bg-red-500 hover:bg-red-600">
                                            🗑️ Delete
                                        </button>
                                    </form>
                                </td>

                            </div>

                        </tr>
                    @endforeach
                    @else
                    <h1 class="m-5 font-bold">🥲 No jobs found. <button class="border border-white ring-1 ring-white bg-green-500 p-2 m-2 rounded-lg text-white font-bold"><a href="/jobs/create"> Wanna post one ?</a></button> </h1>
                @endunless
                </tbody>
            </table>
    </div>
    </x-card>
    </div>
</x-layout>
