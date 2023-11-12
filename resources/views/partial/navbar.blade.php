<nav class="bg-white dark:bg-gray-800 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="flex flex-wrap items-center justify-between mx-auto py-4 px-4 md:px-8">
        <a href="/" class="flex items-center">
            <img src="/images/gosyen_logo.png" class="mr-3 w-16" alt="Gosyen Logo" />
        </a>
        <div class="flex md:order-2">
            <a href="/contact_us" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 pt-2.5 pb-2 text-center dark:bg-blue-600 dark:hover:bg-blue-500 dark:focus:ring-sky-800">
                Contact us
              </a>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="ml-4 inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                <li>
                    <a href="/"
                        class="block py-2 pl-3 pr-4 {{ $active_1 ?? "text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0 md:dark:hover:text-sky-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"}}"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 {{ $active_2 ?? "text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0 md:dark:hover:text-sky-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"}}">Services<svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
          </svg></button>
                    <div id="dropdownNavbar" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-48 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="/services/1" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Business Consulting</a>
                          </li>
                          <li>
                            <a href="/services/2" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Audit</a>
                          </li>
                          <li>
                            <a href="/services/3" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Financial Statement</a>
                          </li>
                          <li>
                            <a href="/services/4" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Family Business Mentoring</a>
                          </li>
                          <li>
                            <a href="/services/5" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Employee Coaching</a>
                          </li>
                          <li>
                            <a href="/services/6" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Accounting Service</a>
                          </li>
                        </ul>
                        <div class="py-1">
                          <a href="/services" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">See all</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="/clients"
                        class="block py-2 pl-3 pr-4 {{ $active_3 ?? "text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0 md:dark:hover:text-sky-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"}}">Client</a>
                </li>
                <li>
                    <a href="/teams"
                        class="block py-2 pl-3 pr-4 {{ $active_4 ?? "text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0 md:dark:hover:text-sky-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"}}">Our
                        Team</a>
                </li>
                <li>
                    <a href="/gallery"
                        class="block py-2 pl-3 pr-4 {{ $active_5 ?? "text-gray-800 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-sky-700 md:p-0 md:dark:hover:text-sky-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"}}">Gallery</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
