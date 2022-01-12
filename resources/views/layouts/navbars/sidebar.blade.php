<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <h3 class="navbar-brand pt-0">
            <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
            <span>JYA Real Estate</span> 
        </h3>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            @if(Auth::user()->is_admin == 1)
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="users">
                            <i class="fab fa-laravel"></i>
                            <span class="nav-link-text">{{ __('Users') }}</span>
                        </a>

                        <div class="collapse hide" id="users">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.user.index') }}">
                                        {{ __('Manage Users') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.user.create') }}">
                                        {{ __('Create new User') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#properties" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="properties">
                            <i class="fab fa-laravel""></i>
                            <span class="nav-link-text">{{ __('Properties') }}</span>
                        </a>

                        <div class="collapse hide" id="properties">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.property.index') }}">
                                        {{ __('Manage Properies') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.property.create') }}">
                                        {{ __('Create new Property') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link active" href="#sales" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sales">
                            <i class="fab fa-laravel""></i>
                            <span class="nav-link-text">{{ __('Sales') }}</span>
                        </a>

                        <div class="collapse hide" id="sales">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.sales.index') }}">
                                        {{ __('Manage Sales') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.sales.create') }}">
                                        {{ __('Create new Sale') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>    
                </ul>
            @else
            <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('agent.home') }}">
                            <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#properties" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="properties">
                            <i class="fab fa-laravel"></i>
                            <span class="nav-link-text">{{ __('Properties') }}</span>
                        </a>

                        <div class="collapse hide" id="properties">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agent.property.index') }}">
                                        {{ __('Manage Properties') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agent.property.create') }}">
                                        {{ __('Create New Property') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sales" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sales">
                            <i class="fab fa-laravel"></i>
                            <span class="nav-link-text">{{ __('Sales') }}</span>
                        </a>

                        <div class="collapse hide" id="sales">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agent.sales.index') }}">
                                        {{ __('My Sales') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('agent.sales.create') }}">
                                        {{ __('Create New Sales') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            @endif
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
        </div>
    </div>
</nav>
