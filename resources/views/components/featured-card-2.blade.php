<div class="mt-6 space-y-6">
    <h2 class="text-black tracking-wider text-xl font-semibold">Featured Post</h2>
    @foreach ($posts as $post)
        @if ($loop->iteration <= 2)
        <div class="bg-gray-600 relative w-full mt-8">
            <img class="w-full h-64 object-cover mix-blend-overlay" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'default/default.jpg' ) }}" alt="">
            <div class="absolute left-3 bottom-5 text-white">
                <div>
                    <span class="bg-yellow-500 px-3 cursor-pointer py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show', $post->category->slug) }}">{{$post->category->name}}</a></span>
                    <span class="text-xs ml-4 text-white ">{{$post['created_at']->format('M d Y')}}</span>
                    <span class="text-xs ml-4 text-white "><a href="{{ route('post.author.show', $post->user->name) }}">({{$post->user->name}})</a></span>
                </div>
                <div class="mt-3  text-xs font-bold w-full ">
                    <a href="{{ route('post.details', $post['slug']) }}" class="text-xs hover:underline">{{$post['name']}}</a>
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>
