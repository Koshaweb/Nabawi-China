
@if(App::getLocale() == 'en')

<div class=" bg-gray-700 text-white px-12">
    <div class=" py-12 flex flex-col justify-center lg:grid grid-cols-6 items-center">


        <div class="hidden lg:block col-span-1">
            <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-44">
        </div>


        <div class="hidden lg:grid lg:grid-cols-4 col-span-4 font-bold items-center justify-center px-40 text-lg">
            <a href="{{route('showhome')}}">@lang('lang.home')</a>
            <a href="showabout">@lang('lang.about')</a>
            <a href="showoffer">@lang('lang.offers')</a>
            <a href="showcontact">@lang('lang.contact')</a>
        </div>


        <div class="col-span-1 grid grid-cols-3 gap-10 lg:gap-0 text-lg">
            <a href="https://www.facebook.com/profile.php?id=100005686607527&mibextid=YMEMSu"><i class="fa-brands fa-square-facebook"></i></a>
            <a href="https://www.instagram.com/aliahmadnabawi?igsh=MW53ZGl3N3ExbDEzdA%3D%3D&utm_source=qr"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="https://wa.me/008618413362445"><i class="fa-brands fa-whatsapp"></i></a>

        </div>


    </div>


    <div class="w-full flex flex-col justify-center py-4 items-center text-sm opacity-80">
        <p>All Right Reserved</p>
        <span>Website by: <a href="https://www.x.com/sh_webdeveloper" class="opacity-90 underline">Shokrullah Kosha</a></span>
    </div>
</div>
@else

<div class=" bg-gray-700 text-white px-12">

        <div class="px-12 py-16 grid grid-cols-6 bg-gray-700 text-white items-center">


            <div class="col-span-1 grid grid-cols-3 pl-20 text-lg">
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-tiktok"></i>
            </div>


            <div class="grid grid-cols-4 col-span-4 font-bold items-center justify-center px-40 text-lg">
                <a href="showcontact">@lang('lang.contact')</a>
                <a href="showoffer">@lang('lang.offers')</a>
                <a href="showabout">@lang('lang.about')</a>
                <a href="{{route('showhome')}}">@lang('lang.home')</a>
            </div>


            <div class="col-span-1">
                <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-44">
            </div>


        </div>



        <div class="w-full flex flex-col justify-center py-4 items-center text-sm opacity-80">
            <p>All Right Reserved</p>
            <span>Website by: <a href="https://www.facebook.com/profile.php?id=100095237342087&mibextid=LQQJ4d" class="opacity-90 underline">Shokrullah Kosha</a></span>
        </div>
</div>

@endif
