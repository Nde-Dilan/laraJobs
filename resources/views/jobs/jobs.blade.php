<x-layout>

    @include('partials/_hero')
    @include('partials/_search')
    {{-- Don't forget to npm run dev for tailwind css --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-3 mx-4">

        {{-- yuri sumino, the author of :-) --}}

        @unless (count($jobs) == 0)
            @foreach ($jobs as $job)
                <x-job-card :job="$job" />
            @endforeach
        @else
            <h1>No jobs found.</h1>
        @endunless

    </div>
    <div class="mt-6 p-4">
        {{ $jobs->links() }}
    </div>

</x-layout>
