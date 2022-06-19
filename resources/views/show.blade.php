<x-layouts.app>

    <main class="md:px-10 px-4 mt-4">
        <div class="grid sm:grid-cols-12 grid-cols-2 gap-8  mt-10">
            <div class="col-span-8">
                <div>
                    <div class="bg-gray-600 relative w-full ">
                        <img class="w-full h-64 object-cover mix-blend-overlay" src="{{ asset($posts[0]['thumbnail'] ? 'storage/thumbnail/'. $posts[0]['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
                        <div class="absolute left-3 bottom-5 text-white">
                            <div>
                                <span class="bg-yellow-500 px-3 cursor-pointer py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show',$posts[0]->category->slug)}}">{{$posts[0]->category->name}}</a></span>
                                <span class="text-xs ml-4 text-white ">{{$posts[0]['created_at']}}</span>
                                <span class="text-xs ml-4 text-white "><a href="{{ route('post.author.show', $posts[0]->user->name) }}">({{$posts[0]->user->name}})</a></span>
                            </div>
                            <div class="mt-3  text-xs font-bold w-full ">
                                <a href="{{ route('post.details',$posts[0]['slug']) }}" class="text-xs hover:underline">{{$posts[0]['name']}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 grid grid-cols-1  md:grid-cols-2 gap-5">
                    @foreach ($posts as $post)
                        <div class="">
                            <img class="h-32 w-full object-cover object-center" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
                            <div class="mt-5">
                                <div>
                                    <span class="bg-blue-500 px-3 py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show',$post->category->slug) }}">{{$post->category->name}}</a></span>
                                    <span class="text-xs text-gray-800 ">{{$post['created_at']->format('M d Y')}}</span>
                                    <span class="text-xs ml-4  "><a href="{{ route('post.author.show', $post->user->name) }}">({{$post->user->name}})</a></span>
                                </div>
                                <div class="mt-3   text-xs font-bold w-full ">
                                    <a href="{{ route('post.details', $post['slug']) }}" class="hover:underline">{{$post['name']}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-5">
                    <x-ad></x-ad>
                </div>
                @foreach ($posts as $post)
                    @if ($loop->iteration <= 3)
                    <div class="mt-10 flex md:flex-row flex-col space-x-0 md:space-x-8">
                        <img width="" height="" class="w-full h-32 md:w-[300px]" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
                        <div class="mt-3">
                            <span class="bg-blue-500 px-3 py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show',$post->category->slug) }}">{{$post->category->name}}</a></span>
                            <span class="text-xs text-gray-800 ml-4 ">{{$post['created_at']->format('M d Y')}}</span>
                            <span class="text-xs ml-4  "><a href="{{ route('post.author.show', $post->user->name) }}">({{$post->user->name}})</a></span>
                            <h2 class="font-bold text-sm mt-4 hover:underline"><a href="{{ route('post.details',$post['slug']) }}">{{$post['name']}}</a></h2>
                            <p class="text-xs mt-4 text-gray-800 hidden sm:block">
                                    {{str()->limit($post['body'], 20, $end='.......')}}
                            </p>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="md:col-span-4 col-span-8">
               <div class="mb-5">
                    <x-ad></x-ad>
               </div>
                <x-post-card-2 :posts="$posts"></x-post-card-2>
                {{-- featur post --}}
                <div class="mt-6 space-y-6">
                    <x-category></x-category>
                    <x-tag></x-tag>
                </div>
            </div>
        </div>
    </main>

</x-layouts.app>
