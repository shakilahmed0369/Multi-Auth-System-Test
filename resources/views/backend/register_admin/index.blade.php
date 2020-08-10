@extends('backend.layout.app')

@section('content')
<div class="col-lg-12 mt-12">
  <div class="card">
    <div class="card-body">
        <h4 class="header-title">Thead info</h4>
        <div class="single-table">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead class="text-uppercase bg-info">
                        <tr class="text-white">
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role) 
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->email }}</td>
                            <td>{{ $role->user_type }}</td>

                            <td><a class="btn-sm btn-primary" href="{{ route('admin.register-admin.edit', $role->id) }}"><i class="ti-pencil"></i></a>  <a onclick="event.preventDefault();
                              $('#delete').submit();" class="btn-sm btn-danger" href=""><i class="ti-trash"></i></a></td>

                            <form id="delete" action="{{ route('admin.register-admin.destroy', $role->id) }}" method="POST">
                                @csrf
                                @method('DELETE') 
                            </form>
                          </tr>
                      @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
        {{-- @if (!count($roles) > 0)
          <p class="text-center text-danger"><b>NO Data Found!</b></p>            
        @endif --}}
        
    </div>
  </div>
</div>
@endsection