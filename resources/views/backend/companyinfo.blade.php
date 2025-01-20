<x-master-layout>

    <div class="p-4">

        <!-- general form elements -->
        <div class="card card-primary">
           <div class="card-header">
             <h3 class="card-title">Add Information About the Company</h3>
           </div>
           <!-- /.card-header -->
           <!-- form start -->
           <form action="storecompany" method="POST" enctype="multipart/form-data">
               @csrf
             <div class="card-body">


                <div class="form-group">
                    <label >Phone number</label>
                    <input type="number" name="number" class="form-control" placeholder="eg. +923201162723" required">
                    @error('number')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="eg. sh.kosha2020@gmail.com" required">
                    @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>



                  <div class="form-group">
                    <label >English Address</label>
                    <input type="text" name="address_en" class="form-control" placeholder="eg. Quetta, Pakistan" required">
                    @error('address_en')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>





                  <div class="form-group">
                    <label >Persian Address</label>
                    <input type="text" name="address_fa" class="form-control" placeholder="eg. Quetta, Pakistan" required">
                    @error('address_fa')
                          <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label for="exampleInputFile">An Image of the Map</label>
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

                    </textarea>
                    @error('info_en')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




                  <div class="form-group">
                    <label>Persian Info</label>
                    <textarea cols="5" rows="5" class="form-control" name="info_fa">

                    </textarea>
                    @error('info_fa')
                         <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>




               <div class="form-group">
                   <label for="exampleInputFile">Image of the comapny</label>
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
            <h3 class="card-title">All Information</h3>


          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Number</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Address p</th>
                  <th>Detail E</th>
                  <th>Details P</th>
                  <th>Image</th>
                  <th>Button</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($info as $infos)
                      <tr>
                          <td>{{$infos->id}}</td>
                          <td>{{$infos->number}}</td>
                          <td>{{$infos->email}}</td>
                          <td>{{$infos->address_en}}</td>
                          <td>{{$infos->address_fa}}</td>
                          <td>{{$infos->info_en}}</td>
                          <td>{{$infos->info_fa}}</td>

                          <td><img src="{{asset($infos->img)}}" alt="" class="w-25 h-25"></td>

                          <td class="d-flex gap-5">
                              <a href="info/{{$infos->id}}" type="button" class="bg-red-700 px-3 py-2 rounded text-white hover:bg-red-800 duration-300" data-toggle="modal" data-target="#modal-danger">Delete</a>
                              <a href="info/{{$infos->id}}/edit"  class="btn btn-info">Edit</a>
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
                            <a href="info/{{$infos->id}}/delete" type="button" class="btn btn-outline-light">Yes</a>
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
