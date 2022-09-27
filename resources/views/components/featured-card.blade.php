@props(['posts'])

<div class="grid sm:grid-cols-2 md:grid-cols-2 gap-5 grid-cols-1">
    @foreach ($posts as $post)
        @if ($loop->iteration <= 2)
        <div class="bg-gray-600 relative w-full mt-8">
            <img class="w-full h-64 object-cover mix-blend-overlay" src="{{ asset($post['thumbnail'] ? 'storage/thumbnail/'. $post['thumbnail'] : 'default/default.jpg' ) }}" alt="">
            <x-content :post="$post"></x-content>
        </div>
        @endif
    @endforeach
</div>
