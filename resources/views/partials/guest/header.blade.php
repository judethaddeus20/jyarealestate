<!--  Header  -->
<header id="header" class="header fixed-top shadow-md p-2">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <p class="logo d-flex align-items-center">
        <img src="{{ asset('img/logo.png') }}" alt="Company Logo" height=70 width=50>
        <span>JYA Real Estate Services</span>
        </p>
        <nav id="navbar" class="navbar">
            
            <ul>
                @if(url()->current() == 'properties.*')
                    <li><a class="nav-link scrollto" href="{{url('/')}}">Home</a></li>
                @else
                    <li><a class="nav-link scrollto" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto active" href="#portfolio">Find Now</a></li>
                @endif
                
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
<!-- End Header --> 