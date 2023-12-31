@extends('HeadFoot')
@section('content')
    <div class=" sm:pb-40 sm:pt-24 lg:pb-24 lg:pt-10">
        <h1 class="text-3xl pb-16 font-bold tracking-tight text-center text-gray-900 sm:text-6xl">
            About Me
        </h1>
        <div class="relative xl:mx-36 sm:static sm:px-6 lg:px-2 lg:flex">
            <div class=" lg:w-1/3 max-lg:justify-center max-lg:flex max-lg:px-10">
                <div class="sm:max-w-lg max-md:text-center lg:text-right max-lg:text-justify h-full ">

                    <h3 class="mt-4 text-xl text-gray-500 ">
                        I'm a <span class="font-bold text-pink-900"> Full Stack Developer </span> specializing in backend
                        development from
                        <span class="text-black font-bold">Bali, Indonesia</span>
                    </h3>
                    <p class="mt-4 text-xl text-gray-500 ">
                        I enjoy talking complex problem and i also love the logic structure of coding and
                        always strive to write efficient code and make it work.
                    </p>
                    <p class="mt-4 text-xl text-gray-500 ">
                        when i'm not coding, you will find me in the game or playing chess.
                    </p>

                </div>

            </div>
            <div class="max-lg:hidden w-1/3 justify-center flex items-center">
                <img src="{{ asset('img/me.png') }}" alt="" class=" h-80 w-72  rounded-full"
                    alt="description of myimage">
            </div>
            <div id="tek" class="max-lg:pt-96">
                <a href="#" class="tagc1"
                    style="left: 113.554px; top: 30.1925px; z-index: 102; opacity: 0.118615; display: none;">jQuery</a>
                <a href="#" class="tagc3"
                    style="left: 136.828px; top: 34.752px; z-index: 102; opacity: 0.111076; color: rgb(255, 255, 255); padding: 5px; display: none;">CSS</a>
                <a href="#" class="tagc3"
                    style="left: 95.415px; top: 30.9076px; z-index: 103; opacity: 0.119797; color: rgb(255, 255, 255); padding: 5px; display: none;">SCRIPT</a>
                <a href="#" class="tagc1"
                    style="left: 58.2577px; top: 45.3038px; z-index: 107; opacity: 0.181538; color: rgb(255, 255, 255); padding: 5px;">JavaScript</a>
                <a href="#" class="tagc3"
                    style="left: 65.4534px; top: 42.9294px; z-index: 119; opacity: 0.389813; color: rgb(255, 255, 255); padding: 5px;">CSS</a>
                <a href="#" class="tagc2"
                    style="left: 108.202px; top: 30.0199px; z-index: 102; opacity: 0.117901; color: rgb(255, 255, 255); padding: 5px; display: none;">CSS3</a>
                <a href="" target="_blank" class="tagc2"
                    style="left: 155.111px; top: 56.2987px; z-index: 143; opacity: 1.20117; color: rgb(255, 255, 255); padding: 5px;">HTML</a>
                <a href="" target="_blank" class="tagc1"
                    style="left: 178.188px; top: 63.6679px; z-index: 101; opacity: 0.102853; display: none;">ReactJS</a>
                <a href="" target="_blank" class="tagc1"
                    style="left: 130.312px; top: 51.4474px; z-index: 101; opacity: 0.102451; display: none;">LARAVEL</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 126.4px; top: 31.9141px; z-index: 102; opacity: 0.11366; color: rgb(255, 255, 255); padding: 5px; display: none;">PHP</a>
                <a href="" target="_blank" class="tagc2"
                    style="left: 70.8082px; top: 35.6041px; z-index: 103; opacity: 0.120472; color: rgb(255, 255, 255); padding: 5px; display: none;">SQL</a>
                <a href="#" class="tagc3"
                    style="left: 108.415px; top: 33.9076px; z-index: 105; opacity: 0.119797; color: rgb(255, 255, 255); padding: 5px; display: none;">NodeJs</a>
                <a href="#" target="_blank" class="tagc2"
                    style="left: 188.867px; top: 154.047px; z-index: 121; opacity: 0.418877;">FrontEnd</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 177.262px; top: 62.5426px; z-index: 102; opacity: 0.109485; display: none;">BackEnd</a>
                <a href="" target="_blank" class="tagc2"
                    style="left: 139.031px; top: 35.5227px; z-index: 101; opacity: 0.105409; color: rgb(255, 255, 255); padding: 5px; display: none;">HTML</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 89.4792px; top: 31.9401px; z-index: 102; opacity: 0.11411; color: rgb(255, 255, 255); padding: 5px; display: none;">CSS</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 50.6413px; top: 50.6596px; z-index: 102; opacity: 0.11192; color: rgb(255, 255, 255); padding: 5px; display: none;">Bootstrap</a>
                <a href="" target="_blank" class="tagc1"
                    style="left: 42.093px; top: 178.455px; z-index: 119; opacity: 0.383704; color: rgb(255, 255, 255); padding: 5px;">Tailwind</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 51.8509px; top: 184.095px; z-index: 151; opacity: 1.65004; color: rgb(255, 255, 255); padding: 5px;">ReactJs</a>
                <a href="" class="tagc2"
                    style="left: 118.487px; top: 30.632px; z-index: 102; opacity: 0.117392; color: rgb(255, 255, 255); padding: 5px; display: none;">Laravel</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 153.81px; top: 186.157px; z-index: 141; opacity: 1.08555; color: rgb(255, 255, 255); padding: 5px;">Script</a>
                <a href="" target="_blank" class="tagc2"
                    style="left: 143.51px; top: 37.3276px; z-index: 103; opacity: 0.120311; color: rgb(255, 255, 255); padding: 5px; display: none;">Dyah</a>
                <a href="" target="_blank" class="tagc3"
                    style="left: 96.4933px; top: 30.7565px; z-index: 102; opacity: 0.116795; color: rgb(255, 255, 255); padding: 5px; display: none;">Kusuma</a>
                <a href="" target="_blank" class="tagc1"
                    style="left: 91.8373px; top: 206.783px; z-index: 118; opacity: 0.365235; color: rgb(255, 255, 255); padding: 5px;">Code</a>

            </div>
        </div>
    </div>
    <div class="mb-5 justify-center flex">
        <a href="/contact"
            class="inline-block rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-center font-medium text-white hover:bg-indigo-700">
            Work With Me
        </a>
    </div>
@endsection
@section('tambahan')
    <div class=" pt-10">
        <!--  content -->
        <div class="relative  bg-white p-2 flex overflow-x-auto" aria-hidden="true">
            <!-- component -->
            <div class="flex flex-col bg-white m-auto p-10">
                <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-10 md:mx-10 mx-5 font-bold text-4xl text-gray-800">
                    My Work
                </h1>
                <div class="flex  pb-10 ">
                    <div class="flex flex-nowrap lg:mx-20 md:ml-20 ml-10 ">

                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                        <div class="inline-block px-3">
                            <div
                                class="w-64 h-64 max-w-xs overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var radius = 160;
            var d = 200;
            var dtr = Math.PI / 150;
            var mcList = [];
            var lasta = 1;
            var lastb = 1;
            var distr = true;
            var tspeed = 11;
            var size = 200;
            var mouseX = 10;
            var mouseY = 0;
            var howElliptical = 1;
            var aA = null;
            var oDiv = null;
            window.onload = function() {
                var i = 0;
                var oTag = null;
                oDiv = document.getElementById('tek');
                aA = oDiv.getElementsByTagName('a');
                for (i = 0; i < aA.length; i++) {
                    oTag = {};
                    aA[i].onmouseover = (function(obj) {
                        return function() {
                            obj.on = true;
                            this.style.zIndex = 9999;
                            this.style.color = '#fff';
                            this.style.padding = '5px 5px';
                            this.style.filter = "alpha(opacity=100)";
                            this.style.opacity = 1;
                        }
                    })(oTag)
                    aA[i].onmouseout = (function(obj) {
                        return function() {
                            obj.on = false;
                            this.style.zIndex = obj.zIndex;
                            this.style.color = '#fff';
                            this.style.padding = '5px';
                            this.style.filter = "alpha(opacity=" + 100 * obj.alpha + ")";
                            this.style.opacity = obj.alpha;
                            this.style.zIndex = obj.zIndex;
                        }
                    })(oTag)
                    oTag.offsetWidth = aA[i].offsetWidth;
                    oTag.offsetHeight = aA[i].offsetHeight;
                    mcList.push(oTag);
                }

                positionAll();
                (function() {
                    update();
                    setTimeout(arguments.callee, 40);
                })();
            };

            function update() {
                var a, b, c = 0;
                a = (Math.min(Math.max(-mouseY, -size), size) / radius) * tspeed;
                b = (-Math.min(Math.max(-mouseX, -size), size) / radius) * tspeed;
                lasta = a;
                lastb = b;
                if (Math.abs(a) <= 0.01 && Math.abs(b) <= 0.01) {
                    return;
                }
                sineCosine(a, b, c);
                for (var i = 0; i < mcList.length; i++) {
                    if (mcList[i].on) {
                        continue;
                    }
                    var rx1 = mcList[i].cx;
                    var ry1 = mcList[i].cy * ca + mcList[i].cz * (-sa);
                    var rz1 = mcList[i].cy * sa + mcList[i].cz * ca;

                    var rx2 = rx1 * cb + rz1 * sb;
                    var ry2 = ry1;
                    var rz2 = rx1 * (-sb) + rz1 * cb;

                    var rx3 = rx2 * cc + ry2 * (-sc);
                    var ry3 = rx2 * sc + ry2 * cc;
                    var rz3 = rz2;

                    mcList[i].cx = rx3;
                    mcList[i].cy = ry3;
                    mcList[i].cz = rz3;

                    per = d / (d + rz3);

                    mcList[i].x = (howElliptical * rx3 * per) - (howElliptical * 2);
                    mcList[i].y = ry3 * per;
                    mcList[i].scale = per;
                    var alpha = per;
                    alpha = (alpha - 0.6) * (10 / 6);
                    mcList[i].alpha = alpha * alpha * alpha - 0.2;
                    mcList[i].zIndex = Math.ceil(100 - Math.floor(mcList[i].cz));
                }
                doPosition();
            }

            function positionAll() {
                var phi = 0;
                var theta = 0;
                var max = mcList.length;
                for (var i = 0; i < max; i++) {
                    if (distr) {
                        phi = Math.acos(-1 + (2 * (i + 1) - 1) / max);
                        theta = Math.sqrt(max * Math.PI) * phi;
                    } else {
                        phi = Math.random() * (Math.PI);
                        theta = Math.random() * (2 * Math.PI);
                    }
                    //坐标变换
                    mcList[i].cx = radius * Math.cos(theta) * Math.sin(phi);
                    mcList[i].cy = radius * Math.sin(theta) * Math.sin(phi);
                    mcList[i].cz = radius * Math.cos(phi);

                    aA[i].style.left = mcList[i].cx + oDiv.offsetWidth / 2 - mcList[i].offsetWidth / 2 + 'px';
                    aA[i].style.top = mcList[i].cy + oDiv.offsetHeight / 2 - mcList[i].offsetHeight / 2 + 'px';
                }
            }

            function doPosition() {
                var l = oDiv.offsetWidth / 2;
                var t = oDiv.offsetHeight / 2;
                for (var i = 0; i < mcList.length; i++) {
                    if (mcList[i].on) {
                        continue;
                    }
                    var aAs = aA[i].style;
                    if (mcList[i].alpha > 0.1) {
                        if (aAs.display != '')
                            aAs.display = '';
                    } else {
                        if (aAs.display != 'none')
                            aAs.display = 'none';
                        continue;
                    }
                    aAs.left = mcList[i].cx + l - mcList[i].offsetWidth / 2 + 'px';
                    aAs.top = mcList[i].cy + t - mcList[i].offsetHeight / 2 + 'px';
                    //aAs.fontSize=Math.ceil(12*mcList[i].scale/2)+8+'px';
                    //aAs.filter="progid:DXImageTransform.Microsoft.Alpha(opacity="+100*mcList[i].alpha+")";
                    aAs.filter = "alpha(opacity=" + 100 * mcList[i].alpha + ")";
                    aAs.zIndex = mcList[i].zIndex;
                    aAs.opacity = mcList[i].alpha;
                }
            }

            function sineCosine(a, b, c) {
                sa = Math.sin(a * dtr);
                ca = Math.cos(a * dtr);
                sb = Math.sin(b * dtr);
                cb = Math.cos(b * dtr);
                sc = Math.sin(c * dtr);
                cc = Math.cos(c * dtr);
            }
        </script>
    </div>
@endsection
