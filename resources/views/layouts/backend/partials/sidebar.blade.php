<div class="main-sidebar sidebar-style-3">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index-2.html">Loyalty</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index-2.html">CP</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href="{{ URL::to('/dashboard') }}">Dashboard</a></li>
                </ul>
            </li>

                <li class="menu-header">State</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>States</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ URL::to('/states') }}">All States</a></li>
                    </ul>
                </li>

                <li class="menu-header">LGA</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>LGA</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ url('/lgas') }}">All LGAs</a></li>
                    </ul>
                </li>

                <li class="menu-header">Ward</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Wards</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ url('/wards') }}">All Wards</a></li>
                    </ul>
                </li>

                <li class="menu-header">Citizen</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>citizens</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ url('/citizens') }}">All Citizens</a></li>
                    </ul>
                </li>

                <li class="menu-header">Manage Users</li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="far fa-chevron-down"></i> <span>Manage Users</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ URL::to('/users') }}">Corpers</a></li>
                    </ul>
                </li>
        </ul>
    </aside>
</div>
