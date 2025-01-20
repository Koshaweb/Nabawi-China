<x-app-layout>

    <x-slot name="header">
        @foreach ($service as $ser)

            <li class="px-3 py-2 border-b-4 border-white bg-gray-100 flex flex-col gap-2" style="width: 600px;"><p class="text-lg font-bold">{{ $ser->{'name_'.app()->getLocale()} }}</p>

            <p>{{ $ser->{'detail_'.app()->getLocale()} }}</p>
        </li>

            @endforeach
    </x-slot>


<div>

@foreach ($bgimg as $bg)


    <div style="background-image: url({{asset($bg->offerbg)}});" class="bg-cover bg-center w-full py-60 relative">
        <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-20"> </div>
        <div class="absolute top-0 left-0 h-full w-full flex justify-center items-center z-20">
            <h1 class="text-white text-4xl lg:text-6xl font-black">@lang('lang.OurSpecialOffer')</h1>
        </div>
    </div>

@endforeach




    <div class="px-4">

        @if (App::getLocale() == 'en')

        <div class="px-4 grid grid-cols-1 md:grid-cols-2 items-center lg:grid-cols-2 justify-between border-b border-black py-4 ">
            <h1 class="text-3xl font-bold ">@lang('lang.Our')<span class="text-yellow-700"> @lang('lang.LatestNews')</span></h1>
            <form action="storeemail" method="POST" class="relative w-full mt-4 lg:mt-0">
                @csrf
                <input type="email" name="email" placeholder="Enter Your Email Address" class="px-5 py-3  w-full" required>
                <button class="bg-yellow-700 px-6 py-1 text-white absolute right-0 top-0 h-full ">@lang('lang.submit')</button>
            </form>
        </div>

        @else

        <div class="px-4 grid grid-cols-1 lg:grid-cols-2 justify-between border-b border-black py-4 ">
            <form action="storeemail" method="POST" class="relative w-full mt-4 lg:mt-0 text-right">
                @csrf
                <input type="email" name="email" placeholder="Enter Your Email Address" class="px-5 py-3  w-full placeholder:text-right" required>
                <button class="bg-yellow-700 px-6 py-1 text-white absolute left-0 top-0 h-full ">@lang('lang.submit')</button>
            </form>
            <h1 class="text-3xl font-bold text-right">@lang('lang.Our')<span class="text-yellow-700"> @lang('lang.LatestNews')</span></h1>

        </div>

        @endif


        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 py-4">

            @foreach ($offer as $off)


            <div class="flex flex-col gap-4">
                <div style="background-image: url({{asset($off->img)}})" class="w-full h-60 bg-cover bg-center relative">
                    <div class="bg-black h-full w-full absolute top-0 left-0 z-10 opacity-40"></div>
                    <div class="absolute top-0 left-0 h-full w-full z-20 flex justify-center items-center">
                        <span class="text-lg font-semibold text-white">{{date('d-m-y', strtotime($off->created_at));}}</span>
                    </div>
                </div>

                <div class="flex flex-col gap-3">
                    <h1 class="text-lg font-bold">{{ $off->{'title_'.app()->getLocale()} }}</h1>
                    <p>{{ $off->{'content_'.app()->getLocale()} }}</p>
                </div>
            </div>

            @endforeach

        </div>



    </div>

</div>

</x-app-layout>
