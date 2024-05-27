<div class="flex">

    @foreach ($categories as $categoryName)
        <div class="font-sans bg-gray-900 text-white w-full">

            <div x-data="{ activeTab: 'home' }" class="w-full">
                <div class="flex flex-col items-center w-full bg-white text-gray-800 shadow-md">
                    <ul class="flex overflow-x-auto whitespace-nowrap gap-6 p-4 w-full scrollbar-hide">
                        <li :class="{ 'text-rose-500 border-b-2 border-rose-500': activeTab === 'home' }"
                            class="flex flex-col items-center cursor-pointer p-2" @click="activeTab = 'home'">
                            <img src="images/airbnb.jpg" class="max-w-10 max-h-10" alt="">
                            <span class="text-xs">{{ $categoryName->name }}</span>
                        </li>


                    </ul>
                </div>
            </div>

            <style>
                .scrollbar-hide::-webkit-scrollbar {
                    display: none;
                }

                .scrollbar-hide {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }
            </style>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $categories->links() }}
    </div>
</div>
