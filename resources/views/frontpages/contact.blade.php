<x-app-layout>


    <x-slot name="header">
        @foreach ($service as $ser)

            <li class="px-3 py-2 border-b-4 border-white bg-gray-100 flex flex-col gap-2" style="width: 600px;"><p class="text-lg font-bold">{{ $ser->{'name_'.app()->getLocale()} }}</p>

            <p>{{ $ser->{'detail_'.app()->getLocale()} }}</p>
        </li>

            @endforeach
    </x-slot>



@if(session()->has('contact'))
<div class="fixed lg:top-5 top-0  lg:left-96 lg:right-96 z-40 bg-yellow-700 p-6 text-center" x-data="{contact: true}"  x-init="setTimeout(() => contact = false, 10000 )" x-show="contact">
    <h1 class="w-full h-full bg-white p-5 capitalize text-xl tracking-widest font-semibold">@lang('lang.ContactMessage')</h1>
</div>
@endif


@if(session()->has('member'))
<div class="fixed lg:top-5 top-0  lg:left-96 lg:right-96 z-40 bg-yellow-700 p-6 text-center" x-data="{member: true}"  x-init="setTimeout(() => member = false, 10000 )" x-show="member">
    <h1 class="w-full h-full bg-white p-5 capitalize text-xl tracking-widest font-semibold">@lang('lang.MemberMessage')</h1>
</div>
@endif



<div>

@foreach ($bgimg as $bg)


    <div style="background-image: url({{asset($bg->contactbg)}});" class="bg-cover bg-center w-full py-60 relative">
        <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-20"> </div>
        <div class="absolute top-0 left-0 h-full w-full flex justify-center items-center z-20">
            <h1 class="text-white text-6xl font-black">@lang('lang.contact')</h1>
        </div>
    </div>

@endforeach


    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 py-10 px-4 lg:px-32">

        <div class="flex flex-col gap-10">


            @foreach ($company as $info)

            <div class="lg:grid lg:grid-cols-2 flex gap-4">

                <div class="border border-yellow-700 w-fit md:w-full px-3 lg:w-full py-8 rounded-xl flex flex-col gap-3 justify-center items-center">
                    <div class="h-12 w-12 rounded-full p-2 border border-yellow-700 flex justify-center items-center">
                        <i class="fa-solid fa-phone-volume text-yellow-700"></i>

                    </div>
                        <p class="text-xl font-bold">@lang('lang.Phone')</p>
                        <div class="flex flex-col gap-2">
                            <p class="tracking-tight lg:tracking-widest font-thin opacity-80">{{$info->number}}</p>
                        </div>

                </div>



                <div class="border border-yellow-700 w-fit md:w-full lg:w-full px-3 py-8 rounded-xl flex flex-col gap-3 justify-center items-center">
                    <div class="h-12 w-12 rounded-full p-2 border border-yellow-700 flex justify-center items-center">
                        <i class="fa-regular fa-envelope text-yellow-700"></i>

                    </div>
                        <p class="text-xl font-bold">@lang('lang.Email')</p>
                        <p class="tracking-tight lg:tracking-widest font-thin opacity-80 ">{{$info->email}}</p>
                </div>

            </div>





            <div class="flex flex-col border border-yellow-700 w-full h-full">
                <h1 class="text-center tracking-widest font-thin py-4">{{ $info->{'address_'.app()->getLocale()} }}</h1>
                {{-- <div style="background-image: url({{asset('imgs/map.png')}})" class="bg-cover bg-center ">

                </div> --}}
                <img src="{{asset($info->map)}}" alt="">
            </div>

            @endforeach

        </div>




        <div class="px-10 py-12 shadow-2xl">
            <h1 class="text-2xl font-black text-center">@lang('lang.GetinTouch')</h1>

            <form action="storecontact" method="POST" class="flex flex-col gap-4 py-4">
                @csrf
                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.FullName')*</span>
                    <input type="text" name="name" placeholder="eg. Shokrullah Kosha" class="w-full border rounded-lg p-3" required>
                </div>

                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.WhatsApp')*</span>
                    <input type="number" name="number" placeholder="eg. +923201162723" class="w-full border rounded-lg p-3" required>
                </div>

                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.Email')*</span>
                    <input type="email" name="email" placeholder="eg. sh.kosha2020@gmail.com" class="w-full border rounded-lg p-3" required>
                </div>


                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.Message')*</span>
                    <textarea name="message" cols="4" rows="4" class="w-full border rounded-lg p-3" placeholder="eg. If you need website contact me" required></textarea>
                </div>

                <button class="px-6 py-1 bg-yellow-700 text-white w-fit mx-auto rounded hover:bg-white hpver:border hover:border-yellow-700 hover:text-yellow-700 ">@lang('lang.submit')</button>
            </form>
        </div>


    </div>





    <div style="background-image: url({{asset('imgs/subs.jpg')}})" class="bg-cover bg-center w-full h-60 lg:h-44 relative">
        <div class="bg-black absolute top-0 left-0 h-full w-full z-10 opacity-40"></div>
        <div class="absolute top-0 left-0 h-full w-full grid grid-cols-1 lg:grid-cols-2 z-20 items-center px-10 py-16">
            <div class="flex flex-col gap-1 text-white ">
                <h1 class="text-xl lg:text-3xl font-bold">@lang('lang.SignUp')</h1>
                <p class="opacity-90 tracking-tighter text-lg lg:text-xl text-yellow-700">@lang('lang.MemberDiscount')</p>
            </div>

            <form action="storeemail" method="POST" class="relative w-full mt-4 lg:mt-0">
                @csrf
                <input type="email" name="email" placeholder="Enter Your Email Address" class="px-5 py-3  w-full" required>
                <button class="bg-yellow-700 px-6 py-1 text-white absolute right-0 top-0 h-full ">@lang('lang.submit')</button>
            </form>
        </div>
    </div>



</div>

</x-app-layout>
