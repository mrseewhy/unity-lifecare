<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if (session('message'))
        <div x-data="{
                show: true,
                progress: 100,
                init() {
                    if (this.show) {
                        this.$nextTick(() => {
                            this.timer = setInterval(() => {
                                this.progress -= 2;
                                if (this.progress <= 0) {
                                    this.show = false;
                                    clearInterval(this.timer);
                                }
                            }, 100);
                        });
                    }
                },
                close() {
                    this.show = false;
                    clearInterval(this.timer);
                }
            }"
            x-show="show"
            x-transition:enter="transform transition-transform duration-300 ease-out"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transform transition-transform duration-200 ease-in"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed z-30 top-20 right-6 w-96 h-24 px-4 py-3.5 rounded-xl backdrop-blur-sm shadow-xl border"
            :class="{
                'bg-gradient-to-br from-green-50/80 to-green-100/80 border-green-200/60 text-green-800': '{{ session('message')['type'] }}' === 'success',
                'bg-gradient-to-br from-red-50/80 to-red-100/80 border-red-200/60 text-red-800': '{{ session('message')['type'] }}' === 'error'
            }"
            role="alert"
            @click.away="close()">

            <div class="absolute bottom-0 left-0 w-full h-1.5 rounded-b-xl overflow-hidden bg-white/30">
                <div class="h-full transition-all duration-100 ease-linear"
                    :class="{
                        'bg-green-500/90': '{{ session('message')['type'] }}' === 'success',
                        'bg-red-500/90': '{{ session('message')['type'] }}' === 'error'
                    }"
                    :style="{ width: `${progress}%` }">
                </div>
            </div>

            <div class="flex items-start gap-3">
                <div class="shrink-0">
                    <div class="w-8 h-8 rounded-lg flex items-center justify-center"
                        :class="{
                            'bg-green-500/20': '{{ session('message')['type'] }}' === 'success',
                            'bg-red-500/20': '{{ session('message')['type'] }}' === 'error'
                        }">
                        @if(session('message')['type'] === 'success')
                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        @else
                            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        @endif
                    </div>
                </div>

                <div class="flex-1 space-y-1">
                    <h3 class="font-semibold tracking-tight text-[0.925rem]">
                        {{ session('message')['type'] === 'success' ? 'Successful' : 'Something Went Wrong' }}
                    </h3>
                    <p class="text-sm text-opacity-90 leading-snug">
                        {{ session('message')['text'] }}
                    </p>
                </div>

                <button @click="close()" class="p-1 -mt-1.5 -mr-2 hover:bg-black/5 rounded-full transition-colors duration-150">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    @endif
</div>
