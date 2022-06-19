<button class="p-1 mr-5 -ml-1 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-200" @click="toggleSideMenu = !toggleSideMenu">
        <x-icon.humbergar></x-icon.humbergar>
</button>
 {{-- side bar open --}}
<div class="navbar   fixed top-0  z-20 left-0 bg-gray-600/50 h-screen w-full" x-show="toggleSideMenu" x-cloak>
    <div class="w-64   relative left-0 bg-white tracking-wider h-screen overflow-y-auto">
        <div class="text-black  absolute top-4 right-5 hover:text-red-500" @click="toggleSideMenu = !toggleSideMenu">
            <x-icon.close></x-icon.close>
        </div>
        <ul class="space-y-5 pt-20 px-10">
            <x-link class="font-semibold">Home</x-link>
            <x-link class="font-semibold">About Us</x-link>
            <x-link class="font-semibold">Join Us</x-link>
            <x-link class="font-semibold">Contact</x-link>
            @guest
            <div class="text-sm font-semibold  divide-yellow-400 ">
                <a href="/login" class="hover:underline hover:decoration-cyan-300 hover:decoration-wavy">Login</a> |
                <a href="/register" class="hover:underline hover:decoration-cyan-300 hover:decoration-wavy"> Register</a>
            </div>
            @endguest
        </ul>
        <div class="mt-10 px-6">
           {{-- recent post --}}
            <h3 class="text-sm font-bold tracking-wider">Recent Post</h3>
            {{-- side recent card --}}
            <x-layouts.side-post-card></x-layouts.side-post-card>

        </div>
    </div>
</div>

