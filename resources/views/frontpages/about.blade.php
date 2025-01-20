<x-app-layout>


    <x-slot name="header">
        @foreach ($service as $ser)

            <li class="px-3 py-2 border-b-4 border-white bg-gray-100 flex flex-col gap-2" style="width: 600px;"><p class="text-lg font-bold">{{ $ser->{'name_'.app()->getLocale()} }}</p>

            <p>{{ $ser->{'detail_'.app()->getLocale()} }}</p>
        </li>




            @endforeach
    </x-slot>



@if(session()->has('test'))
<div class="fixed lg:top-5 top-0  lg:left-96 lg:right-96 z-40 bg-yellow-700 p-6 text-center" x-data="{test: true}"  x-init="setTimeout(() => test = false, 10000 )" x-show="test">
    <h1 class="w-full h-full bg-white p-5 capitalize text-xl tracking-widest font-semibold">@lang('lang.ReviewMessage')</h1>
</div>
@endif




<div>

@foreach ($bgimg as $bg)

    <div style="background-image: url({{asset($bg->aboutbg)}});" class="bg-cover bg-center w-full py-60 relative">
        <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-20"> </div>
        <div class="absolute top-0 left-0 h-full w-full flex justify-center items-center z-20">
            <h1 class="text-white text-6xl font-black">@lang('lang.AboutUs')</h1>
        </div>
    </div>

@endforeach




    <div class="px-4 py-8">

        @if (App::getLocale() == 'en')

        <div class="px-0 lg:px-4 text-3xl font-bold">
            <h1 class="border-b border-black py-4">@lang('lang.LetsKnowEach') <span class="text-yellow-700">@lang('lang.OtherMore')</span></h1>
        </div>

        @else

        <div class="px-0 lg:px-4 text-3xl font-bold border-b border-black flex justify-end">
            <h1 class=" py-4">@lang('lang.LetsKnowEach') <span class="text-yellow-700">@lang('lang.OtherMore')</span></h1>
        </div>

        @endif

        <div class="grid grid-cols-1 lg:grid-cols-3 lg:px-32 lg:py-12 pt-4  gap-10 ">

        @foreach ($company as $info)

            <div class="col-span-1 flex flex-col">
                <div style="background-image: url({{asset($info->img)}});" class="bg-cover bg-center w-full lg:h-full h-48" ></div>
            </div>

        @if (App::getLocale() == 'en')

            <div class="flex flex-col gap-4 col-span-2 lg:py-20 py-4">
                <p>{{ $info->{'info_'.app()->getLocale()} }}</p>
            </div>

        @else

            <div class="flex flex-col gap-4 col-span-2 lg:py-20 py-4 text-right">
                <p>{{ $info->{'info_'.app()->getLocale()} }}</p>
            </div>

        @endif


        @endforeach

        </div>
    </div>




    <div style="background-image: url({{asset('imgs/test.jpg')}});" class="w-full py-4 lg:py-16 bg-cover bg-top px-4 lg:px-44 bg-fixed top-0 left-0">
        <div class="lg:h-96 h-fit w-full bg-white py-4 text-center">
            <h1 class="tecking-tighter text-2xl font-black">@lang('lang.WhatOurClients')<span class="text-yellow-700"> @lang('lang.SayAboutUs')</span> </h1>

            <swiper-container class=" mySwiper"  pagination="true" pagination-dynamic-bullets="true"  navigation="true">

                @foreach ($test as $tst)


                <swiper-slide class="grid grid-cols-1 lg:grid-cols-2 lg:py-16 py-5 px-3 lg:px-10">
                    <div class="flex flex-col justify-between lg:px-12">
                         <p>{{$tst->review}}</p>
                         <p class="text-lg font-bold">{{$tst->job}}</p>
                     </div>

                     <div class="flex flex-col justify-center items-center mt-5 lg:mt-0">
                        <div style="background-image: url({{asset($tst->image)}});"  class="bg-cover bg-center h-60 w-60 rounded-full"></div>
                    </div>
                </swiper-slide>

                @endforeach


            </swiper-container>

            <div class="py-4">
                <button class="bg-yellow-700 px-4 py-1 text-white font-bold" id="reviewbtn">@lang('lang.AddReview')</button>
            </div>




{{------------------------------------------ Pop Up for Giving Review --------------------------------------}}

         <div class="bg-black fixed top-0 left-0 h-full w-full z-30 p-20 opacity-50 hidden transition duration-500" id="reviewlayer"></div>

        <div class="bg-white p-10 overflow-y-scroll z-40 fixed margins flex flex-col gap-6 hidden transition duration-500" id="reviewmodel">
            <div class="flex justify-between">
                <h1 class="text-sm lg:text-xl font-semibold lg:w-full w-1/2">@lang('lang.ReviewTitle')</h1>
                <button class="px-2 text-sm lg:lg lg:px-5 lg:py-1 bg-yellow-700 text-white" id="closebtn">@lang('lang.Close')</button>
            </div>
                <form action="storetest" method="post" enctype="multipart/form-data" class="flex flex-col justify-between h-full lg:h-fit lg:gap-5 py-3">
                    @csrf
                    <div class="flex flex-col gap-1 opacity-70 text-left">
                        <span>@lang('lang.FullName')</span>
                        <input type="text" name="name" placeholder="eg. Shokrullah Kosha" class="w-full border rounded-lg p-3" required>
                    </div>


                    <div class="flex flex-col gap-1 opacity-70 text-left">
                        <span>@lang('lang.Job')</span>
                        <input type="text" name="job" placeholder="eg. Web Developer" class="w-full border rounded-lg p-3" required>
                    </div>



                    <div class="flex flex-col gap-1 opacity-70 text-left">
                        <span>@lang('lang.Photo')</span>
                        <input type="file" name="image" class="w-full border rounded-lg p-3" required>
                    </div>



                    <div class="flex flex-col gap-1 opacity-70 text-left">
                        <span>@lang('lang.Review')</span>
                        <textarea name="review" id="" cols="4" rows="8"  class="w-full border rounded-lg p-3" placeholder="eg. Shokrullah Kosha is a paragon of freelancers." required></textarea>
                    </div>


                    <button class="bg-yellow-700 px-5 py-1 text-white w-fit mx-auto">@lang('lang.submit')</button>

                </form>

        </div>








        </div>
    </div>






</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</x-app-layout>
