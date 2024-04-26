<div>

    <h2 class="text-2xl mb-3 text-black">FaQ Peserta Orientasi PPPK Kurikulum 2</h2>

    <div class="flex">
    <input type="text" wire:model.live.bounce='search' placeholder="Search" class="ring-1 ring-inset bg-gray-100 mb-3 ring-gray-300 text-sm text-gray-900 rounded">

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

        {{-- <h2 id="accordion-collapse-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                aria-controls="accordion-collapse-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden"
            aria-labelledby="accordion-collapse-heading-2">
            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and
                    designed using the Figma software so everything you see in the library has a design
                    equivalent in our Figma file.</p>
                <p class="text-gray-500 dark:text-gray-400">Check out the <a
                        href="https://flowbite.com/figma/"
                        class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
                    based on the utility classes from Tailwind CSS and components from Flowbite.</p>
            </div>
        </div>
        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                aria-controls="accordion-collapse-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden"
            aria-labelledby="accordion-collapse-heading-3">
            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core
                    components from Flowbite are open source under the MIT license, whereas Tailwind UI
                    is a paid product. Another difference is that Flowbite relies on smaller and
                    standalone components, whereas Tailwind UI offers sections of pages.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using
                    both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason
                    stopping you from using the best of two worlds.</p>
                <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:
                </p>
                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                    <li><a href="https://flowbite.com/pro/"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a>
                    </li>
                    <li><a href="https://tailwindui.com/" rel="nofollow"
                            class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>
