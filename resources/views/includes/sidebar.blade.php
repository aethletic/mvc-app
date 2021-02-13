<div @click.away="open = false" class="flex flex-col text-blue-500 flex-shrink-0 navbar dark:navbar"
    x-data="{ open: false }">
    <div class="flex-shrink-0 px-4 py-4 flex flex-row items-center justify-between border-b dark:border-gray-800 h-16">
        <a href="#"
            class="flex-1 text-lg font-bold tracking-wider text-blue-500 uppercase rounded-lg focus:outline-none focus:shadow-outline">
            @app_name
        </a>

        <div id="theme" class="text-right mr-4 md:hidden mt-1 focus:outline-none">
            <div
                class="transform transition duration-200 w-8 h-8 text-yellow-300 cursor-pointer rounded-md  icon-middle -mt-1">
                <svg class="sun hidden w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
                <svg class="moon hidden w-5 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z">
                    </path>
                </svg>
            </div>
        </div>

        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path x-show="!open" fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
                <path x-show="open" fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}"
        class="flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto border-b md:border-none dark:border-gray-800">

        {{-- Dropdown --}}
        <div @click.away="open = false" class="relative" x-data="{ open: false }">
            <button @click="open = !open"
                class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark:hover:text-white hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 md:block  focus:outline-none focus:shadow-outline">
                <span>Выбрать бота</span>
                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
                    class="inline w-4 h-4 ml-1 transition-transform duration-200 transform">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div x-show="open" x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="transform opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="transform opacity-0 scale-95"
                class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                <div class="px-2 py-1 bg-white dark:bg-gray-800 rounded-md shadow dark-mode:bg-gray-800">
                    <a class="block px-4 py-2 my-1 text-sm  text-gray-700 bg-transparent rounded-lg hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 dark:text-white focus:outline-none focus:shadow-outline"
                        href="#">Сообщения</a>
                    <a class="block px-4 py-2 my-1 text-sm  text-gray-700 bg-transparent rounded-lg hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 dark:text-white focus:outline-none focus:shadow-outline"
                        href="#">Сообщения</a>
                    <a class="block px-4 py-2 my-1 text-sm  text-gray-700 bg-transparent rounded-lg hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 dark:text-white focus:outline-none focus:shadow-outline"
                        href="#">Сообщения</a>
                </div>
            </div>
        </div>
        {{-- End Dropdown --}}

        <div class="my-4 text-xs text-gray-400 font-semibold uppercase">Общее</div>
        <a class="block px-4 py-2 mt-2 text-sm  text-white bg-blue-500 font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:shadow-outline"
            href="#">Обзор</a>

        <a class="block px-4 py-2 mt-2 text-sm  text-gray-700 bg-transparent rounded-lg hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 dark:text-white focus:outline-none focus:shadow-outline"
            href="#">Сообщения</a>

        <a class="block px-4 py-2 mt-2 text-sm  text-gray-700 bg-transparent rounded-lg hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 dark:text-white focus:outline-none focus:shadow-outline"
            href="#">Пользователи</a>

        <div class="my-4 text-xs text-gray-400 font-semibold uppercase">Разное</div>
        <a class="block px-4 py-2 mt-2 text-sm  text-gray-700 bg-transparent rounded-lg hover:bg-black hover:bg-opacity-5 dark:hover:bg-opacity-25 dark:text-white focus:outline-none focus:shadow-outline"
            href="#">Настройки</a>



    </nav>
</div>