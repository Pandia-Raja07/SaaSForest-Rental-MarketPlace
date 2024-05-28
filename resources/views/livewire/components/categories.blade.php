<div x-data="carousel()" class="w-full">
    <div class="flex flex-col items-center w-full bg-white text-gray-800 container mx-auto px-5">
        <div class="flex flex-col items-center w-3/4 bg-white text-gray-800 relative">
            <ul class="flex overflow-x-hidden whitespace-nowrap gap-6 p-4 w-full scrollbar-hide transition-transform duration-300 ease-in-out">

                <div @click="prev" x-show="currentIndex > 0" class="absolute -left-20 top-1/2 transform -translate-y-1/2 border border-black w-8 h-8 flex justify-center items-center rounded-full bg-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                        <path fill="none" d="M20 28 8.7 16.7a1 1 0 0 1 0-1.4L20 4"></path>
                    </svg>
                </div>

                <template x-for="(item, index) in items" :key="index">
                    <li x-show="index >= currentIndex && index < currentIndex + 16"
                        :class="{ 'text-rose-500 border-b-2 border-rose-500': activeTab === item.tab }"
                        class="flex flex-col items-center cursor-pointer p-2 transition-opacity duration-1000 ease-in"


                        >
                        <img :src="item.image" class="max-w-10 max-h-10" alt="">
                        <span class="text-xs" x-text="item.label"></span>
                    </li>
                </template>

                <div @click="next" x-show="currentIndex + 16 < items.length" class="absolute right-[-20px] top-1/2 transform -translate-y-5 border border-black w-8 h-8 flex justify-center items-center rounded-full bg-white cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                        <path fill="none" d="m12 4 11.3 11.3a1 1 0 0 1 0 1.4L12 28"></path>
                    </svg>
                </div>
            </ul>
        </div>
    </div>
</div>

<script>
    function carousel() {
      return {
        activeTab: 'home',
        currentIndex: 0,
        items: @json($categoryNames->map(function ($category) {
          return [
            'tab' => $category->name,
            'image' => 'images/airbnb.jpg', 
            'label' => $category->name
          ];
      })),

        prev() {
          if (this.currentIndex > 0) {
            this.currentIndex -= 16;
          }
        },
        next() {
          if (this.currentIndex + 16 < this.items.length) {
            this.currentIndex += 16;
          }
        }
      }
    }
  </script>
