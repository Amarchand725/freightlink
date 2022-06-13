<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav icon_imgs" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/') }}" target="_blank">
            <img src="{{ asset('public/admin/assets/img/frieght-imgs/home-ic.png') }}" alt="dashboard" class="img-fluid">
            <span> &nbsp; Home Page</span>
            </a>
        </li>
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

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('partner.index') }}">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Partners</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('benefit.index') }}">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                <span> &nbsp; Benefits</span>
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
        <li class="nav-item">
            @php
                $mail_setting = App\Models\MailSetting::orderby('id', 'desc')->first();
            @endphp
            @if($mail_setting)
                <a class="nav-link {{ request()->is('mail_setting.edit') ? 'active' : '' }}" href="{{ route('mail_setting.edit', $mail_setting->id) }}">
            @else
                <a class="nav-link {{ request()->is('mail_setting.create') ? 'active' : '' }}" href="{{ route('mail_setting.create') }}">
            @endif
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/subscribe-p.png') }}" alt="dashboard" class="img-fluid">
                <span class="nav-link-text">{{ __('Mail Settings') }}</span>
            </a>
        </li>
        <!-- End Charts Nav -->

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