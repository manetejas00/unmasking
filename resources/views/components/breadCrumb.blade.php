<div class="aximo-breadcrumb">
        <div class="container">
            <h1 class="post__title"><?php echo $title;?></h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li aria-current="page"> <?php echo $subTitle;?></li>
                </ul>
            </nav>

        </div>
    </div>
    <!-- End breadcrumb -->