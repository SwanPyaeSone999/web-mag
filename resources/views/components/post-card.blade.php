@props(['posts','title'])


<h2 class="text-black tracking-wider text-xl font-semibold border-b py-5  mt-10">{{$title}}</h2>
<div class="grid sm:grid-cols-12 grid-cols-2 gap-8  mt-5">
    @foreach ($posts as $post)
            @if ($loop->iteration <= 3)
            <div class="w-full h-40 col-span-4 mb-20">
                <img class="w-full h-full object-cover object-center" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'default/default.jpg' ) }}">
                <div class="mt-5">
                   <div>
                    <span class="bg-yellow-500 px-3 py-1 rounded-sm text-xs text-white"><a href="{{ route('post.category.show', $post->category->slug) }}">{{$post->category->name}}</a></span>
                    <span class="text-xs text-gray-800 ">{{$post['created_at']->format('M d Y')}}</span>
                    <span class="text-xs ml-4  text-black "><a href="{{ route('post.author.show', $post->user->name) }}">({{$post->user->name}})</a></span>
                   </div>
                    <div class="mt-3  text-xs font-bold w-full ">
                        <a href="{{ route('post.details', $post['slug']) }}" class="hover:underline">{{$post['name']}}</a>
                    </div>
                </div>
            </div>
            @endif
    @endforeach
</div>
