<x-master-layout>

    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Add Product</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="storeproducts" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >Name of Product (English)</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="name_en">
                    @error('name_en')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Name of Product (Persian)</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="name_fa">
                    @error('name_fa')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group">
                    <label >Select The Category</label>
                     <select name="catagory_id" class="form-control">
                        <option disabled selected>Categories</option>

                        @foreach ($catagory as $ct)
                            <option value="{{$ct->id}}">{{$ct->name_en}}</option>
                        @endforeach
                     </select>
                  </div>

                  <div class="form-group">
                    <label>Details of the Product (English)</label>
                    <textarea cols="5" rows="5" class="form-control" name="detail_en">

                    </textarea>
                    @error('detail_en')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label>Details of the Product (Persian)</label>
                    <textarea cols="5" rows="5" class="form-control" name="detail_fa">

                    </textarea>
                    @error('detail_fa')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Price</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="price">
                    @error('price')
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
