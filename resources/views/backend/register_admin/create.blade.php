@extends('backend.layout.app')

@section('content')
<div class="col-lg-12 mt-12">
  <div class="card">
    <div class="card-body">
        <h4 class="header-title">Thead info</h4>
        @include('backend.layout.messeges')
      
        <form action="{{ route('admin.register-admin.store') }}" method="POST">
          @csrf

          <div class="form-group">
              <label for="fullname">Full Name</label>
              <input name="name" type="text" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Enter Name">
        
          </div>
        
        
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Assign Role</label>
          <select style="height: 43px" class="form-control" name="user_type" id="">
            <option value="">Select</option>
            @foreach ($roles as $role)    
            <option value="{{ $role->role }}">{{ $role->role }}</option>
            @endforeach
        
          </select>
        </div>
        
          <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add User</button>
        </form>
        
    </div>
  </div>
</div>
@endsection