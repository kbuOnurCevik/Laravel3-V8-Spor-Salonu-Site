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
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Orders</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Orders</h6>
                <a class="collapse-item" href="{{route('admin_orders')}}">All Orders</a>
                <a class="collapse-item" href="{{route('admin_order_list',['status'=>'new'])}}">New Orders</a>
                <a class="collapse-item" href="{{route('admin_order_list',['status'=>'canceled'])}}">Canceled Orders</a>
                <a class="collapse-item" href="{{route('admin_order_list',['status'=>'completed'])}}">Completed Orders</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_setting')}}"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Settings</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_users')}}"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Users</span>
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
        <a class="nav-link collapsed" href="{{route('admin_faq')}}"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>FAQ</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->
