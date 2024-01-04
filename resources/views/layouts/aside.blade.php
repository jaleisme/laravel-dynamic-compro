<div class="__bg-dark p-3">
    <div class="row flex-nowrap">
        <div class="col">
            <div class="d-flex flex-column align-items-center align-items-sm-start text-white min-vh-100">
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
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link text-white align-middle @if(\Request::route()->getName() == 'hero.index') __bg-secondary @endif">
                            <i data-feather="map"></i> <span class="ms-1 d-none d-sm-inline">Landing Page</span>
                        </a>
                        <ul class="collapse @if(\Request::route()->getName() == 'hero.index') show @endif nav flex-column w-100" id="submenu1" data-bs-parent="#menu">
                            <li class="nav-item @if(\Request::route()->getName() == 'hero.index') __bg-primary @endif">
                                <a href="{{ url('/admin/hero') }}" class="nav-link text-white"> <span class="d-none d-sm-inline">Hero</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
