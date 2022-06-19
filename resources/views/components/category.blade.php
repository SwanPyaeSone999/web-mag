<h2 class="text-black tracking-wider text-xl font-semibold">Categories</h2>
<div class="divide-y divide-gray-200 space-y-5">
    @foreach (\App\Models\Category::all() as $category)
    <div class="flex items-center justify-between">
        <span class="font-semibold text-gray-800 text-xs">{{$category['name']}}</span>
        <span class="bg-yellow-500 text-white  px-4 p-0.5 rounded-sm text-xs"><a href="{{ route('post.category.show', $category['slug'] ) }}">{{$category->posts->count()}}</a></span>
    </div>
    @endforeach
</div>
