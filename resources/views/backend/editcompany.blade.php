<x-master-layout>


    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Edit Information About the Company</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="/info/{{$editinfo->id}}/update" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >Phone number</label>
                    <input type="number" name="number" class="form-control" placeholder="eg. +923201162723" value="{{$editinfo->number}}" required ">
                    @error('number')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="eg. sh.kosha2020@gmail.com" value="{{$editinfo->email}}" required">
                    @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >English Address</label>
                    <input type="text" name="address_en" class="form-control" placeholder="eg. Quetta, Pakistan" value="{{$editinfo->address_en}}" required">
                    @error('address')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Persian Address</label>
                    <input type="text" name="address_fa" class="form-control" placeholder="eg. Quetta, Pakistan" value="{{$editinfo->address_fa}}" required">
                    @error('address_fa')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label for="exampleInputFile">Map</label>
                    <img src="{{asset($editinfo->map)}}" alt="" class="w-25 h-25">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="map">
                        <label class="custom-file-label">Choose file</label>

                      </div>
                    </div>
                    @error('map')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label>English Info</label>
                    <textarea cols="5" rows="5" class="form-control" name="info_en">
                        {{$editinfo->info_en}}
                    </textarea>
                    @error('info_en')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label>Persian Info</label>
                    <textarea cols="5" rows="5" class="form-control" name="info_fa">
                        {{$editinfo->info_fa}}
                    </textarea>
                    @error('info_fa')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <img src="{{asset($editinfo->img)}}" alt="" class="w-25 h-25">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="img">
                        <label class="custom-file-label">Choose file</label>

                      </div>
                    </div>
                    @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


             </div>
             <!-- /.card-body -->

             <div class="card-footer">
               <button type="submit" class="bg-blue-500 px-3 py-2 rounded text-white hover:bg-blue-700 duration-300">Submit</button>
             </div>
           </form>
         </div>
         <!-- /.card -->

   </div>


</x-master-layout>
