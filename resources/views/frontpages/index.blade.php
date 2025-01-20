
<x-app-layout>

<x-slot name="header">
    @foreach ($service as $ser)

        <li class="px-3 py-2 border-b-4 border-white bg-gray-100 flex flex-col gap-2" style="width: 300px;"><p class="text-lg font-bold">{{ $ser->{'name_'.app()->getLocale()} }}</p>

        <p>{{ $ser->{'detail_'.app()->getLocale()} }}</p>
    </li>




        @endforeach
</x-slot>


@if(session()->has('success'))
<div class="fixed lg:top-5 top-0  lg:left-96 lg:right-96 z-40 bg-yellow-700 p-6 text-center" x-data="{success: true}"  x-init="setTimeout(() => success = false, 10000 )" x-show="success">
    <h1 class="w-full h-full bg-white p-5 capitalize text-xl tracking-widest font-semibold">@lang('lang.OrderMessage')</h1>
</div>
@endif



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


    <div style="background-image: url({{asset($bg->homebg)}});" class=" w-full bg-cover bg-center relative py-72">
        <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-20"> </div>

        @endforeach

        {{---------------------- English ----------------------------}}


            <div class="lg:grid grid-cols-1 lg:grid-cols-3 w-full justify-center items-start z-20 absolute top-0 left-0 h-full px-12 py-12">
                <div class="flex flex-col gap-3 justify-center items-start h-full col-span-2">
                    <h1 class="text-3xl lg:text-6xl font-black text-white tracking-tighter"><strong>@lang('lang.CompanyName')</strong> </h1>
                    <h1 class=" text-xl lg:text-white text-3xl font-thin tracking-widest">@lang('lang.Claim')</h1>
                    <button class="px-9 py-3 bg-yellow-700 text-white text-lg font-black mt-8" id="orderbtn">@lang('lang.order')</button>
                 </div>







{{------------------------------------------ Pop Up for Ordering --------------------------------------}}

         <div class="bg-black fixed top-0 left-0 h-full w-full z-40 p-20 opacity-50 hidden transition duration-500" id="orderlayer"></div>

         <div class="bg-white p-10 overflow-y-scroll z-50 fixed margins flex flex-col gap-6 hidden transition duration-500" id="ordermodel">
             <div class="flex justify-between">
                <h1 class="text-center text-lg lg:text-3xl font-bold w-1/2 lg:w-full">@lang('lang.FormTitle')</h1>
                 <button class="px-2 text-sm lg:lg lg:px-5 lg:py-1 bg-yellow-700 text-white h-fit py-1" id="closeorder">@lang('lang.Close')</button>
             </div>
             <div class="py-4">



                    <form action="/storeorder" method="POST" class="flex flex-col gap-6 py-3 px-1 lg:px-4">
                        @csrf

                        <div class="flex flex-col gap-1 opacity-70">
                            <span>@lang('lang.FullName')*</span>
                            <input type="text" name="name" placeholder="eg. Shokrullah Kosha" class="w-full border rounded-lg p-3" required>
                        </div>


                        <div class="flex flex-col gap-1 opacity-70">
                            <span>@lang('lang.Email')</span>
                            <input type="email" name="email" placeholder="eg. sh.kosha2020@gmail.com" class="w-full border rounded-lg p-3" required>
                        </div>



                        <div class="flex flex-col gap-1 opacity-70">
                            <span>@lang('lang.WhatsApp')</span>
                            <input type="number" name="number" placeholder="eg. +923201162723" class="w-full border rounded-lg p-3" required>
                        </div>



                        <div  class="flex flex-col gap-1 opacity-70">
                            <span>@lang('lang.ProductDetails')</span>
                            <textarea name="detail" cols="4" rows="4"  class="w-full border rounded-lg p-3" required></textarea>
                        </div>




                        <div class="flex flex-col gap-1 opacity-70">
                            <span>@lang('lang.DeliveryType')</span>
                            <div class="flex gap-3 items-center">
                                <input type="radio" id="plane" name="delivery" value="By Airplane">
                                <label for="plane">@lang('lang.Airplane')</label>
                            </div>

                            <div class="flex gap-3 items-center">
                                <input type="radio" id="ship" name="delivery" value="By Ship">
                                <label for="ship">@lang('lang.Ship')</label>
                            </div>
                        </div>




                        <div class="flex flex-col gap-1 opacity-70">
                            <span>@lang('lang.PostOfficeAddress')</span>
                            <input type="text" name="address" placeholder="eg. TCS Office, Ali Abad, Quetta, PK" class="w-full border rounded-lg p-3" required>
                        </div>


                        <button class="bg-yellow-700 px-5 py-1 text-white w-fit mx-auto">@lang('lang.submit')</button>

                    </form>


            </div>

         </div>







                <div class="col-span-1 hidden lg:flex justify-center items-center h-full border-2 border-white w-full flex-col gap-4 shadow-xl shadow-white bg-gray-900 opacity-70">
                    <h1 class="text-xl font-bold text-white">@lang('lang.contactus')</h1>

                    @if (App::getLocale() == 'en')

{{---------------------------------- English ------------------------------}}

                    <form action="storecontact" method="POST" class="flex flex-col gap-3 w-full p-4">
                        @csrf
                        <div class="flex flex-col gap-1 text-white">
                            <span>@lang('lang.FullName')</span>
                            <input type="text" name="name" class="p-2 w-full bg-transparent border-b rounded-lg border-white" required>
                        </div>


                        <div class="flex gap-2 w-full">
                            <div class="flex flex-col gap-1 text-white w-full">
                                <span>@lang('lang.Email')</span>
                                <input type="email" name="email" class="p-2 w-full bg-transparent border rounded-lg border-white" required>
                            </div>

                            <div class="flex flex-col gap-1 text-white w-full">
                                <span>@lang('lang.WhatsApp')</span>
                                <input type="number" name="number" class="p-2 w-full bg-transparent border rounded-lg border-white" required>
                            </div>
                        </div>



                        <div class="flex flex-col gap-1 text-white">
                            <span>@lang('lang.Message')</span>
                            <textarea name="message" cols="3" rows="3" class="p-2 w-full bg-transparent border rounded-lg border-white" required></textarea>
                        </div>

                        <button class="bg-yellow-700 px-4 py-1 text-white w-fit mx-auto rounded hover:bg-transparent hover:border border-yellow-700 transition duration-500">@lang('lang.submit')</button>
                    </form>

                    @else
{{---------------------------------- Persian ------------------------------}}
                    <form action="storecontact" method="POST" class="flex flex-col gap-3 w-full p-4 text-right">
                        @csrf
                        <div class="flex flex-col gap-1 text-white">
                            <span>@lang('lang.FullName')</span>
                            <input type="text" name="name" class="p-2 w-full bg-transparent border-b rounded-lg border-white" required>
                        </div>


                        <div class="flex gap-2 w-full">
                            <div class="flex flex-col gap-1 text-white w-full">
                                <span>@lang('lang.Email')</span>
                                <input type="email" name="email" class="p-2 w-full bg-transparent border rounded-lg border-white" required>
                            </div>

                            <div class="flex flex-col gap-1 text-white w-full">
                                <span>@lang('lang.WhatsApp')</span>
                                <input type="number" name="number" class="p-2 w-full bg-transparent border rounded-lg border-white" required>
                            </div>
                        </div>



                        <div class="flex flex-col gap-1 text-white">
                            <span>@lang('lang.Message')</span>
                            <textarea name="message" cols="3" rows="3" class="p-2 w-full bg-transparent border rounded-lg border-white" required></textarea>
                        </div>

                        <button class="bg-yellow-700 px-4 py-1 text-white w-fit mx-auto rounded hover:bg-transparent hover:border border-yellow-700 transition duration-500">@lang('lang.submit')</button>
                    </form>

                    @endif

                </div>


            </div>



    </div>




    {{---------------------------- catagory section --------------------------}}

    <div class="lg:py-12 py-8 px-4">

        @if(App::getLocale() == 'en')

        <div class=" px-4 text-3xl font-bold">
            <h1 class="border-b border-black py-4">@lang('lang.Our') <span class="text-yellow-700">@lang('lang.Category')</span></h1>
        </div>

        @else
        <div class=" px-4 text-3xl font-bold flex justify-end border-b border-black">
            <h1 class=" py-4">@lang('lang.Category') <span class="text-yellow-700">@lang('lang.Our')</span></h1>
        </div>

        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 py-8">

            @foreach ($allct as $allcts)

            <a href="allct/{{$allcts->id}}/show" style="background-image: url({{asset($allcts->img)}});" class="bg-cover bg-center p-4 w-full h-72 relative">
                <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-30"> </div>
                <div class="absolute top-0 left-0 z-20 h-full w-full flex justify-center items-center text-2xl font-bold text-white">
                    <h1>{{ $allcts->{'name_'.app()->getLocale()} }}</h1>
                </div>
            </a>

        @endforeach



        </div>
    </div>








    <div style="background-image: url({{asset('imgs/subs.jpg')}})" class="bg-cover bg-center w-full h-60 lg:h-44 relative">
        <div class="bg-black absolute top-0 left-0 h-full w-full z-10 opacity-40"></div>
        <div class="absolute top-0 left-0 h-full w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 z-20 items-center px-10 py-16">
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








    {{----------------------------- Order catagory -------------------------}}

    <div class="px-4">

        @if(App::getLocale() == 'en')
        <div class=" px-4 text-3xl font-bold">
            <h1 class="border-b border-black py-4">@lang('lang.Our')<span class="text-yellow-700"> @lang('lang.Feature')</span></h1>
        </div>

        @else

        <div class=" px-4 text-3xl font-bold flex justify-end border-b border-black">
            <h1 class=" py-4"> @lang('lang.Feature')<span class="text-yellow-700">@lang('lang.Our')</span></h1>
        </div>

        @endif

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 py-12 gap-6 px-8">

            @foreach ($featured as $fe)

            <div class="w-full h-fit">
                <div style="background-image: url({{asset($fe->img)}});" class="bg-cover bg-center w-full h-32"></div>
                <div class="flex flex-col gap-3 py-2">
                    <span class="font-thin">{{ $fe->{'name_'.app()->getLocale()} }}</span>
                    <span class="text-lg font-semibold tracking-wider">{{$fe->price}}</span>
                    <a href="{{$fe->id}}/order" class="px-3 py-1 bg-yellow-700 text-white text-sm font-thin w-fit">@lang('lang.order')</a>
                </div>
            </div>

            @endforeach


        </div>

    </div>

</div>


<script src="{{asset('dist/public.js')}}"></script>

</x-app-layout>
