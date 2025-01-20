<x-master-layout>


    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Edit Your Services</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="/service/{{$service->id}}/update" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >English Name</label>
                    <input type="text" name="name_en" value="{{$service->name_en}}" class="form-control" placeholder="eg. Web Services" required">
                    @error('name_en')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Persian Name</label>
                    <input type="text" name="name_fa" value="{{$service->name_fa}}" class="form-control" placeholder="eg. Web Services" required">
                    @error('name_fa')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label>English Details</label>
                    <textarea cols="5" rows="5" class="form-control" name="detail_en">
                        {{$service->detail_en}}
                    </textarea>
                    @error('detail_en')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label>Persian Details</label>
                    <textarea cols="5" rows="5" class="form-control" name="detail_fa">
                        {{$service->detail_fa}}
                    </textarea>
                    @error('detail_fa')
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
