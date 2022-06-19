<x-app-layout>
    <main class="h-screen overflow-y-auto mt-4">
        <div class=" px-6 my-6 mx-auto">
            <h2 class="my-6 text-2xl font-normal " >
                Edit Tag
            </h2>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="bg-white p-4 rounded-md">
                <form action="{{ route('admin.tag.update', $tag['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="space-y-3 mb-4">
                        <x-label for="name" class="text-sm" :value="__('Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$tag['name']}}"  autofocus />
                    </div>
                    <x-button type="submit ">Edit</x-button>
                </form>

            </div>
        </div>
    </main>
</x-app-layout>
