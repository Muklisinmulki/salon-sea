  <!-- Navbar -->
  <nav class="bg-black border-gray-200 dark:bg-gray-900 fixed top-0 left-0 right-0 z-50">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-white dark:text-white">SEA Salon</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-400 rounded-lg md:hidden focus:outline-none focus:ring-2" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 dark:border-gray-700">
                <li>
                    <a href="{{ route('home') }}" class="navbar-link block py-2 px-3 text-black rounded md:bg-transparent md:text-white md:p-0 dark:text-white">Home</a>
                </li>
                <li>
                    <a href="#" class="navbar-link block py-2 px-3 text-gray-200 rounded md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white">Service</a>
                </li>
                <li>
                    <a href="#" class="navbar-link block py-2 px-3 text-gray-200 rounded md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white">Branch</a>
                </li>
                <li>
                    <a href="#" class="navbar-link block py-2 px-3 text-gray-200 rounded md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white">News</a>
                </li>
                <li>
                    <a href="#" class="navbar-link block py-2 px-3 text-gray-200 rounded md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white">Promo</a>
                </li>
                <li>
                    <a href="#" class="navbar-link block py-2 px-3 text-gray-200 rounded md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0 dark:text-white">Career</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

