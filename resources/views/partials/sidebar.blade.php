<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
            <img height="40" style="transform: scale(1.5); object-fit: cover;"
                                    src="{{ asset('frontend/assets/img/logo/logo1.png') }}" alt="">
                <div class="sidebar-brand-text mx-3">{{ __('') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Manajemen Pengguna') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Izin') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Peran') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Pengguna') }}</a>
                        <a class="collapse-item {{ request()->is('admin/rekenings') || request()->is('admin/rekenings/*') ? 'active' : '' }}" href="{{ route('admin.rekenings.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Rekening') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Manajemen Produk') }}</span>
                </a>
                <div id="collapseProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Kategori') }}</a>
                        <a class="collapse-item {{ request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : '' }}" href="{{ route('admin.tags.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Tags') }}</a>
                        <a class="collapse-item {{ request()->is('admin/products') || request()->is('admin/products/*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Produk') }}</a>
                        <a class="collapse-item {{ request()->is('admin/reviews') || request()->is('admin/reviews/*') ? 'active' : '' }}" href="{{ route('admin.reviews.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Ulasan') }}</a>
                        <a class="collapse-item {{ request()->is('admin/slides') || request()->is('admin/slides/*') ? 'active' : '' }}" href="{{ route('admin.slides.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Slide') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOrder" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Manajemen Pesanan') }}</span>
                </a>
                <div id="collapseOrder" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/orders') || request()->is('admin/orders/*') ? 'active' : '' }}" href="{{ route('admin.orders.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Pesanan') }}</a>
                        <a class="collapse-item {{ request()->is('admin/shipments') || request()->is('admin/shipmentss/*') ? 'active' : '' }}" href="{{ route('admin.shipments.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Pengiriman') }}</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseReports" aria-expanded="true" aria-controls="collapseTwo">
                    <span>{{ __('Manajemen Laporan') }}</span>
                </a>
                <div id="collapseReports" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/reports/revenue') ? 'active' : '' }}" href="{{ route('admin.reports.revenue') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Pendapatan') }}</a>
                    </div>
                </div>
            </li>


        </ul>