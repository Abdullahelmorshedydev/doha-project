<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SAADA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ request()->is('admin/dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.index') }}"
                        class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li
                    class="nav-item {{ request()->is('admin/events') || request()->is('admin/events/*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/events') || request()->is('admin/events/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Events
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.events.index') }}"
                                class="nav-link {{ request()->is('admin/events') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Events</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.events.create') }}"
                                class="nav-link {{ request()->is('admin/events/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create New Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ request()->is('admin/job-offers') || request()->is('admin/job-offers/*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/job-offers') || request()->is('admin/job-offers/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Job Offers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.job-offers.index') }}"
                                class="nav-link {{ request()->is('admin/job-offers') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Job Offers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.job-offers.create') }}"
                                class="nav-link {{ request()->is('admin/job-offers/create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create New Job Offer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="nav-item {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Contacts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.contacts.index') }}"
                                class="nav-link {{ request()->is('admin/contacts') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Contacts</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
