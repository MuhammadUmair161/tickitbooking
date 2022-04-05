<!DOCTYPE html>
<html lang="en">
@include('include/user/assets/Head')

<body>
    @include('include/user/navbar')

    @yield('main')

    @include('include\user\footer')
    
    @include('include\user\plugin')
    
    @include('include\user\assets\script')
</body>

</html>
