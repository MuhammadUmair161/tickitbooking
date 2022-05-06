<!DOCTYPE html>
<html lang="en">
@include('include\admin\assets\head')

<body class="sidebar-mini ">
    <div class="wrapper">
        {{-- <div class="navbar-minimize-fixed">
            <button class="minimize-sidebar btn btn-link btn-just-icon">
                <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
                <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
            </button>
        </div> --}}

        <!-- sideNavbar -->
        @include('include\admin\sideNavbar')
        <div class="main-panel">
            @include('include\admin\navbar')
            <!-- Navbar -->
            <div class="content">
                @yield('main')
            </div>
            <!-- footer -->
            @include('include\admin\footer')
        </div>
    </div>
    {{-- <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Background</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger background-color">
                        <div class="badge-colors text-center">
                            <span class="badge filter badge-primary active" data-color="primary"></span>
                            <span class="badge filter badge-info" data-color="blue"></span>
                            <span class="badge filter badge-success" data-color="green"></span>
                            <span class="badge filter badge-warning" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="red"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">
                    Sidebar Mini
                </li>
                <li class="adjustments-line">
                    <div class="togglebutton switch-sidebar-mini">
                        <span class="label-switch">OFF</span>
                        <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label=""
                            data-off-label="" />
                        <span class="label-switch label-right">ON</span>
                    </div>
                    <div class="togglebutton switch-change-color mt-3">
                        <span class="label-switch">LIGHT MODE</span>
                        <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label=""
                            data-off-label="" />
                        <span class="label-switch label-right">DARK MODE</span>
                    </div>
                </li>
                <li class="button-container mt-4">
                    <a href="https://demos.creative-tim.com/marketplace/black-dashboard-pro/docs/1.0/getting-started/introduction.html"
                        class="btn btn-default btn-block btn-round">
                        Documentation
                    </a>
                </li>
                <li class="header-title">Thank you for 95 shares!</li>
                <li class="button-container text-center">
                    <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot;
                        45</button>
                    <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot;
                        50</button>
                    <br>
                    <br>
                    <a class="github-button" href="https://github.com/creativetimofficial/ct-black-dashboard-pro"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>
            </ul>
        </div>
    </div> --}}
    @include('include\admin\assets\script')

</body>

</html>
