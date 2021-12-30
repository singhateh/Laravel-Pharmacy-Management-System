<nav class="pcoded-navbar theme-horizontal menu-light">
    <div class="navbar-wrapper container">
        <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
            <ul class="nav pcoded-inner-navbar sidenav-inner">

                    <li class="nav-item {{ route_is('dashboard') ? 'active active-cover' : '' }}">
                        <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    @can('view-category')
                    <li class="nav-item  {{ route_is('categories') ? 'active active-cover' : '' }}">
                        <a href="{{route('categories')}}"><i class="feather icon-layout"></i> <span>Categories</span></a>
                    </li>
                    @endcan

                    @can('view-products')
                    <li class="nav-item pcoded-hasmenu {{ route_is(('products')) || route_is(('add-product')) || route_is(('outstock')) || route_is(('expired')) || route_is(('edit-product')) ? 'active active-cover' : '' }}">
                        <a href="#"><i class="feather icon-document"></i> <span> Medicine</span> <span class="menu-arrow"></span></a>
                        <ul class="pcoded-submenu">
                            @can('view-products')<li class="{{ route_is(('products')) ? 'active' : '' }}"><a  href="{{route('products')}}">Medicines</a></li>@endcan
                            @can('create-product')<li class="{{ route_is('add-product') ? 'active' : '' }}"><a  href="{{route('add-product')}}">Add Medicine</a></li>@endcan
                            @can('view-outstock-products')<li class="{{ route_is('outstock') ? 'active' : '' }}"><a  href="{{route('outstock')}}">Out-Stock</a></li>@endcan
                            @can('view-expired-products')<li class="{{ route_is('expired') ? 'active' : '' }}"><a  href="{{route('expired')}}">Expired</a></li>@endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view-purchase')
                    <li class="nav-item pcoded-hasmenu {{ route_is(('purchases')) || route_is(('add-purchase')) || route_is(('edit-purchase')) ? 'active active-cover' : '' }}">
                        <a href="#"><i class="feather icon-star-o"></i> <span> Stock</span> <span class="menu-arrow"></span></a>
                        <ul class="pcoded-submenu">
                            <li class="{{ route_is('purchases') ? 'active active-cover' : '' }}"><a  href="{{route('purchases')}}">Stock Purchase</a></li>
                            @can('create-purchase')
                            <li class="{{ route_is('add-purchase') ? 'active active-cover' : '' }}" ><a href="{{route('add-purchase')}}">Add Stock</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan
                    @can('view-sales')
                    <li class="nav-item  {{ request()->is('sales*') ? 'active active-cover' : '' }}"><a href="{{route('sales')}}"><i class="feather icon-activity"></i> <span>Sales</span></a></li>
                    @endcan
                    @can('view-supplier')
                    <li class="nav-item pcoded-hasmenu {{ route_is(('suppliers')) || route_is(('add-supplier')) || route_is(('edit-supplier')) ? 'active active-cover' : '' }}">
                        <a href="#"><i class="feather icon-user"></i> <span> Supplier</span> <span class="menu-arrow"></span></a>
                        <ul class="pcoded-submenu">
                            <li class="{{ route_is('suppliers') ? 'active active-cover' : '' }}"><a  href="{{route('suppliers')}}">Supplier</a></li>
                            @can('create-supplier')<li class="{{ route_is('add-supplier') ? 'active active-cover' : '' }}"><a  href="{{route('add-supplier')}}">Add Supplier</a></li>@endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view-reports')
                    <li class="nav-item pcoded-hasmenu {{ request()->is('reports*') ? 'active active-cover' : '' }}">
                        <a href="#"><i class="feather icon-document"></i> <span> Reports</span> <span class="menu-arrow"></span></a>
                        <ul class="pcoded-submenu">
                            <li class="{{ route_is('reports') ? 'active active-cover' : '' }}"><a href="{{route('reports')}}">Reports</a></li>
                        </ul>
                    </li>
                    @endcan

                    @can('view-access-control')
                    <li class="nav-item pcoded-hasmenu {{ route_is(('permissions')) || route_is(('add-permissions')) || route_is(('edit-permissions')) || route_is(('roles'))  ? 'active active-cover' : '' }}">
                        <a href="#"><i class="feather icon-lock"></i> <span> Access Control</span> <span class="menu-arrow"></span></a>
                        <ul class="pcoded-submenu">
                            @can('view-permission')
                            <li class="nav-item {{ route_is('permissions') ? 'active active-cover' : '' }}"><a href="{{route('permissions')}}">Permissions</a></li>
                            @endcan
                            @can('view-role')
                            <li class="nav-item {{ route_is('roles') ? 'active active-cover' : '' }}"><a href="{{route('roles')}}">Roles</a></li>
                            @endcan
                        </ul>
                    </li>
                    @endcan

                    @can('view-users')
                    <li class=" nav-item  {{ route_is('users') ? 'active active-cover' : '' }}">
                        <a href="{{route('users')}}"><i class="feather icon-users"></i> <span>Users</span></a>
                    </li>
                    @endcan

                    <li class="nav-item pcoded-hasmenu {{ route_is(('settings')) || route_is(('backup.index')) ? 'active active-cover' : '' }}">
                        <a href="#"><i class="feather icon-gears"></i> <span> System Settings</span> <span class="menu-arrow"></span></a>
                        <ul class="pcoded-submenu">
                            @can('view-settings')
                            <li class="{{ route_is('settings') ? 'active active-cover' : '' }}">
                                <a href="{{route('settings')}}">
                                    <i class="fa fa-gears"></i>
                                     <span> Settings</span>
                                </a>
                            </li>
                            @endcan
                            <li class="nav-item  {{ route_is('backup.index') ? 'active active-cover' : '' }}">
                                <a href="{{route('backup.index')}}"><i class="material-icons">backup</i> <span>Backups</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
        </div>
    </div>
</nav>

<style>
    .active-cover{
        background-color: cadetblue;
        color: white;
    }
    .active-cover > a{
        color: white !important;
    }
</style>