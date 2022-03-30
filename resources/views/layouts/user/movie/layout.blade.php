<!DOCTYPE html>
<html lang="en">
@include('include/user/assets/Head')

<body>
    @include('include/user/navbar')

    @include('include/user/banner2')

    @include('include/user/ticketSearch')

    @yield('main')

    @include('include\user\footer')
    
    @include('include\user\plugin')
    
    @include('include\user\assets\script')
</body>

</html>
