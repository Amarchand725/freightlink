<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav icon_imgs" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('dashboard') || request()->is('profile/*') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/dashboard-icon-p.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/companies-p.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Companies</span>
            </a>
        </li>
        <!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; users</span>
            </a>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/download-ic.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Downloads</span>
            </a>
        </li>
        <!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link {{ request()->is('page') || request()->is('page/*') || request()->is('page_setting/*') ? 'active' : '' }}" href="{{ route('page.index') }}">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/settings-p.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Settings</span>
            </a>

        </li>
        <!-- End Charts Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <img src="{{ asset('public/admin/assets/img/frieght-imgs/home-ic.png') }}" alt="dashboard" class="img-fluid">
            <span> &nbsp; Home Page</span>
            </a>
        </li>
        <!-- End Icons Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/subscribe-p.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Subscribers</span>
            </a>
        </li>
        <!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/linkden-p.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Social Media</span>
            </a>
        </li>
        <!-- End F.A.Q Page Nav -->

        <li class="nav-item text-center ">
            <a class="nav-link collapsed" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/admin-icon.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Admin Users</span>
            </a>
        </li>
    </ul>
</aside>