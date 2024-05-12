<div>
    <section class="bg-white pb-10 pt-2 dark:bg-dark lg:pb-20 lg:pt-[120px]">
        <div class="container mx-auto">
          <div class="-mx-4 flex flex-wrap justify-center">
            <div class="w-full px-4">
              <div class="mx-auto mb-[60px] max-w-[605px] text-center">
                <span class="mb-2 block text-lg font-semibold text-primary">
                  Jadwal Kegiatan
                </span>
                <h2
                  class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]"
                >
                Orientasi PPPK Kurikulum 2
                </h2>
                  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                              <tr>
                                  <th scope="col" class="px-6 py-3">
                                      Nama Kegiatan
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Tanggal Buka Registrasi
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      PIC
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Link Registrasi
                                  </th>
                                  <th scope="col" class="px-6 py-3">
                                      Link Grup
                                  </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($schedules as $schedule)
                              <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                      {{ $schedule->nama_pelatihan }}
                                  </th>
                                  <td class="px-6 py-4">
                                    {{-- {{ $schedule->tanggal_buka }} --}}
                                    {{ Carbon\Carbon::parse($schedule->tanggal_buka)->format('d M Y') }}
                                  </td>
                                  <td class="px-6 py-4">
                                    {{ $schedule->pic_kegiatan }}
                                  </td>
                                  <td class="px-6 py-4">
                                    <a href="{{ $schedule->link_regis }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link Registrasi</a>
                                  </td>
                                  <td class="px-6 py-4">
                                      <a href="{{ $schedule->link_grup }}" target="_blank" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Link Grup</a>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                      {{-- {{ $schedules->links() }} --}}
                  </div>

                {{-- <p class="text-base text-body-color dark:text-dark-6">
                  There are many variations of passages of Lorem Ipsum available
                  but the majority have suffered alteration in some form.
                </p> --}}
              </div>
            </div>
          </div>
          {{-- <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <div class="wow fadeInUp group mb-10" data-wow-delay=".1s">
                <div class="mb-8 overflow-hidden rounded-[5px]">
                  <a href="blog-details.html" class="block">
                    <img
                      src="./assets/images/blog/blog-01.jpg"
                      alt="image"
                      class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                    />
                  </a>
                </div>
                <div>
                  <span
                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                  >
                    Dec 22, 2023
                  </span>
                  <h3>
                    <a
                      href="javascript:void(0)"
                      class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                    >
                      Meet AutoManage, the best AI management tools
                    </a>
                  </h3>
                  <p
                    class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <div class="wow fadeInUp group mb-10" data-wow-delay=".15s">
                <div class="mb-8 overflow-hidden rounded-[5px]">
                  <a href="blog-details.html" class="block">
                    <img
                      src="./assets/images/blog/blog-02.jpg"
                      alt="image"
                      class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                    />
                  </a>
                </div>
                <div>
                  <span
                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                  >
                    Mar 15, 2023
                  </span>
                  <h3>
                    <a
                      href="javascript:void(0)"
                      class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                    >
                      How to earn more money as a wellness coach
                    </a>
                  </h3>
                  <p
                    class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
              <div class="wow fadeInUp group mb-10" data-wow-delay=".2s">
                <div class="mb-8 overflow-hidden rounded-[5px]">
                  <a href="blog-details.html" class="block">
                    <img
                      src="./assets/images/blog/blog-03.jpg"
                      alt="image"
                      class="w-full transition group-hover:rotate-6 group-hover:scale-125"
                    />
                  </a>
                </div>
                <div>
                  <span
                    class="mb-6 inline-block rounded-[5px] bg-primary px-4 py-0.5 text-center text-xs font-medium leading-loose text-white"
                  >
                    Jan 05, 2023
                  </span>
                  <h3>
                    <a
                      href="javascript:void(0)"
                      class="mb-4 inline-block text-xl font-semibold text-dark hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl"
                    >
                      The no-fuss guide to upselling and cross selling
                    </a>
                  </h3>
                  <p
                    class="max-w-[370px] text-base text-body-color dark:text-dark-6"
                  >
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry.
                  </p>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </section>
</div>
