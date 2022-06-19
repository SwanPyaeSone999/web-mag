<div class="bg-white w-full shadow-md" x-clock>
    <div class="container mx-auto w-full h-16 px-4  bg-white  flex justify-between items-center">
        <div>
                <a href="/" class="uppercase font-bold text-xl">WEBMAG</a>
        </div>
        <div class="flex" x-data="{toggleSideMenu : false}">
            {{-- search --}}
            <x-layouts.search></x-layouts.search>
            {{-- humbergar --}}
            <x-layouts.menu-bar></x-layouts.menu-bar>
        </div>
    </div>
</div>
