<x-app-layout>
    <main class="h-screen overflow-y-auto mt-4">
        <div class=" px-6 my-6 mx-auto">
            <h2 class="my-6 text-2xl font-normal " >
                Post Details
            </h2>
            <div class="bg-white p-4 rounded-md">
                    <div class="space-y-4">
                        <div><span>Name - </span>{{$post['name']}}</div>
                        <div><span>Category - </span>{{$post->category->name}}</div>
                        <div>
                            <span>Tags - </span>
                            @foreach ($post->tags as $tag)
                                {{$tag['name']}},
                            @endforeach
                        </div>
                        <div><span>Auhtor - </span>{{$post->user->name}}</div>
                    </div>
            </div>
        </div>
    </main>
</x-app-layout>
