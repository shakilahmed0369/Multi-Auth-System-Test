@extends('backend.layout.app')

@section('content')
<div class="col-12 mt-5">
  <div class="card">
      <div class="card-body">
        @include('backend.layout.messeges')
          <h4 class="header-title">Basic form</h4>
          <form action="{{ route('admin.role.store') }}" method="POST">
            @csrf
              <div class="form-group">
                  <label for="fullname">Role Name</label>
                  <input name="rolename" type="text" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Role Name">
              </div>

              <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add Role</button>
          </form>
      </div>
  </div>
</div>
@endsection