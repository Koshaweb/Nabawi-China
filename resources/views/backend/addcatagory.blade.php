<x-master-layout>

    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Add Background Images</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="storecatagory" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >Name in English</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="name_en">
                    @error('name_en')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Name in Persian</label>
                    <input type="text" class="form-control" placeholder="Catagory Name" name="name_fa">
                    @error('name_fa')
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





<div class="p-4">
    <!-- /.row -->
    <div class="row wrapper">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">All Catagories</h3>


          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>English Name</th>
                  <th>Persian Name</th>
                  <th>Image</th>
                  <th>Button</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($catagory as $ct)
                      <tr>
                          <td>{{$ct->id}}</td>
                          <td>{{$ct->name_en}}</td>
                          <td>{{$ct->name_fa}}</td>
                          <td><img src="{{asset($ct->img)}}" alt="" class="w-25 h-25"></td>

                          <td class="d-flex gap-5">
                              <a href="allphoto/{{$ct->id}}" type="button" class="bg-red-700 px-3 py-2 rounded text-white hover:bg-red-800 duration-300" data-toggle="modal" data-target="#modal-danger">Delete</a>
                              <a href="allct/{{$ct->id}}/edit"  class="btn btn-info">Edit</a>
                          </td>
                       </tr>


          {{-------------------------- Delte Model -------------- --}}
                  <div class="modal fade" id="modal-danger">
                      <div class="modal-dialog">
                        <div class="modal-content bg-danger">
                          <div class="modal-header">
                            <h4 class="modal-title">Are you sure?</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>If you click 'yes', the information will be deleted permenantly.</p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                            <a href="allct/{{$ct->id}}/delete" type="button" class="btn btn-outline-light">Yes</a>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
          {{-------------------------- Delte Model -------------- --}}





                    @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>

</x-master-layout>
