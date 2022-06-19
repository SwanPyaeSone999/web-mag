<x-app-layout>

    <main class="h-screen overflow-y-auto mt-4">
        <div class=" px-6 my-6 mx-auto">
            <h2 class="my-6 text-2xl font-normal " >
                Users
            </h2>
            <div class="mt-6">
                <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created at</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                    </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$user['name']}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$user['email']}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$user['created_at']->format('M d Y')}}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    <a href="{{ route('admin.user.edit',$user['id']) }}" class="text-yellow-400">Edit</a> |
                                                    <a href="{{ route('admin.user.destroy',$user['id']) }}" class="text-red-400">Delete</a>
                                            </td>
                                        </tr>
                                    <!-- paginate... -->
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="mt-3">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </main>

</x-app-layout>
