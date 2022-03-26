<!DOCTYPE html>
<html lang="en">
    @include('include/user/assets/Head')
<body>
    @include('include/user/navbar')
    
    @include('include/user/banner')
    
    @include('include/user/ticketSearch')

    @yield('main')

    @include('include\user\footer')

        <!-- ==========Preloader========== -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- ==========Preloader========== -->
    
        <!-- ==========Overlay========== -->
        <div class="overlay"></div>
        <a href="#0" class="scrollToTop">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- ==========Overlay========== -->
    
    
    @include('include\user\assets\script')
</body>

</html>
