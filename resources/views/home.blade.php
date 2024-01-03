@extends('HeadFoot')
@section('content')
    <div class="pb-40 pt-16 max-sm:pb-64 sm:pt-24 lg:pb-40 lg:pt-40">
        <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
            <div class="sm:max-w-lg">
                <h1 class=" text-6xl font-bold tracking-tight text-gray-900  h-20 max-sm:h-[50px] whitespace-nowrap ">
                    HI, Call Me
                </h1>
                <h1
                    class="text-6xl font-bold tracking-tight text-purple-800  h-20 typing max-sm:h-[50px] whitespace-nowrap teffect">

                </h1>
                <p class="mt-4 text-2xl text-gray-500 max-sm:text-[20px]">
                    Just code, I'm an independent web Developer.
                </p>
            </div>

            <div>
                <div class="mt-10 ">
                    <!-- Decorative image grid -->
                    <div aria-hidden="true"
                        class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
                        <div
                            class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                            <div class="flex items-center space-x-6 lg:space-x-8">
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                    <div id="pict"
                                        class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                                        <img src="{{ asset('img/11.jpeg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/10.jpg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                    <div class="h-65 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/6.jpg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/9.jpeg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/8.jpeg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                                <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/111.jpg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                                        <img src="{{ asset('img/4.jpeg') }}" alt=""
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <a href="/about"
                            class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">
                            Lets Have A Look
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        class TextScramble {
            constructor(el) {
                this.el = el
                this.chars = 'Y-A-A_A-H'
                this.update = this.update.bind(this)
            }
            setText(newText) {
                const oldText = this.el.innerText
                const length = Math.max(oldText.length, newText.length)
                const promise = new Promise((resolve) => this.resolve = resolve)
                this.queue = []
                for (let i = 0; i < length; i++) {
                    const from = oldText[i] || ''
                    const to = newText[i] || ''
                    const start = Math.floor(Math.random() * 30)
                    const end = start + Math.floor(Math.random() * 30)
                    this.queue.push({
                        from,
                        to,
                        start,
                        end
                    })
                }
                cancelAnimationFrame(this.frameRequest)
                this.frame = 0
                this.update()
                return promise
            }
            update() {
                let output = ''
                let complete = 0
                for (let i = 0, n = this.queue.length; i < n; i++) {
                    let {
                        from,
                        to,
                        start,
                        end,
                        char
                    } = this.queue[i]
                    if (this.frame >= end) {
                        complete++
                        output += to
                    } else if (this.frame >= start) {
                        if (!char || Math.random() < 0.08) {
                            char = this.randomChar()
                            this.queue[i].char = char
                        }
                        output += `<span class="dud">${char}</span>`
                    } else {
                        output += from
                    }
                }
                this.el.innerHTML = output
                if (complete === this.queue.length) {
                    this.resolve()
                } else {
                    this.frameRequest = requestAnimationFrame(this.update)
                    this.frame++
                }
            }
            randomChar() {
                return this.chars[Math.floor(Math.random() * this.chars.length)]
            }
        }

        // ——————————————————————————————————————————————————
        // Example
        // ——————————————————————————————————————————————————

        const phrases = [
            'Yah,',
            'Dyah Kusuma',
            
        ]

        const el = document.querySelector('.teffect')
        const fx = new TextScramble(el)

        let counter = 0
        const next = () => {
            fx.setText(phrases[counter]).then(() => {
                setTimeout(next, 2500)
            })
            counter = (counter + 1) % phrases.length
        }

        next()
    </script>
@endsection
