<div class="sidebar-menu">
  <div class="sidebar-header">
      <div class="logo">
          <a href="index.html"><img src="backend/assets/images/icon/logo.png" alt="logo"></a>
      </div>
  </div>
  <div class="main-menu">
      <div class="menu-inner">
          <nav>
              <ul class="metismenu" id="menu">
                  <li class="active">
                      <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                  </li>
      
                      @if (Gate::check('isSuperAdmin'))
                          
                      <li>
                          <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Roles</span></a>
                          <ul class="collapse">
                              <li><a href="{{ route('admin.role.create') }}">Add Role</a></li>
                              <li><a href="{{ route('admin.role.index') }}">Role User lists</a></li>
                          </ul>
                      </li>
                      @endif
                          
                      
        
                @if (Gate::check('isSuperAdmin') or Gate::check('isAdmin'))
                <li>
                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Register Admin</span></a>
                    <ul class="collapse">
                        <li><a href="{{ route('admin.register-admin.create') }}">Add Admin Role</a></li>
                        <li><a href="{{ route('admin.register-admin.index') }}">Admin List</a></li>
                    </ul>
                </li>
                @endif
              </ul>
          </nav>
      </div>
  </div>
</div>