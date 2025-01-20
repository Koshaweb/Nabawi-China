<x-master-layout>

    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Add Offers/Posts</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="storeoffer" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >English Title</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="title_en">
                    @error('title_en')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label >Persian Title</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="title_fa">
                    @error('title_fa')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label>English Content</label>
                    <textarea cols="5" rows="5" class="form-control" name="content_en">

                    </textarea>
                    @error('content_en')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label>Persian Content</label>
                    <textarea cols="5" rows="5" class="form-control" name="content_fa">

                    </textarea>
                    @error('content_fa')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>





               <div class="form-group">
                   <label for="exampleInputFile">Image</label>
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
