<x-layouts.main>

    <div class="flex mt-5 space-h-4 space-x-4 p-2 bg-gray-800 w-64" x-data="{
        selected: 0,
        looping: false,
        filters: ['normal','sepia',
        'blur-sm',
        'blur-md',
        'blur-lg',
        'blur-xl',
        'blur-2xl',

        'brightness-50',
        'brightness-75',
        'brightness-90',
        'grayscale',

        'hue-rotate-30',
        'hue-rotate-60',
        'hue-rotate-90',

        'invert',
        'saturate-50',
        'saturate-100',
        'saturate-150',
        'saturate-200',

        ],
        nextFilter() {
            this.selected < this.filters.length -1  ? this.selected += 1 : this.selected = 0;
        },
        prevFilter() {
            this.selected > 0  ? this.selected -= 1 : this.selected = this.filters.length -1;
        },
        startLoop() {
            this.looping = true;
            this.loop();
        },
        endLoop() {
            this.looping = false;
        },
        loop() {
          if(this.looping != true) {
            return;
          }

          setTimeout(() => {
            this.nextFilter();
            this.loop();
          }, 500);
        },

    }">




        <div class="w-64 text-center">
            <span class="text-white text-xl">Rotate Filters</span>
            <img :class="filters[selected]" class="w-32 h-32 mx-auto" src="/images/alice.png">
            <span class="text-white text-md p-2 h-8" x-text="filters[selected]"></span>
            <div class="w-64 mt-2">
                <button @click="prevFilter()" type="button" class="bg-indigo-800 hover:bg-indigo-500 font-bold text-gray-200 w-8 h-8 px-2 py-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                    </svg>
                </button>

                <button x-show="!looping" @click="startLoop();" type="button" class="bg-indigo-800 hover:bg-indigo-500 font-bold text-green-500 w-8 h-8 px-2 py-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                    </svg>
                </button>
                <button x-show="looping" @click="endLoop()" type="button" class="bg-indigo-800 hover:bg-indigo-500 font-bold text-red-500 w-8 h-8 px-2 py-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 " viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8 7a1 1 0 00-1 1v4a1 1 0 001 1h4a1 1 0 001-1V8a1 1 0 00-1-1H8z" clip-rule="evenodd" />
                    </svg>
                </button>

                <button @click="nextFilter()" type="button" class="bg-indigo-800 hover:bg-indigo-500 font-bold text-gray-200 w-8 h-8 px-2 py-1 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                </button>
            </div>
        </div>


    </div>



</x-layouts.main>
