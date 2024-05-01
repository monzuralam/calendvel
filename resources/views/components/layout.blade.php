<!doctype html>
<html lang="en">

<head>
    <x-head :title="$title ?? 'Dashboard | CalendVel'"/>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <x-header/>

        <x-sidebar/>


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <x-page-title :heading="$heading"/>

                    {{ $slot }}

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <x-footer/>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <x-right-sidebar/>

    <x-script/>

</body>

</html>
