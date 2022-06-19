<x-layouts.app>
        <main class="md:px-10 px-4 mt-4">
            {{-- feature-1 --}}
            <x-featured-card :posts="$posts"></x-featured-card>
            {{-- Recent post --}}
            <x-post-card :posts="$posts" title="Recent Post"></x-post-card>

            <div class="grid sm:grid-cols-12 grid-cols-2 gap-8  mt-10">
                <div class="col-span-8">
                    <div class="bg-gray-600 relative w-full mt-8">
                        <img class="w-full h-64 object-cover mix-blend-overlay" src="{{ asset($posts[0]['thumbnail'] ? 'storage/thumbnail/'. $posts[0]['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
                        <div class="absolute left-3 bottom-5 text-white">
                            <div>
                                <span class="bg-yellow-500 px-3 cursor-pointer py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show', $posts[0]->category->slug) }}">{{$posts[0]->category->name}}</a></span>
                                <span class="text-xs ml-4 text-white ">{{$posts[0]['created_at']->diffForHumans()}}</span>
                                <span class="text-xs ml-4  "><a href="{{ route('post.author.show', $posts[0]->user->name) }}">({{$posts[0]->user->name}})</a></span>
                            </div>
                            <div class="mt-3  text-xs font-bold w-full ">
                                <a href="{{ route('post.details', $posts[0]['slug']) }}" class="text-xs hover:underline">{{$posts[0]['name']}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 grid grid-cols-1  md:grid-cols-2 gap-5">
                       @foreach ($posts as $post)
                            @if ($loop->iteration <= 8)
                            <div class="">
                            <img class="h-32 w-full object-cover object-center" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
                                <div class="mt-5">
                                    <div>
                                        <span class="bg-blue-500 px-3 py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show', $posts[0]->category->slug) }}">{{$post->category->name}}</a></span>
                                        <span class="text-xs text-gray-800 ">{{$post['created_at']->diffForHumans()}}</span>
                                        <span class="text-xs ml-4 "><a href="{{ route('post.author.show', $post->user->name) }}">({{$post->user->name}})</a></span>
                                    </div>
                                    <div class="mt-3  text-xs font-bold  w-full ">
                                        <a href="{{ route('post.details', $post['slug']) }}" class="hover:underline" >{{$post['name']}}</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    </div>
                    <div class="md:col-span-4 col-span-8">
                       <x-post-card-2 :posts="$posts"></x-post-card-2>
                        {{-- featur post --}}
                        <x-featured-card-2 :posts="$posts"></x-featured-card-2>
                        <div class="mt-5 space-y-4">
                            <x-ad></x-ad>
                            <x-ad></x-ad>
                        </div>
                    </div>
            </div>

            <x-post-card :posts="$posts" title="Featured Post"></x-post-card>

            <div class="grid sm:grid-cols-12 grid-cols-2 gap-8  mt-12">
                <div class="col-span-8">
                    @foreach ($posts as $post)
                        @if ($loop->iteration <= 3)
                        <div class="mt-10 flex md:flex-row flex-col space-x-0 md:space-x-8">
                            <img width="300" height="" class="w-full h-32 md:w-[300px]" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
                            <div class="mt-3">
                                <span class="bg-blue-500 px-3 py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show',$post->category->slug) }}">{{$post->category->name}}</a></span>
                                <span class="text-xs text-gray-800 ml-4 ">{{$post['created_at']->format('M d Y')}}</span>
                                <span class="text-xs ml-4  "><a href="{{ route('post.author.show', $post->user->name) }}">({{$post->user->name}})</a></span>
                                <h1 class="font-bold text-sm mt-4 hover:underline"> <a href="{{ route('post.details', $post['slug']) }}">{{$post['name']}}</a></h1>
                                <p class="text-xs mt-4 text-gray-800 hidden sm:block">
                                        {{str()->limit($post['body'], 20, $end='.......')}}
                                </p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
                <div class="md:col-span-4 col-span-8 ">
                    <x-ad></x-ad>
                    {{-- category post --}}
                    <div class="mt-6 space-y-6">
                        <x-category></x-category>
                        <x-tag></x-tag>
                    </div>
                </div>
            </div>

        </main>
</x-layouts.app>



{{-- <div class="relative h-64">
    <div class="bg-gray-800/20 relative hover:bg-gray-800/50 transition-colors duration-300 ease-in-out">
        <img class="w-full h-[300px] sm:h-96  mix-blend-overlay object-cover object-center " src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="">
        <div class="absolute  left-3 bottom-5">
            <div class="text-xs mb-5 space-x-2">
                <a class="bg-yellow-500 rounded-full px-4 py-1 text-white" href="">JavaScript</a>
                <span class="text-white">March 25,2020</span>
            </div>
            <p class="text-md font-bold text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit neque magni nihil
            </p>
        </div>
    </div>
</div> --}}
