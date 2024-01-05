<div class="__bg-dark p-3">
    <div class="row flex-nowrap">
        <div class="col">
            <div class="d-flex flex-column align-items-center align-items-sm-start text-white" style="min-height: 97vh;">
                <a class="navbar-brand mb-4" href="{{ url('/') }}">
                    <i data-feather="codesandbox" style="width: 22px !important; margin-right: 2px;"></i>
                    {{ config('app.name', 'Laravel') }}
                </a>
                <ul class="nav nav-pills flex-column mb-auto align-items-center align-items-sm-start w-100" id="menu">
                    <li class="nav-item">
                        <a href="/admin/home" class="nav-link text-white align-middle @if(\Request::route()->getName() == 'home') __bg-primary @endif">
                            <i data-feather="layout"></i> <span class="ms-1">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-divider">
                        <small class="">PAGES</small>
                    </li>
                    <li class="nav-item">
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-white align-middle @if(\Request::route()->getName() == 'hero.index' || \Request::route()->getName() == 'alasan.index' || \Request::route()->getName() == 'layanan.index' || \Request::route()->getName() == 'client.index' || \Request::route()->getName() == 'gallery.index' || \Request::route()->getName() == 'maps.index') __bg-secondary @endif">
                            <i data-feather="map"></i> <span class="ms-1 d-none d-sm-inline">Landing Page</span>
                        </a>
                        <ul class="collapse @if(\Request::route()->getName() == 'hero.index' || \Request::route()->getName() == 'alasan.index' || \Request::route()->getName() == 'layanan.index' || \Request::route()->getName() == 'client.index' || \Request::route()->getName() == 'gallery.index' || \Request::route()->getName() == 'maps.index') show @endif nav flex-column w-100" id="submenu1" data-bs-parent="#menu">
                            <li class="nav-item @if(\Request::route()->getName() == 'hero.index') __bg-primary @endif">
                                <a href="{{ url('/admin/hero') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Section Hero</span></a>
                            </li>
                            <li class="nav-item @if(\Request::route()->getName() == 'alasan.index') __bg-primary @endif">
                                <a href="{{ url('/admin/alasan') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Section Alasan</span></a>
                            </li>
                            <li class="nav-item @if(\Request::route()->getName() == 'layanan.index') __bg-primary @endif">
                                <a href="{{ url('/admin/layanan') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Section Layanan</span></a>
                            </li>
                            <li class="nav-item @if(\Request::route()->getName() == 'client.index') __bg-primary @endif">
                                <a href="{{ url('/admin/client') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Section Client</span></a>
                            </li>
                            <li class="nav-item @if(\Request::route()->getName() == 'gallery.index') __bg-primary @endif">
                                <a href="{{ url('/admin/gallery') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Section Gallery</span></a>
                            </li>
                            <li class="nav-item @if(\Request::route()->getName() == 'maps.index') __bg-primary @endif">
                                <a href="{{ url('/admin/maps') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Section Maps</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/about" class="nav-link text-white align-middle @if(\Request::route()->getName() == 'about.index') __bg-primary @endif">
                            <i data-feather="list"></i> <span class="ms-1">About</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
