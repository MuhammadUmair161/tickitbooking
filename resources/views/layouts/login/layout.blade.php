<!DOCTYPE html>
<html lang="en">
@include('include/user/assets/Head')

<body>
    @include('include\user\plugin')

    @yield('main')
    
    @include('include\user\assets\script')
</body>

</html>
