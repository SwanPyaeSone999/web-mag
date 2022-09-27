<x-layouts.app>
        <div class="w-full">
            <div class="relative bg-gray-600">
                <img class="w-full h-64 object-cover mix-blend-overlay" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'default/default.jpg' ) }}" alt="">
                <div class="absolute left-3 bottom-10 text-white">
                    <div>
                        <span class="bg-yellow-500 px-3 py-1 rounded-sm text-xs text-white">{{$post->category->name}}</span>
                        <span class="text-xs ml-4 text-white ">{{$post['created_at']->format('M d Y')}}</span>
                    </div>
                    <div class="mt-3  text-xs font-bold w-full ">
                        <a href="" class="text-2xl">{{ucwords($post['name'])}}</a>
                    </div>
                </div>
           </div>
        </div>

        <div class="md:px-10 px-4 mt-10">
            <h1 class="text-black text-xl font-bold">{{ucwords($post['name'])}}</h1>
            <div class="grid md:grid-cols-12 gap-5 mt-10">
                    <div class=" col-span-8">
                        <div class="space-y-4">
                            <p class="text-xs text-gray-800 font-thin">
                                {{$post['body']}}
                            </p>
                        </div>
                        <div class="mt-4">
                            <x-ad></x-ad>
                        </div>
                        {{-- comment --}}
                        <div class="mt-10">
                           @auth
                           <form action="{{ route('comment.store', $post['slug']) }}" method="POST">
                            @csrf
                                {{-- <x-label>Add Comment</x-label> --}}
                                <textarea name="body" placeholder="Say Something!" id="" cols="5" rows="5" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{old('body')}}</textarea>
                                <x-button >Add Comment</x-button>
                            </form>
                           @endauth
                            <h1 class="font-bold mb-5 mt-8">
                               @if ($post->comments->count())
                                (  {{$post->comments->count()}} ) Comments
                               @endif
                            </h1>
                            @forelse ($post->comments as $comment)
                            <div class="flex gap-3 mb-5">
                                <img class="w-16 h-16 rounded-full" src="https://i.pravatar.cc" alt="">
                                <div class="space-y-3 mb-5">
                                    <div class="space-x-4">
                                        <span>{{$post->user->name}}</span>
                                        <span class="text-xs font-thin">{{$comment['created_at']->format('M d Y')}}</span>
                                    </div>
                                    <p class="text-xs text-gray-700">
                                       {{$comment['body']}}
                                    </p>
                                </div>
                            </div>
                            @empty
                                <div class="font-bold mb-5 mt-8">No Comment Yet</div>
                            @endforelse
                        </div>
                    </div>
                    <div class="md:col-span-4 col-span-8">
                        <div class="mb-4">
                            <x-ad></x-ad>
                        </div>

                        <x-post-card-2 :posts="$posts"></x-post-card-2>

                        <x-featured-card-2 :posts="$posts"></x-featured-card-2>

                        <div class="space-y-5 ">
                            <x-category></x-category>
                            <x-tag></x-tag>
                        </div>
                    </div>
            </div>
        </div>
</x-layouts.app>
