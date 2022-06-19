<x-app-layout>

    <main class="h-screen overflow-y-auto mt-4">
        <div class=" px-6 my-6 mx-auto">
            <h2 class="my-6 text-2xl font-normal " >
                Dashboard
            </h2>
            <div class="grid  grid-cols-1 md:grid-cols-4 gap-6 mt-6 ">
                <div class="flex items-center p-2 bg-white  border-gray-900 rounded-lg shadow-xs dark:bg-gray-900">
                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                           <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                       </svg>
                    </div>
                    <div>
                       <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-100">User</p>
                       <p class="text-lg font-mono text-gray-700 dark:text-gray-200">{{ $user}}</p>
                    </div>
                </div>
                <div class="flex items-center p-2 bg-white  border-gray-900 rounded-lg shadow-xs dark:bg-gray-900">
                    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <div>
                       <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-100">Post</p>
                       <p class="text-lg font-mono text-gray-700 dark:text-gray-200">{{$post}}</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-app-layout>


{{-- <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                You're logged in!
            </div>
        </div>
    </div>
</div> --}}
