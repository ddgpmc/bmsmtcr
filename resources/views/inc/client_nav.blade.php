
<header class="header-blue" style="padding-bottom: 0px;">
    <nav class="bg-gray-900 text-white shadow-md">
        <div class="container flex items-center justify-between px-4 py-2 mx-auto">
            <a href="/barangay/home" class="flex items-center space-x-2">
                <img src="{{ URL::asset('images/logos.png')}}" class="w-16" alt="Logo">
                <h1 class="text-2xl sm:text-4xl font-serif">{{ $image->barangay_name ?? 'MITACOR B.M.S' }}</h1>
            </a>
            <button class="block lg:hidden focus:outline-none navbar-toggler" type="button" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="flex flex-col items-center justify-center lg:flex-row lg:items-center lg:w-auto" id="navcol-1">
                <div class="lg:hidden flex items-center">
                    <div class="dropdown">
                        <button class="flex items-center space-x-2 text-lg focus:outline-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog"></i>
                            <span class="sr-only">Toggle settings</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                            <a class="block px-4 py-2 text-sm lg:text-base hover:bg-gray-200" href="/barangay/accountsetting">Account Settings</a>
                            <a class="block px-4 py-2 text-sm lg:text-base hover:bg-gray-200" href="/barangay/logout">Log-out</a>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:flex items-center">
                    <p class="mr-4 text-lg lg:mr-0 lg:text-xl"><i class="fa fa-user mr-2"></i>{{session("resident.firstname")}}</p>
                    <div class="dropdown">
                        <button class="flex items-center space-x-2 text-lg focus:outline-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-cog"></i>
                            <span class="hidden lg:inline">Settings</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton">
                            <a class="block px-4 py-2 text-sm lg:text-base hover:bg-gray-200" href="/barangay/accountsetting">Account Settings</a>
                            <a class="block px-4 py-2 text-sm lg:text-base hover:bg-gray-200" href="/barangay/logout">Log-out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs" style="margin-left: 80px; margin-right: 80px;">
            <li class="nav-item"><a class="nav-link {{ (request()->is('barangay/home*')) ? 'active' : '' }}" href="/barangay/home"><i class="fa fa-home" style="margin-right: 5px;"></i>Home</a></li>
            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link {{ (request()->is('barangay/schedule*', 'barangay/blotter*', 'barangay/certificate*')) ? 'active' : '' }}" aria-expanded="false" data-toggle="dropdown" href="#"><i class="fa fa-server" style="margin-right: 5px;"></i> Services</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/barangay/schedule">Requests</a>
                    <a class="dropdown-item" href="/barangay/blotter/{{ session("resident.id") }}">Blotter</a>
                    <a class="dropdown-item" href="/barangay/certificate">Certificates</a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link {{ (request()->is('barangay/news*')) ? 'active' : '' }}" href="/barangay/news">News</a></li>
            <li class="nav-item"><a class="nav-link {{ (request()->is('barangay/info*')) ? 'active' : '' }}" href="/barangay/info">Info</a></li>
            <li class="nav-item"><a class="nav-link {{ (request()->is('barangay/ordinances*')) ? 'active' : '' }}" href="/barangay/ordinances">Ordinances</a></li>
        </ul>
    </nav>
</header>
