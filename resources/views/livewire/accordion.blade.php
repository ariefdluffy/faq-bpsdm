<div >

    <h2 class="text-2xl mb-3 text-black">FaQ Peserta Orientasi PPPK Kurikulum 2</h2>

    <div class="flex">
    <input type="text" wire:model.live.debounce.250ms='search' placeholder="Search" class="ring-1 ring-inset bg-gray-100 mb-3 ring-gray-300 text-sm text-gray-900 rounded">

    {{-- <button wire:click='search' type="button" class="block px-4 ml-2 py-3 mb-3 bg-teal-500 rounded">
        Search
    </button> --}}
    </div>

    <div id="accordion-collapse" data-accordion="collapse">
        @foreach ($questions as $question)
            <h2 id="accordion-collapse-heading-{{ $question->id }}">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white-500 border border-t-0 border-black-200 rounded-t-xl focus:ring-4 focus:ring-white-200 dark:focus:ring-white-800 dark:border-white-700 dark:text-white hover:bg-white dark:hover:bg-white gap-3"
                    data-accordion-target="#accordion-collapse-body-{{ $question->id }}" aria-expanded="true"
                    aria-controls="accordion-collapse-body-{{ $question->id }}">
                    <span>{{ $question->pertanyaan }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </h2>
        <div id="accordion-collapse-body-{{ $question->id }}" class="hidden"
            aria-labelledby="accordion-collapse-heading-{{ $question->id }}">
            <div class="p-5 border border-t-0 border-black-200 dark:border-black-700 dark:bg-black-900">
                <p class="mb-2 text-black">{!! $question->jawaban !!}</p>
            </div>
        </div>
        @endforeach

        <br>
        {{ $questions->links() }}
        <br>

    </div>
</div>
