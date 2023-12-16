    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.index') }}" class="nav-link">Users</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.posts.index') }}" class="nav-link">Posts</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('admin.categories') }}" class="nav-link">Categories</a>
            </li>
        </ul>
    </nav>
