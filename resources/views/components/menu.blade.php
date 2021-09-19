<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{  request()->routeIs('home*') ? 'active bg-info' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
@can('manage-organization')
<li class="nav-header text-bold">Administration</li>
<li class="nav-item">
    <a href="{!! route('organization.index') !!}" class="nav-link {{  request()->routeIs('organization*') ? 'active bg-info' : '' }}">
        <i class="nav-icon fas fa-building"></i>
        <p>Organizations</p>
    </a>
</li>
@endcan

@can('manage-roles')
<li class="nav-item">
    <a href="{!! route('role.index') !!}" class="nav-link {{  request()->routeIs('role*') ? 'active bg-info' : '' }}">
        <i class="nav-icon fas fa-chess-knight"></i>
        <p>Roles</p>
    </a>
</li>
@endcan
    
@can('manage-permissions')
<li class="nav-item">
    <a href="{!! route('permission.index') !!}" class="nav-link {{  request()->routeIs('permission*') ? 'active bg-info' : '' }}">
        <i class="nav-icon fas fa-shield-alt"></i>
        <p>Permissions</p>
    </a>
</li>
@endcan

@can('manage-employees')
<li class="nav-item">
    <a href="{!! route('user.index') !!}" class="nav-link {{  request()->routeIs('user*') ? 'active bg-info' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Employees</p>
    </a>
</li>
@endcan
