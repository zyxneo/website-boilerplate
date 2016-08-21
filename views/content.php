<?php @include_once("includes/top.php"); ?>



    <div class="main-content">
        <div class="container">
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-xl-2">
                    <div class="sidebar-nav">
                        sidebar
                    </div>
                </div>
                <main id="content" role="main" class="col-md-12 col-lg-9 col-xl-8">
                    <!-- Begin Content -->

                    <h2>Breadcrumb</h2>
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="#">Home</a>
                        <a class="breadcrumb-item" href="#">Library</a>
                        <a class="breadcrumb-item" href="#">Data</a>
                        <span class="breadcrumb-item active">Bootstrap</span>
                    </nav>
                    
                    <?php @include_once("includes/alerts.php"); ?>

                    <!-- End Content -->
                </main>
                <div id="aside" class="col-xl-2">
                    <!-- Begin Right Sidebar -->
                    right
                    <!-- End Right Sidebar -->
                </div>
            </div>
        </div>
    </div>

<?php @include_once("includes/bottom.php"); ?>