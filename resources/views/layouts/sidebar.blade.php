<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <img src="{{ asset('admin/assets/img/logo.png')}}" alt="Brand Logo" class="img-fluid">
        </span>
        <a href="index.html" class="app-brand-text demo sidenav-text font-weight-normal ml-2">COGE</a>
        <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
            <i class="ion ion-md-menu align-middle"></i>
        </a>
    </div>
    <div class="sidenav-divider mt-0"></div>

    <!-- Links -->
    <ul class="sidenav-inner py-1">

        <!-- Dashboards -->
        <li class="sidenav-item active open">
            <a href="/home" class="sidenav-link sidenav-toggl">
                <i class="sidenav-icon feather icon-home"></i>
                <div>Dashboards</div>
            </a>
           {{--<ul class="sidenav-menu">
                <li class="sidenav-item active">
                    <a href="/home" class="sidenav-link">
                    <i class="sidenav-icon feather icon-grid"></i>
                        <div>Analytics</div>
                    </a>
                </li>
            </ul>--}}
        </li>
        <li class="sidenav-item">
            <a href="/service" class="sidenav-link">
                <i class="sidenav-icon feather icon-layers"></i>
                <div>Services</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/project" class="sidenav-link">
                <i class="sidenav-icon lnr lnr-license"></i>
                <div>Projects</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/blogs" class="sidenav-link">
                <i class="sidenav-icon  feather icon-image"></i>
                <div>Blog</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/contact-messages" class="sidenav-link">
                <i class="sidenav-icon feather icon-mail"></i>
                <div>Contacts</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/branch" class="sidenav-link">
                <i class="sidenav-icon feather icon-anchor"></i>
                <div>Branches</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/get-comments" class="sidenav-link">
                <i class="sidenav-icon feather icon-message-square"></i>
                <div>Comments</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/get-supplies" class="sidenav-link">
                <i class="sidenav-icon feather icon-shopping-cart"></i>
                <div>General Supply</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/get-events" class="sidenav-link">
                <i class="sidenav-icon feather  icon-grid"></i>
                <div>Events</div>
            </a>
        </li>
        <li class="sidenav-item">
            <a href="/get-material" class="sidenav-link">
                <i class="sidenav-icon feather icon-pie-chart"></i>
                <div>Material</div>
            </a>
        </li>
    </ul>
</div>