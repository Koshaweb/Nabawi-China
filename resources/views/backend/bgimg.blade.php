<x-master-layout>
    <div class="p-4">

     <!-- general form elements -->
     <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Background Images</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="storebgimg" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">

                <div class="form-group">
                    <label for="homebg">Home Bg</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="homebg" id="homebg" onchange="handleFileSelect(this)">
                            <label class="custom-file-label" id="homebg-label">Choose file</label>
                        </div>
                    </div>
                    @error('homebg')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="aboutbg">About Bg</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="aboutbg" id="aboutbg" onchange="handleFileSelect(this)">
                            <label class="custom-file-label" id="aboutbg-label">Choose file</label>
                        </div>
                    </div>
                    @error('aboutbg')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="offerbg">Offer Bg</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="offerbg" id="offerbg" onchange="handleFileSelect(this)">
                            <label class="custom-file-label" id="offerbg-label">Choose file</label>
                        </div>
                    </div>
                    @error('offerbg')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="contactbg">Contact Bg</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="contactbg" id="contactbg" onchange="handleFileSelect(this)">
                            <label class="custom-file-label" id="contactbg-label">Choose file</label>
                        </div>
                    </div>
                    @error('contactbg')
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
            <h3 class="card-title">All photos</h3>


          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Home Bg</th>
                  <th>About Bg</th>
                  <th>Offer Bg</th>
                  <th>Contact Bg</th>
                  <th>Button</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($bgimg as $bg)
                      <tr>
                          <td>{{$bg->id}}</td>
                          <td><img src="{{asset($bg->homebg)}}" alt="" class="w-25 h-25"></td>
                          <td><img src="{{asset($bg->aboutbg)}}" alt="" class="w-25 h-25"></td>
                          <td><img src="{{asset($bg->offerbg)}}" alt="" class="w-25 h-25"></td>
                          <td><img src="{{asset($bg->contactbg)}}" alt="" class="w-25 h-25"></td>

                          <td class="d-flex gap-5">
                              <a href="allphoto/{{$bg->id}}" type="button" class="bg-red-700 px-3 py-2 rounded text-white hover:bg-red-800 duration-300" data-toggle="modal" data-target="#modal-danger">Delete</a>
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
                            <a href="allphoto/{{$bg->id}}/delete" type="button" class="btn btn-outline-light">Yes</a>
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
