<x-layout>
    <x-card class="max-w-lg p-10 mx-auto mt-24">

        <header class="text-center">
            <h2 class="text-2xl font-bold mb-2">
                ✍️ Edit Gig "{{$job->title}}" 
            </h2>
            <p class="mb-4 text-green-800 font-semi-bold">Edit your posted gig to find a developer</p>
        </header>

        <form method="POST" action="/jobs/{{$job->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                    value="{{ $job->company }}" />
                @error('company')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ $job->title }}" />
                @error('title')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ $job->location }}" />
                @error('location')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ $job->email}}" />
                @error('email')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ $job->website }}" />
                @error('website')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $job->tags }}" />
                @error('tags')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                <img width="50" class="w-35 mr-6 mb-6"
                src="{{ $job->logo ? asset('storage/' . $job->logo) : asset('images/no-image.png') }}"
                alt="{{ $job->company }}" />
                @error('logo')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ $job->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs">*{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 flex justify-between">
                <button class="bg-green-600 text-white rounded py-2 px-4">
                    ✍️ Edit Gig
                </button>

                <button type="button" class="h-10 w-20 mb-3 py-2 px-0 mx-2 rounded-lg bg-red-500 hover:bg-red-600">
                    <a href="/" class="inline-block text-bold  text-black ml-2 mb-4"><i class="fa-solid fa-arrow-left"></i>⬅️ Back
                    </a>
                </button>
            </div>
        </form>
    </x-card>
</x-layout>
