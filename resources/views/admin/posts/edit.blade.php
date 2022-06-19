<x-app-layout>
    <main class="h-screen overflow-y-auto mt-4">
        <div class=" px-6 my-6 mx-auto">
            <h2 class="my-6 text-2xl font-normal " >
                Edit Posts
            </h2>
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <div class="bg-white p-4 rounded-md">
                <form action="{{ route('admin.post.update', $post['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    <div class="space-y-3 mb-4">
                        <x-label for="name" class="text-sm" :value="__('Name')" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$post['name']}}"  autofocus />
                    </div>

                    <div class="space-y-3 mb-4">
                        <x-label for="slug" class="text-sm" :value="__('Slug')" />
                        <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{$post['slug']}}"  autofocus />
                    </div>

                    <div class="space-y-3 mb-4">
                        <x-label for="body" class="text-sm" :value="__('Body')" />
                        <x-textarea id="body" class="block mt-1 w-full" type="text" name="body"   autofocus>{{$post['body']}}</x-textarea>
                    </div>

                    <div class="space-y-3 mb-4">
                        <x-label for="thumbnail" class="text-sm" :value="__('Image')" />
                        <x-input type="file" name="thumbnail" value="{{$post['thumbnail']}}"
                                class="w-full mt-1 block rounded-none  file:mr-4 file:py-2 file:px-4
                                file:rounded-full file:border-0
                                file:text-sm file:font-semibold
                                file:bg-violet-50 file:text-violet-700
                                hover:file:bg-violet-100">
                        </x-input>
                    </div>

                    <div class="space-y-3 mb-4">
                        <x-label for="category_id" class="text-sm" :value="__('Category')" />
                        <select name="category_id" id="category_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Select</option>
                            @foreach (\App\Models\Category::all() as $category)
                                <option value="{{$category['id']}}" {{old('category_id', $category['id'] ) == $post->category['id'] ? 'selected' : ''}}  >{{ucwords($category['name'])}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="space-y-3 mb-4">
                        <x-label for="tag_id" class="text-sm" :value="__('Tag')" />
                        <select name="tag_id[]"  multiple="multiple"  id="tag" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Select</option>
                            @foreach (\App\Models\Tag::all() as $tag)
                                <option value="{{$tag['id']}}" @selected($tag['name'])  >{{ucwords($tag['name'])}}</option>
                            @endforeach
                        </select>
                    </div>
                    <x-button type="submit ">Edit</x-button>
                </form>

            </div>
        </div>
    </main>
    @push('script')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
            $(document).ready(function() {
            $('#tag').select2();
        });
    </script>
@endpush
</x-app-layout>
