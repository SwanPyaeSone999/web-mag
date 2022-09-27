@foreach (App\Models\Post::get() as $post)
    @if ($loop->iteration <= 3)
        <div class="flex  mb-4 space-x-3 mt-10">
            <img class="flex-shrink-0 w-16 h-16" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'default/default.jpg' ) }}" alt="">
            <div class="flex-1">
                <a href="{{ route('post.details', $post['slug']) }}" class="text-xs hover:underline font-semibold">{{$post['name']}}</a>
            </div>
        </div>
    @endif
@endforeach
