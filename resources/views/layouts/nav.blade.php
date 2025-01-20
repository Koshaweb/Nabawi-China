<div>


    {{------------------------------ navebar for mobile devices ------------------------------}}


    <div class="grid grid-cols-3 lg:hidden px-6 py-4 items-center">
        <div>
            <i class="fa-solid fa-bars fa-2x" id="sidebarbtn"></i>
        </div>

        <div class="flex flex-col text-2xl font-black text-red-600">
            <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-44 ">
        </div>

        <div class="flex gap-5 justify-end">
            <div>
                @if (Route::has('login'))
                <div class="ml-auto">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-yellow-700 text-sm font-thin">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class=""><i class="fa-solid fa-user"></i></a>
                    @endauth
                </div>
            @endif
            </div>
            <div class="font-thin text-sm flex flex-col">

                <a href="/locale/en">@lang('lang.English')</a>
                <a href="/locale/fa">@lang('lang.Persian')</a>

           </div>
        </div>



        <div class="fixed top-0 left-0 h-full w-72 border-r-2 border-black -translate-x-72 transition duration-500x z-30 bg-white" id="sidebar">
                <div class="bg-white border-black h-fit flex justify-between p-2 items-center">

                    <div class=" text-2xl font-black text-red-600">
                        <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-32 ">
                    </div>

                    <div class="px-4">
                        <i class="fa-solid fa-xmark text-xl"  id="closesidebar"></i>
                    </div>

                </div>


                <div class="px-10 py-5">

                    <button class="flex gap-5 items-center justify-between py-2 w-full relative group shadow-2xl px-3">
                        <h1 class="text-2xl font-bold">@lang('lang.services')</h1>
                        <i class="fa-solid fa-chevron-down"></i>

                        <div class="absolute hidden  top-full mt-3 group-focus:block transition duration-500 z-50">
                            <ul class="text-left ">
                                @if (isset($header))
                                  {{ $header }}
                                 @endif
                            </ul>
                        </div>
                    </button>

                </div>


                <div class="flex flex-col gap-5 px-4 py-20 text-lg">

                    <a href="{{route('showhome')}}">@lang('lang.home')</a>
                    <a href="showabout">@lang('lang.about')</a>
                    <a href="showoffer">@lang('lang.offers')</a>
                    <a href="showcontact">@lang('lang.contact')</a>

                </div>




                <div class="bg-gra-100 px-4 py-2 mt-48">
                    <span class="text-black">All right reserved - Website by:  <a href="https://www.facebook.com/profile.php?id=100095237342087&mibextid=LQQJ4d" class="opacity-90 underline">Shokrullah Kosha</a></span>
                </div>


        </div>
    </div>




    {{------------------------- This is for Large Screens ----------------------}}


    {{------------------------- ENGLISH ----------------------}}

    @if(App::getLocale() == 'en')

    <div class="hidden lg:grid lg:grid-cols-6 py-6 items-center px-20">

        <div class="flex gap-3 items-center px-6 col-span-1">
            <div class="flex flex-col text-2xl font-black text-red-600">
                <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-40 ">
            </div>
        </div>


        <div class="flex col-span-4 px-16">
            <form method="get" class="relative w-full">
                @csrf
                <input type="text" name="search" placeholder =" @lang('lang.searchsection')" class="px-5 py-3  w-full">
                <button type="submite" class="bg-yellow-700 px-6 py-1 text-white absolute right-0 top-0 h-full ">@lang('lang.search')</button>
            </form>
        </div>


        <div class="col-span-1 flex justify-between px-12 text-xl w-full">
            <div>
                @if (Route::has('login'))
                <div class="ml-auto">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-yellow-700 text-sm font-thin">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class=""><i class="fa-solid fa-user"></i></a>
                    @endauth
                </div>
            @endif
            </div>

            <div class="font-thin text-sm flex flex-col">

                 <a href="/locale/en">@lang('lang.English')</a>
                 <a href="/locale/fa">@lang('lang.Persian')</a>

            </div>

        </div>

    </div>



    @else

      {{------------------------- PERSIAN ----------------------}}

      <div class="hidden lg:grid lg:grid-cols-6 py-6 items-center px-20">

        <div class="col-span-1 flex justify-between px-12 text-xl w-full">
            <div>
                @if (Route::has('login'))
                <div class="ml-auto">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-yellow-700 text-sm font-thin">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}" class=""><i class="fa-solid fa-user"></i></a>
                    @endauth
                </div>
            @endif
            </div>

            <div class="font-thin text-sm flex flex-col">

                 <a href="/locale/en">@lang('lang.English')</a>
                 <a href="/locale/fa">@lang('lang.Persian')</a>

            </div>

        </div>




        <div class="flex col-span-4 px-16">
            <form method="get" class="relative w-full">
                @csrf
                <button type="submite" class="bg-yellow-700 px-6 py-1 text-white absolute left-0 top-0 h-full ">@lang('lang.search')</button>

                <input type="text" name="search" placeholder =" @lang('lang.searchsection')" class="px-5 py-3  w-full placeholder:text-right">
            </form>
        </div>






        <div class="flex gap-3 items-center px-6 col-span-1">
            <div class="flex flex-col text-2xl font-black text-red-600">
                <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-40 ">
            </div>
        </div>


    </div>

    @endif



    @if(App::getLocale() == 'en')

    {{------------------------- ENGLISH ----------------------}}

    <div class="hidden lg:grid lg:grid-cols-3 px-32 pb-8">

        <div class="w-72  px-6 py-1">

            <button class="flex gap-5 items-center justify-between py-2 w-full relative group shadow-2xl px-3">
                <h1 class="text-2xl font-bold">@lang('lang.services')</h1>
                <i class="fa-solid fa-chevron-down"></i>

                <div class="absolute hidden  top-full mt-3 group-focus:block transition duration-500 z-50">
                    <ul class="text-left ">
                        @if (isset($header))
                                    {{ $header }}
                        @endif
                    </ul>

                </div>
            </button>

        </div>






        <div class="grid grid-cols-4 font-bold items-center">
            <a href="{{route('showhome')}}">@lang('lang.home')</a>

            <a href="showabout">@lang('lang.about')</a>
            <a href="showoffer">@lang('lang.offers')</a>
            <a href="showcontact">@lang('lang.contact')</a>


        </div>

        <a href="https://wa.me/+61415572652" class="flex gap-3 items-center justify-end">
            <i class="fa-brands fa-whatsapp text-green-600 fa-2x"></i>
            <span class="text-xl font-semibold">+61 415 572 652</span>
        </a>

    </div>


    @else

    {{------------------------- Persian ----------------------}}

    <div class="hidden lg:grid lg:grid-cols-3 px-32 pb-8">


             <a href="https://wa.me/+61432984386" class="flex gap-3 items-center justify-start">
               <i class="fa-brands fa-whatsapp text-green-600 fa-2x"></i>
               <span class="text-xl font-semibold">008618413362445</span>
             </a>






        <div class="grid grid-cols-4 font-bold items-center w-full">

            <a href="showcontact">@lang('lang.contact')</a>
            <a href="showoffer">@lang('lang.offers')</a>

            <a href="showabout">@lang('lang.about')</a>

            <a href="{{route('showhome')}}">@lang('lang.home')</a>


        </div>




        <div class="w-72  px-6 py-1 flex ml-auto">

            <button class="flex gap-5 items-center justify-between py-2 w-full relative group shadow-2xl px-3">
                <i class="fa-solid fa-chevron-down"></i>

                <h1 class="text-2xl font-bold">@lang('lang.services')</h1>

                <div class="absolute hidden  top-full mt-3 group-focus:block transition duration-500 z-50">
                    <ul class="text-left ">
                        @if (isset($header))
                                    {{ $header }}
                        @endif
                    </ul>

                </div>
            </button>

        </div>


    </div>

    @endif


<script src="{{asset('dist/service.js')}}"></script>

</div>
