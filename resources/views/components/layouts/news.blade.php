<section id="berita" class="p-5 mx-auto">
    <h1
        class="text-center mb-4 text-2xl md:text-3xl lg:text-4xl font-black tracking-tight leading-none text-zinc-900 dark:text-cream">
        Berita</h1>
    <div class="flex flex-col md:flex-col lg:flex-row gap-3">
        <div class="lg:hidden bg-blue-200">
            <iframe class="rounded-lg items-center h-64 w-full" src="https://www.youtube.com/embed/8hDolB3LBN8?start=26"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="flex flex-col basis-2/4">

            <div class="grid grid-cols-2 gap-3 ">
                @foreach ($posts as $post)
                    <div
                        class="bg-cream border border-white rounded-lg shadow-md dark:bg-zinc-800 dark:border-zinc-700">
                        <a href="#">
                            <img class="rounded-t-lg" src="assets/image/masjid-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5
                                    class="mb-2 md:text-left lg:text-left sm:text-center sm:text-xs text-xl md:text-2xl lg:text-2xl font-bold tracking-tight text-zinc-900 dark:text-cream">
                                    {{ $post->title }}</h5>
                            </a>
                            <div class="h-48">
                                <p
                                    class="hidden text-ellipsis overflow-hidden h-full md:block lg:block mb-3 font-normal text-sm md:text-base lg:text-lg text-zinc-700 dark:text-zinc-400">
                                    {{ $post->body }}</p>
                            </div>
                            <a href="/posts/{{ $post->slug }}"
                                class="inline-flex items-center py-2 sm:text-xs md:text-sm lg:text-sm text-sm font-medium text-center text-zinc-900 bg-transparent rounded-lg dark:text-cream">
                                Read more
                                <svg aria-hidden="true"
                                    class="sm:hidden md:inline-block lg:inline-block w-4 h-4 ml-2 -mr-1"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{-- <div
                    class="grow bg-cream border border-white rounded-lg shadow-md dark:bg-zinc-800 dark:border-zinc-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/image/masjid-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 md:text-left lg:text-left sm:text-center sm:text-xs text-xl md:text-2xl lg:text-2xl font-bold tracking-tight text-zinc-900 dark:text-cream">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p
                            class="hidden md:block lg:block mb-3 font-normal sm:text-xs text-sm md:text-base lg:text-lg text-zinc-700 dark:text-zinc-400">
                            Here
                            are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center py-2 sm:text-xs md:text-sm lg:text-sm font-medium text-center text-zinc-900 bg-transparent rounded-lg dark:text-cream">
                            Read more
                            <svg aria-hidden="true" class="sm:hidden md:inline-block lg:inline-block w-4 h-4 ml-2 -mr-1"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-cream border border-white rounded-lg shadow-md dark:bg-zinc-800 dark:border-zinc-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/image/masjid-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 md:text-left lg:text-left sm:text-center sm:text-xs text-xl md:text-2xl lg:text-2xl font-bold tracking-tight text-zinc-900 dark:text-cream">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p
                            class="hidden md:block lg:block mb-3 font-normal text-sm md:text-base lg:text-lg text-zinc-700 dark:text-zinc-400">
                            Here
                            are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.</p>
                        <a href="#"
                            class="inline-flex items-center py-2 sm:text-xs md:text-sm lg:text-sm text-sm font-medium text-center text-zinc-900 bg-transparent rounded-lg dark:text-cream">
                            Read more
                            <svg aria-hidden="true" class="sm:hidden md:inline-block lg:inline-block w-4 h-4 ml-2 -mr-1"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-cream border border-white rounded-lg shadow-md dark:bg-zinc-800 dark:border-zinc-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/image/masjid-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5
                                class="mb-2 md:text-left lg:text-left sm:text-center sm:text-xs text-xl md:text-2xl lg:text-2xl font-bold tracking-tight text-zinc-900 dark:text-cream">
                                Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p
                            class="hidden md:block lg:block mb-3 font-normal text-sm md:text-base lg:text-lg text-zinc-700 dark:text-zinc-400">
                            Here
                            are the biggest enterprise
                            technology
                            acquisitions of 2021 so far, in reverse chronological order.
                        </p>
                        <a href="#"
                            class="inline-flex items-center py-2 sm:text-xs md:text-sm lg:text-sm font-medium text-center text-zinc-900 bg-transparent rounded-lg dark:text-cream">
                            Read more
                            <svg aria-hidden="true" class="sm:hidden md:inline-block lg:inline-block w-4 h-4 ml-2 -mr-1"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div> --}}
                <!-- Previous Button -->
                <div class="flex justify-center col-span-2">
                    <div class="inline-flex items-center">
                        {{-- disabled when on first page --}}
                        <a href="#"
                            class="hidden inline-flex justify-center sm:w-auto w-32 px-4 py-2 mr-3 text-sm font-medium text-zinc-500 dark:bg-zinc-700 rounded-md">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Previous
                        </a>
                        <a href="#"
                            class="inline-flex justify-center sm:w-auto w-32 px-4 py-2 mr-3 text-sm font-medium text-zinc-500 dark:bg-zinc-700 rounded-md">
                            <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Previous
                        </a>
                        <a href="#"
                            class="inline-flex justify-center sm:w-auto w-32 px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            Next
                            <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex md:hidden flex-col flex-1">
            <iframe class="rounded-lg items-center h-2/4 w-full"
                src="https://www.youtube.com/embed/8hDolB3LBN8?start=26" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <!-- archive box -->
            <div class="bg-blue-200 w-full h-2/4 filter-box">

            </div>
        </div>
    </div>
</section>
