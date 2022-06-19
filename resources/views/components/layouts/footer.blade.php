
<footer class="mt-10 md:px-10 px-4 mb-10 gap-10 flex flex-col md:flex-row ">
        <div class=" w-full  space-y-5">
                <h1 class="text-black font-bold">WEBMAGE</h1>
                <span class="text-xs text-gray-600 hover:text-black transition-colors ease-out duration-500  mb-3">Privacy Policy</span>
                <div class="text-xs text-gray-600 hover:text-black transition-colors ease-out duration-500 ">© Copyright ©2022 All rights reserved | This template is made with  by Colorlib</div>
        </div>
        <div class=" w-full ">
            <h1 class="text-black font-bold">About Us</h1>
            <ul class="mt-5">
                <li><x-link class="text-gray-600 hover:text-black font-normal">About Us</x-link></li>
                <li><x-link class="text-gray-600 hover:text-black font-normal">Join Us</x-link></li>
                <li><x-link class="text-gray-600 hover:text-black font-normal">Contacts</x-link></li>
            </ul>
        </div>
        <div class=" w-full">
            <h1 class="text-black font-bold">Categories</h1>
            <ul class="mt-5">
               @foreach (\App\Models\Category::get() as $category)
               <li><a href="{{ route('post.category.show',$category['slug']) }}" class="text-gray-600 hover:text-black font-normal text-xs  hover:underline  hover:decoration-wavy transition-colors ease-out duration-500">{{ucwords($category['name'])}}</a></li>
               @endforeach
            </ul>
        </div>
        <div class="w-full">
            <h1 class="text-black font-bold">Join Our Newsletter</h1>
            <div class="mb-5 mt-4">
                <x-input type="text" class=""  placeholder="Enter Email"></x-input>
                <ul class="mt-5 flex">
                    <li>
                        <a href="" class="text-xs text-white grid place-items-center p-1.5  rounded-sm ">
                            <img src="https://img.icons8.com/material-rounded/24/000000/facebook-new.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-xs text-white grid place-items-center p-1.5  rounded-sm ">
                            <img src="https://img.icons8.com/material-rounded/24/000000/twitter.png"/>
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-xs text-white grid place-items-center p-1.5  rounded-sm ">
                            <img src="https://img.icons8.com/material-rounded/24/000000/instagram-new.png"/>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
</footer>
