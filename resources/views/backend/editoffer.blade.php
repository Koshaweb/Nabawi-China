<x-master-layout>

    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Edit Offers/Posts</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="/offer/{{$offer->id}}/update" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="title_en" value="{{$offer->title_en}}">
                    @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label >Title</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="title_fa" value="{{$offer->title_fa}}">
                    @error('title')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label>Content</label>
                    <textarea cols="5" rows="5" class="form-control" name="content_en">
                        {{$offer->content_en}}
                    </textarea>
                    @error('content')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label>Content</label>
                    <textarea cols="5" rows="5" class="form-control" name="content_fa">
                        {{$offer->content_fa}}
                    </textarea>
                    @error('content')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>





                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <img src="{{asset($offer->img)}}" alt="" class="w-25 h-25">
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
