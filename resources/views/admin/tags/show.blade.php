<x-app-layout>
    <main class="h-screen overflow-y-auto mt-4">
        <div class=" px-6 my-6 mx-auto">
            <h2 class="my-6 text-2xl font-normal " >
                Tags
            </h2>
            <x-auth-session-status class="mb-4" :status="session('success')" />
            <x-button class="bg-indigo-600 space-x-2 hover:bg-indigo-500">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <a href="{{ route('admin.tag.create') }}">Create</a>
            </x-button>
            <div class="mt-6">
                <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Index</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created-at</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($tags as $tag)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace text-sm text-gray-500">{{$tag['id']}}</td>
                                            <td class="px-6 py-4 whitespace text-sm text-gray-500">{{$tag['name']}}</td>
                                            <td class="px-6 py-4 whitespace text-sm text-gray-500">{{$tag['created_at']->format('M d Y')}}</td>
                                            <td class="px-6 py-4 whitespace text-sm  flex ">
                                                <a href="{{ route('admin.tag.edit',$tag['id']) }}" class="text-yellow-400">Edit</a>   |
                                                <form action="{{ route('admin.tag.destroy',$tag['id']) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button type="submit"  class="text-red-400">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <!-- paginate... -->
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="mt-3">
                                {{ $tags->links() }}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>

</x-app-layout>
