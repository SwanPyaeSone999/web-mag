@props(['posts'])
<h2 class="text-black tracking-wider text-xl font-semibold">Most Read</h2>
<div class="mt-5 space-y-3">
    @foreach ($posts as $post)
        @if ($loop->iteration <= 4)
        <div class="flex space-x-3">
            <div class="flex-shrink-0 object-cover object-center">
                <img class="w-20 h-20" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'storage/thumbnail/default.jpg' ) }}" alt="">
            </div>
            <p class="font-bold text-xs  text-gray-900">
              <a href="{{ route('post.details', $post['slug']) }}" class="cursor-pointer hover:underline">{{$post['name']}}</a>
            </p>
        </div>
        @endif
    @endforeach
</div>
