<!DOCTYPE html>
<html lang="en">

<x-head css='{!! isset($css) ? $css : "" !!}'/>
<head>
    @yield('meta')
</head>
<body class=" <?php echo (isset($bodyClass) ?  $bodyClass   : 'light')?>">

    <x-preloader/>


            <!-- ...::: Header Section Start :::... -->
            <?php

                if (!isset($header)) {
                    ?>
                    <x-header/>
                    <?php
                }
            ?>
            <!-- ...::: Header Section End :::... -->


            <!-- ...::: breadcrumb Section End :::... -->
            <?php

                if (isset($subTitle)) {
                    ?>
                    <main class="main-wrapper">
                    <x-breadcrumb title='{{ isset($title) ? $title : "" }}' subTitle='{{ isset($subTitle) ? $subTitle : "" }}' />
                    <?php
                }
            ?>
            <!-- ...::: breadcrumb Section End :::... -->

            @yield('content')

            <!-- ...::: Footer Section Start :::... -->
            <?php

                if (!isset($footer)) {
                    ?>
                    <x-footer/>
                    <?php
                }
                ?>
            <!-- ...::: Footer Section End :::... -->

    <x-script/>

</body>

</html>
