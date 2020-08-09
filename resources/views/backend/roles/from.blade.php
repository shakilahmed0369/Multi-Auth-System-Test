<form action="{{ route('admin.role.store') }}" method="POST">
  <div class="form-group">
      <label for="fullname">Full Name</label>
      <input name="name" type="text" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Enter email">

  </div>


<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Email address</label>
  <select class="form-control" name="user_type" id="">
    <option value="">sksahkil</option>

  </select>
</div>

  <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Add User</button>
</form>