
@vite(['resources/css/app.css', 'resources/js/app.js',  'resources/js/bootstrap.js'])


    <div class="p-4">


    <div class="hidden lg:grid lg:grid-cols-6 py-6 items-center px-20">

        <div class="flex gap-3 items-center px-6 col-span-1">
            <div class="flex flex-col text-2xl font-black text-red-600">
                <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-40 ">
            </div>
        </div>


        <div class="flex col-span-4 px-16">
            <form method="get" class="relative w-full">
                @csrf
                <input type="text" name="search" placeholder= " @lang('lang.searchsection')" class="px-5 py-3  w-full">
                <button type="submite" class="bg-yellow-700 px-6 py-1 text-white absolute right-0 top-0 h-full ">@lang('lang.search')</button>
            </form>
        </div>


        <div class="col-span-1 flex justify-between px-12 text-xl w-full">
            <a  href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>

            <div class="font-thin text-sm flex flex-col">

                 <a href="/locale/en">@lang('lang.English')</a>
                 <a href="/locale/fa">@lang('lang.Persian')</a>

            </div>

        </div>

    </div>




        <a href="{{ url()->previous() }}" class="px-6 py-1 text-white bg-yellow-700 mb-6 block w-fit">@lang('lang.Back')</a>

        <div  style="background-image: url({{asset($catagory->img)}});" class="bg-cover bg-center w-full py-60 relative">
            <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-20"> </div>
            <div class="absolute top-0 left-0 h-full w-full flex justify-center items-center z-20">
                <h1 class="text-white text-6xl font-black">{{ $catagory->{'name_'.app()->getLocale()} }}</h1>
            </div>
        </div>






        <div class="px-4">

            @if (App::getLocale() == 'en')

            <div class=" px-4 text-3xl font-bold">
                <h1 class="border-b border-black py-4">@lang('lang.Our') <span class="text-yellow-700">@lang('lang.Product')</span></h1>
            </div>

            @else

            <div class=" px-4 text-3xl font-bold text-right">
                <h1 class="border-b border-black py-4"> @lang('lang.Product')<span class="text-yellow-700"> @lang('lang.Our')</span></h1>
            </div>

            @endif

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 py-12 gap-6 px-8">

                @foreach ($product as $pro)


                <div class="w-full h-fit">
                    <div style="background-image: url({{asset($pro->img)}});" class="bg-cover bg-center w-full h-32"></div>
                    <div class="flex flex-col gap-3 py-2">
                        <span class="font-thin">{{ $pro->{'name_'.app()->getLocale()} }}</span>
                        <span class="text-lg font-semibold tracking-wider">{{$pro->price}}</span>
                        <a href="/order/{{$pro->id}}" class="px-3 py-1 bg-yellow-700 text-white text-sm font-thin w-fit">@lang('lang.order')</a>
                    </div>
                </div>

                @endforeach


            </div>

        </div>







    </div>



