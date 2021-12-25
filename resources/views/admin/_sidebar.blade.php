<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-left" href="{{route('admin_home')}}">
        <div class="sidebar-brand-text mx-3">Admin Home</div>
    </a>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_category')}}">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Category</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_products')}}">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Products</span>
        </a>

    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_setting')}}"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_messages')}}"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Contact Messages</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Tables</h6>
                <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
                <a class="collapse-item" href="datatables.html">DataTables</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="ui-colors.html">
            <i class="fas fa-fw fa-palette"></i>
            <span>UI Colors</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Examples
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Example Pages</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
