<div class="sidebar" data-color="blue">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
      -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                CT
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
            <li class="">
                <a href="{{ route('home') }}"><i class="tim-icons icon-components"></i><p>home</p></a>
            </li>
            <li class="active">
                <a href="{{ route('dashboard') }}"><i class="tim-icons icon-chart-pie-36"></i><p>Dashboard</p></a>
            </li>
            <li>
                <a href="{{ route('m-create') }}"><i class="tim-icons icon-triangle-right-17"></i><p>movie</p></a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="tim-icons icon-image-02"></i>
                    <p>
                        Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="pages/pricing.html">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Pricing </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
