<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
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
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Students </span></li>
        <li class="menu-item">
            <a href="{{route('students.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Students">Students</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('students.create')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-plus"></i>
                <div data-i18n="Add new Student">Add new Student</div>
            </a>
        </li>

    </ul>
</aside>