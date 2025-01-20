@vite(['resources/css/app.css', 'resources/js/app.js',  'resources/js/bootstrap.js'])
<div class="p-5">

    @if(session()->has('success'))
    <div class="fixed lg:top-5 top-0  lg:left-96 lg:right-96 z-40 bg-yellow-700 p-6 text-center" x-data="{success: true}"  x-init="setTimeout(() => success = false, 10000 )" x-show="success">
        <h1 class="w-full h-full bg-white p-5 capitalize text-xl tracking-widest font-semibold">Thank You! Your Order is submitted successfully - We will reach you soon.</h1>
    </div>
    @endif




    <div class="hidden lg:grid lg:grid-cols-6 py-6 items-center px-20">

        <div class="flex gap-3 items-center px-6 col-span-1">
            <div class="flex flex-col text-2xl font-black text-red-600">
                <img src="{{asset('imgs/logopng.png')}}" alt="" class="w-40 ">
            </div>
        </div>


        <div class="flex col-span-4 px-16">
            <form method="get" class="relative w-full">
                @csrf
                <input type="text" name="search"  placeholder= " @lang('lang.searchsection')"  class="px-5 py-3  w-full">
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

    <div style="background-image: url({{asset('imgs/order.jpg')}});" class="bg-cover bg-bottom w-full py-44 lg:py-60 relative">
        <div class="absolute top-0 left-0 bg-black z-10 w-full h-full opacity-20"> </div>
        <div class="absolute top-0 left-0 h-full w-full flex justify-center items-center z-20">
            <h1 class="text-white text-4xl lg:text-6xl font-black">@lang('lang.OrderAnything')</h1>
        </div>
    </div>




    <div class="py-10">
        <div class=" px-4 lg:px-48 flex flex-col gap-5">

            <h1 class="text-center text-3xl font-bold">@lang('lang.FormTitle')</h1>

            <form action="/storeorder" method="post" class="flex flex-col gap-6 shadow-xl py-6 px-12">
                @csrf

                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.ProductID')</span>
                    <input type="number" name="product_id" placeholder="eg. 1" value="{{$pro->id}}" class="w-full border rounded-lg p-3" required>
                </div>


                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.ProductName')</span>
                    <input type="text" name="product_name" placeholder="eg. iPhone 15 pro max" value="{{ $pro->{'name_'.app()->getLocale()} }}" class="w-full border rounded-lg p-3" required>
                </div>


                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.FullName')</span>
                    <input type="text" name="name" placeholder="eg. Shokrullah Kosha" class="w-full border rounded-lg p-3" required>
                </div>


                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.Email')</span>
                    <input type="email" name="email" placeholder="eg. sh.kosha2020@gmail.com" class="w-full border rounded-lg p-3" required>
                </div>



                <div class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.WhatsApp')</span>
                    <input type="text" name="number" placeholder="eg. +923201162723" class="w-full border rounded-lg p-3" required>
                </div>



                <div  class="flex flex-col gap-1 opacity-70">
                    <span>@lang('lang.ProductDetails')</span>
                    <textarea required name="detail" cols="4" rows="4"  class="w-full border rounded-lg p-3" required>{{ $pro->{'detail_'.app()->getLocale()} }}</textarea>
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

</div>
