<x-admin-master>

    @section('content')
        <h1 class="h3 mb-4 text-gray-800">Create User</h1>

        {!! Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\UsersController@store']) !!}

        <div class="form-group">
            {!! Form::label('username', 'Username:') !!}
            {!! Form::text('username', null, ['class'=>'form-control col-sm-4']) !!}        
        </div>
        
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control col-sm-4']) !!}        
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email Address:') !!}
            {!! Form::text('email', null, ['class'=>'form-control col-sm-4']) !!}        
        </div>

        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::text('password', null, ['class'=>'form-control col-sm-4']) !!}        
        </div>

        <div class="form-group">
            {!! Form::label('confirm_password', 'Confirm Password:') !!}
            {!! Form::text('confirm_password', null, ['class'=>'form-control col-sm-4']) !!}        
        </div>

        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}        
        </div>

        {!! Form::close() !!}

    @endsection

</x-admin-master>