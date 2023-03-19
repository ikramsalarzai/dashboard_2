<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo ">
                <!-- <img src="{{URL::asset('assets/images/logo.png')}}" width="80" alt="" srcset=""> -->
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </span>
            <!-- <span class="app-brand-text demo menu-text fw-bolder">Home Cleaner</span> -->
            <span class="app-brand-text demo menu-text fw-bolder"><img src="{{URL::asset('assets/images/logo.png')}}"
                    width="80" alt="" srcset=""></span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>

    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item active">
            <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Home</div>
            </a>
        </li>


            @if(auth()->check())
            <li class="menu-header small text-uppercase"><span class="menu-header-text">User </span></li>
            <li class="menu-item">
                <a href="{{route('usertreatments.index')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="My Treatments">My Treatments</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('usertreatments.create')}}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-plus"></i>
                    <div data-i18n="Add new Treatment">Add new Treatment</div>
                </a>
            </li>
        @else
        <li class="menu-item">
            <a href="{{route('login')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Add new Treatment">Login</div>
            </a>
        </li>
        @endif
    </ul>
</aside>
