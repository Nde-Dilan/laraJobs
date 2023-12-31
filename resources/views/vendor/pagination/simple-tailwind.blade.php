@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="dark:bg-stone-800 relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-black border border-gray-300 cursor-default leading-5 rounded-md">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="dark:bg-stone-800 relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-black border border-gray-300 leading-5 rounded-xl hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="dark:bg-stone-800 relative inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-black border border-gray-300 leading-5 rounded-xl hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class=" dark:bg-stone-800 relative inline-flex items-center px-4 py-2 text-sm font-medium rounded-xl text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
