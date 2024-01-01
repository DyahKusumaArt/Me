@extends('HeadFoot')
@section('content')
    <div class="pb-40 pt-16 max-sm:pb-64 sm:pt-24 lg:pb-40 lg:pt-40">
        <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
                <h1 class=" text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl h-20 max-sm:h-[50px] whitespace-nowrap ">
                    HI,
                </h1>
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl h-20 whitespace-nowrap ">
                    Call Me
                </h1>
                <h1 class="text-4xl font-bold tracking-tight text-purple-800 sm:text-6xl h-20 typing whitespace-nowrap ">
                    Dyah Kusuma
                </h1>
                <p class="mt-4 text-gray-500 text-[20px] max-sm:text-[14px]">
                    Just code, I'm an independent web Developer.
                </p>
            </div>
            <div class="mt-5">
                <a href="/about"
                    class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">
                    Lets Have A Look
                </a>
            </div>
            <div>
                <div class="mt-10 ">
                    <!-- Decorative image grid -->
                    <div aria-hidden="true"
                        class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                        <div
                            class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                            <div class="flex items-center space-x-6 lg:space-x-8">
                                <div  class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                    <div id="pict" class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                    <div class="h-65 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/me.png') }}"
                                            alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
       const typedText = document.querySelector('.typing');
        const textArray = typedText.textContent.split('');
        let i = 0;
        let direction = 1; // 1 for forward, -1 for backward

        const type = () => {
        typedText.textContent = textArray.slice(0, i).join('');

        i += direction;

        if (i === textArray.length || i === 0) {
            direction = -direction; // Reverse direction immediately
        }

        const delay = (i !== textArray.length && i !== 0) ? 50 : 0; // Delay only when typing
        setTimeout(() => type(), delay);
        };

        // Start the typing animation
        type();
    </script>
@endsection
