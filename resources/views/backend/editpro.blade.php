<x-master-layout>

    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Edit Product</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="/pro/{{$product->id}}/update" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >Name of Product</label>
                    <input type="text" class="form-control" placeholder="Product Name" name="name_en" value="{{$product->name_en}}">
                    @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label >Name of Product</label>
                    <input type="text" class="form-control" placeholder="Product Name" name="name_fa" value="{{$product->name_fa}}">
                    @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Catagory</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="catagory_id" value="{{$product->catagory_id}}">
                    @error('catagory_id')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>





                  <div class="form-group">
                    <label>Details of the Product</label>
                    <textarea cols="5" rows="5" class="form-control" name="detail_en">
                        {{$product->detail_en}}
                    </textarea>
                    @error('detail')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label>Details of the Product</label>
                    <textarea cols="5" rows="5" class="form-control" name="detail_fa">
                        {{$product->detail_fa}}
                    </textarea>
                    @error('detail')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label >Price</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="price" value="{{$product->price}}">
                    @error('price')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <img src="{{asset($product->img)}}" alt="" class="w-25 h-25">
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
