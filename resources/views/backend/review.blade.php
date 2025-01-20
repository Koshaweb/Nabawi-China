<x-master-layout>


    <div class="p-4">
        <!-- /.row -->
        <div class="row wrapper">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Reviews</h3>


              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Job</th>
                      <th>Review</th>
                      <th>Status</th>
                      <th>Image</th>
                      <th>Button</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($test as $ts)
                          <tr>
                              <td>{{$ts->id}}</td>
                              <td>{{$ts->name}}</td>
                              <td>{{$ts->job}}</td>
                              <td>{{$ts->review}}</td>
                              <td><a href="rev/{{$ts->id}}">{{$ts->status}}</a></td>
                              <td><img src="{{asset($ts->image)}}" alt="" class="w-25 h-25"></td>

                              <td class="d-flex gap-5">
                                  <a href="rev/{{$ts->id}}" type="button" class="bg-red-700 px-3 py-2 rounded text-white hover:bg-red-800 duration-300" data-toggle="modal" data-target="#modal-danger">Delete</a>
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
                                <a href="rev/{{$ts->id}}/delete" type="button" class="btn btn-outline-light">Yes</a>
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
