<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Logo.min.svg"
             alt="Logo"
             class="brand-image img-circle elevation-3"> -->
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <x-menu></x-menu>
            </ul>
        </nav>
    </div>

</aside>
