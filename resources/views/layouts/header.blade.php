<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
    <img src="https://infyom.com/images/logo/logo_236w.png" width="118" alt="Brand Logo">
</a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<ul class="c-header-nav mfs-auto">
</ul>
<ul class="c-header-nav">
    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->email}}
            <div class="c-avatar">
                <img class="c-avatar-img" src="https://scontent.fbkk24-1.fna.fbcdn.net/v/t39.30808-6/240387884_2964036470535458_7004142329644274835_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeHEKYUG54qoPR7PK0fva8G2EoVcWb8paOoShVxZvylo6ibMAo4ZsJPSU07oqaEiumEAnrgR9IciJkD997L8KMaE&_nc_ohc=y8vxow5MhRkAX9HK5DK&_nc_ht=scontent.fbkk24-1.fna&oh=e33d3d388e89461e9ad16af4b6043ff5&oe=61392EDD" alt="">
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0">
            <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
            <a class="dropdown-item" href="#">
                <i class="c-icon mfe-2 cil-user"></i>Profile
            </a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="c-icon mfe-2 cil-account-logout"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
<div class="c-subheader justify-content-between px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb my-0 ms-2">
            <li class="breadcrumb-item">
                <!-- if breadcrumb is single--><span>Home</span>
            </li>
            <li class="breadcrumb-item active"><span>Dashboard</span></li>
        </ol>
    </nav>
    @yield('breadcrumb')
</div>