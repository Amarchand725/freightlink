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
        @if(Auth::check() && Auth::user()->hasRole('Admin'))
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user') || request()->is('user/*') ? 'active' : '' }}" href="{{ route('user.index') }}">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/companies-p.png') }}" alt="dashboard" class="img-fluid">
                    <span> &nbsp; Companies</span>
                </a>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('role') || request()->is('role/*') ? 'active' : '' }}" href="{{ route('role.index') }}">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                    <span> &nbsp; Roles</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('partner') || request()->is('partner/*') ? 'active' : '' }}" href="{{ route('partner.index') }}">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                    <span> &nbsp; Partners</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('benefit') || request()->is('benefit/*') ? 'active' : '' }}" href="{{ route('benefit.index') }}">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                    <span> &nbsp; Benefits</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('expands_possibility') || request()->is('expands_possibility/*') ? 'active' : '' }}" href="{{ route('expands_possibility.index') }}">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                    <span> &nbsp; Expands Possibilities</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->is('faq') || request()->is('faq/*') ? 'active' : '' }}" href="{{ route('faq.index') }}">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/users-ic.png') }}" alt="dashboard" class="img-fluid">
                    <span> &nbsp; FAQs</span>
                </a>
            </li>
            <!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
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
                <a class="nav-link {{ request()->is('subscribe') || request()->is('subscribe/*') ? 'active' : '' }}" href="{{ route('subscribe.index') }}">
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
        @elseif(Auth::check() && Auth::user()->hasRole('Company'))
            <li class="nav-item">
                <a class="nav-link " href="#">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/d-1.png') }}" alt="user" class="img-fluid">
                    <span> &nbsp; My Profile</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/dashboard-icon-p.png') }}" alt="user" class="img-fluid">
                    <span>&nbsp; Dashboard</span>
                </a>
            </li>
            <!-- End Components Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/download-ic.png') }}" alt="user" class="img-fluid">
                    <span>&nbsp; Downloads</span>
                </a>
            </li>
            <!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/d-cross.png') }}" alt="user" class="img-fluid">
                    <span>&nbsp; Departed Members</span>
                </a>
            </li>
            <!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <img src="{{ asset('public/admin/assets/img/frieght-imgs/d-ic-ann.png') }}" alt="user" class="img-fluid">
                    <span>&nbsp; Announcements</span>
                </a>
            </li>
            <!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/d-ic-ad.png') }}" alt="user" class="img-fluid">
                    <span> &nbsp; Need Advertising?</span>
                </a>
            </li>
            <!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/d-ic-idea.png') }}" alt="user" class="img-fluid">
                    <span> &nbsp; Suggestion Box</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <span>&nbsp;</span>
                </a>
            </li>
            <!-- End F.A.Q Page Nav -->

            <li class="nav-item text-center img_border">
                <a class="nav-link collapsed" href="#">
                    <span>Need Help ?</span>
                </a>

                <span class=""> <img src="{{ asset('public/admin/assets/img/frieght-imgs/Talk WithUs.png') }}" alt="talk" class="img-fluid">
                    <br><br>
                    <button class="btn btn-primary buttons_green mb-3  ">Talk with us!</button>
                </span>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="">&nbsp;&nbsp;</i>
                    <span>Follow us !</span>
                </a>
            </li>
            <li class="nav-item linkedin_icon">
                <a class="nav-link collapsed" href="#">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                </a>
            </li>
        @endif
    </ul>
</aside>