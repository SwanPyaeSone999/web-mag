<div>
    <h2 class="text-xl mt-3 font-bold">Tags</h2>
    <div class="flex flex-wrap mt-3 ">
            @foreach (\App\Models\Tag::all() as $tag)
                <span class="bg-black text-white mb-3 mr-1  px-4 p-0.5 rounded-sm text-xs"><a href="">{{$tag['name']}}</a></span>
            @endforeach
    </div>
</div>
