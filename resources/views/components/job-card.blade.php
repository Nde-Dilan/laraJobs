@props(['job'])
<x-card class="">
    <div class="relative flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ $job->logo ? asset('storage/'.$job->logo) : asset('images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/jobs/{{ $job->id }}">{{ $job->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $job->company }}</div>

            <x-job-tag class="flex" :tagsCsv="$job->tags" />

            <div class="flex flex-row  text-lg gap-5 mt-4">
                <p><i class="fa-solid fa-location-dot"></i> {{ $job->location }}</p>

                <div class="absolute top-25 right-2">

                    <button type="button"
                        class="dark:bg-red-600 h-10 w-20 text-white rounded-lg bg-red-500  hover:bg-red-600 "><a
                            href="/jobs/{{ $job->id }}">View Job</a></button>
                </div>
            </div>
        </div>
    </div>
</x-card>
