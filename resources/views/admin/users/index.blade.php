<x-admin-master>

    @section('styles')
        <!-- Custom styles for this page -->
	    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    @endsection



    @section('content')
        <h1 class="h3 mb-4 text-gray-800">Users</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Role</th>
                      <th>Avatar</th>
                      <th>Username</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Joined</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Role</th>
                      <th>Avatar</th>
                      <th>Username</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Joined</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->role_id}}</td>
                      <td></td>
                      <td>{{$user->username}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->is_active < 1 ? 'Deactived' : 'Active'}}</td>
                      <td>{{$user->created_at->diffForHumans()}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    @endsection



    @section('scripts')
    <!-- Page level plugins -->
	<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

	<!-- Page level custom scripts -->
	<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
    @endsection

</x-admin-master>