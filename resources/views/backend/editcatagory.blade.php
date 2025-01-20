<x-master-layout>


    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Add Background Images</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="/allct/{{$editct->id}}/update" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >English Name</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="name_en" value="{{$editct->name_en}}">
                    @error('name_en')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Persian Name</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="name_fa" value="{{$editct->name_fa}}">
                    @error('name_fa')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <img src="{{asset($editct->img)}}" alt="" class="w-25 h-25">
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
