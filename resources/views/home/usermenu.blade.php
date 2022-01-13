@auth()

    <div class="col-lg-2 col-md-2">
        <div class="sidebar-option">
            <div class="so-categories">
                <h5 class="title">User Panel</h5>
                <ul>
                    <li><a href="{{route('myprofile')}}">My Profile</a></li>
                    <li><a href="{{route('user_orders')}}">My Packet Orders </a></li>
                    <li><a href="{{route('logout')}}">Logout </a></li>
                    @php
                    $userRoles = Auth::user()->roles->pluck('name');
                    @endphp

                    @if($userRoles->contains('admin'))
                        <li><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
@endauth
