<x-layouts.main>

    <div x-data="{ open: false }" class="flex justify-center mt-2">
        <!-- Trigger -->
        <span x-on:click="open = true">
        <button type="button" class="bg-white border border-black px-4 py-2 rounded shadow">
            Open dialog
        </button>
    </span>

        <!-- Modal -->
        <div
            x-show="open"
            style="display: none"
            x-on:keydown.escape.prevent.stop="open = false"
            role="dialog"
            aria-modal="true"
            x-id="['modal-title']"
            :aria-labelledby="$id('modal-title')"
            class="fixed inset-0 overflow-y-auto"
        >
            <!-- Overlay -->
            <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

            <!-- Panel -->
            <div
                x-show="open" x-transition
                x-trap.inert.noscroll="open"
                x-on:click="open = false"
                class="relative min-h-screen flex items-center justify-center p-4"
            >
                <div
                    x-on:click.stop
                    x-trap.noscroll.inert="open"
                    class="relative max-w-2xl w-full bg-white border border-black rounded-lg shadow-lg p-12 overflow-y-auto"
                >
                    <!-- Title -->
                    <h2 class="text-3xl font-bold" :id="$id('modal-title')">Confirm</h2>
                    <!-- Content -->
                    <p class="mt-2 text-gray-600">Are you sure you want to learn how to create an awesome modal?</p>
                    <!-- Buttons -->
                    <div class="mt-8 flex space-x-2">
                        <button type="button" x-on:click="open = false" class="bg-white border border-black rounded px-3 py-1.5">
                            Confirm
                        </button>
                        <button type="button" x-on:click="open = false" class="bg-white border border-black rounded px-3 py-1.5">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
