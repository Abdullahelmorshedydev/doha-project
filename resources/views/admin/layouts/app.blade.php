<!DOCTYPE html>
<html lang="en">
@include('admin.includes.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.includes.preload')

        @include('admin.includes.navbar')

        @include('admin.includes.sidebar')

        @include('admin.includes.content')

        @include('admin.includes.footer')
    </div>
    <!-- ./wrapper -->

    @include('admin.includes.script')
</body>

</html>
