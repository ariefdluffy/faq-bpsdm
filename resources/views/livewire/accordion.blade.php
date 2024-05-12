<div>

    {{-- <h2 class="text-2xl mb-3 text-black">FaQ Peserta Orientasi PPPK Kurikulum 2</h2> --}}

    <div class="flex">
        <br>
    {{-- <input type="text" wire:model.live.debounce.250ms='search'
     placeholder="Search"
     class="ring-1 ring-inset bg-gray-100 mb-3 ring-gray-300 text-sm text-gray-900 rounded"> --}}

    {{-- <button wire:click='search' type="button" class="block px-4 ml-2 py-3 mb-3 bg-teal-500 rounded">
        Search
    </button> --}}
    </div>

    <div>
        @foreach ($questions as $question)
            {{-- <div wire:key="accordion-collapse-body-{{ $question->id}}" id="accordion-collapse-heading-{{ $question->id }}">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-white-500 border border-t-0 border-black-200 rounded-t-xl"
                    data-accordion-target="#accordion-collapse-body-{{ $question->id }}" aria-expanded="true"
                    aria-controls="accordion-collapse-body-{{ $question->id }}">
                    <span>{{ $question->pertanyaan }}</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" d="M9 5 5 1 1 5" />
                    </svg>
                </button>
            </div>
            <div id="accordion-collapse-body-{{ $question->id }}" class="hidden"
                aria-labelledby="accordion-collapse-heading-{{ $question->id }}">
                <div class="p-5 border border-t-0 border-black-200 dark:border-black-700 dark:bg-black-900">
                    <p class="mb-2 text-black">{!! $question->jawaban !!}</p>
                </div>
            </div> --}}

            <div class="relative mb-3">
                <h4 class="mb-0">
                    <button
                        class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
                        data-collapse-target="collapse-{{ $question->id }}">
                        <span>{{ $question->pertanyaan }}</span>
                        <i class="absolute right-0 pt-1 text-md fa fa-plus group-open:opacity-0"></i>
                        <i class="absolute right-0 pt-1 text-md opacity-0 fa fa-minus group-open:opacity-100"></i>
                    </button>
                </h4>
                <div data-collapse="collapse-{{ $question->id }}" class="h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="p-4 text-md leading-normal text-blue-gray-500/80">
                        {!! $question->jawaban !!}
                    </div>
                </div>
            </div>
        @endforeach

        <br>
        {{-- {{ $questions->links() }} --}}
        <br>

    </div>
</div>
