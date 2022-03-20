<x-layouts.main>

    <div class="flex">
        <div
            x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
            x-on:keydown.escape.prevent.stop="close($refs.button)"
            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
            x-id="['dropdown-button']"
            class="relative"
        >
            <!-- Button -->
            <button
                x-ref="button"
                x-on:click="toggle()"
                :aria-expanded="open"
                :aria-controls="$id('dropdown-button')"
                type="button"
                class="border bg-indigo-300 mt-2 border-black px-4 py-2 rounded shadow"
            >
                <span>Our Family</span>
                <span aria-hidden="true">&darr;</span>
            </button>

            <!-- Panel -->
            <div
                x-ref="panel"
                x-show="open"
                x-transition.origin.top.left.duration.600ms.scale.400
                x-on:click.outside="close($refs.button)"
                :id="$id('dropdown-button')"
                style="display: none;"
                class="absolute left-0 mt-2 w-36 bg-white border border-black rounded shadow-md overflow-hidden"
            >
                <div>
                    <a href="#" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                        Mama
                    </a>

                    <a href="#" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                        Dada
                    </a>
                    <a href="#" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500" >
                        Joshua
                    </a>

                    <a href="#" disabled class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-100 disabled:text-gray-500">
                        Julianna
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
