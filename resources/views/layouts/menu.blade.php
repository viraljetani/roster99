<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{  request()->routeIs('home*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('organizations') }}" class="nav-link {{  request()->routeIs('organizations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-building"></i>
        <p>Organizations</p>
    </a>
</li>
