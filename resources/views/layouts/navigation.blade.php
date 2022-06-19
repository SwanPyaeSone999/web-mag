<nav x-data="{ openSideMenu: true }" class="bg-white border-b border-gray-100">
    <div class="flex h-screen bg-gray-100">
        <aside x-show="openSideMenu" class="z-20 hidden w-48 overflow-y-auto bg-white  sm:block">
            <div class="py-4 text-gray-500 ">
                <a class="ml-6 text-lg font-serif text-gray-800 " href="#">
                    WEBMAG
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-1 mb-3">
                        <a href="{{ route('admin.dashboard') }}" class="inline-flex items-center w-full text-sm font-semibold text-gray-700 transition-colors duration-150 hover:text-gray-900 ">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                            <span class="ml-2">Dashboard</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-1 mb-3">
                        <a href="{{ route('admin.user.index') }}" class="inline-flex items-center w-full text-sm font-semibold text-gray-700 transition-colors duration-150 hover:text-gray-900 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                            <span class="ml-2">User</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-1 mb-3">
                        <a href="{{ route('admin.post.index') }}" class="inline-flex items-center w-full text-sm font-semibold text-gray-700 transition-colors duration-150 hover:text-gray-900 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            <span class="ml-2">Posts</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-1 mb-3">
                        <a href="{{ route('admin.tag.index') }}" class="inline-flex items-center w-full text-sm font-semibold text-gray-700 transition-colors duration-150 hover:text-gray-900 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-2">Tags</span>
                        </a>
                    </li>
                    <li class="relative px-6 py-1 mb-3">
                        <a href="{{ route('admin.category.index') }}" class="inline-flex items-center w-full text-sm font-semibold text-gray-700 transition-colors duration-150 hover:text-gray-900 ">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-2">category</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md ">
                <div class=" flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <button class="p-1  -ml-1 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-200" @click="openSideMenu = !openSideMenu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor"viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class=" sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </header>

            {{$slot}}
        </div>
    </div>
</nav>
