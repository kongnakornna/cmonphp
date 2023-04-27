<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Explore Now | Velzon - Admin & Dashboard Template</title>
    <?php include 'layouts/title-meta.php'; ?>
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
    <?php include 'layouts/head-css.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Explore Now</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">NFT Marketplace</a></li>
                                    <li class="breadcrumb-item active">Explore Now</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="card-title mb-0 flex-grow-1">Explore Product</h5>
                                    <div>
                                        <a class="btn btn-priamry" data-bs-toggle="collapse" href="#collapseExample"><i
                                                class="ri-filter-2-line align-bottom"></i> Filters</a>
                                    </div>
                                </div>
                                <div class="collaps show" id="collapseExample">
                                    <div class="row row-cols-xxl-5 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-3 g-3">
                                        <div class="col">
                                            <h6 class="text-uppercase fs-12 mb-2">Search</h6>
                                            <input type="text" class="form-control" placeholder="Search product name"
                                                autocomplete="off" id="searchProductList">
                                        </div>
                                        <div class="col">
                                            <h6 class="text-uppercase fs-12 mb-2">Select Category</h6>
                                            <select class="form-control" data-choices name="select-category"
                                                data-choices-search-false id="select-category">
                                                <option value="">Select Category</option>
                                                <option value="Artwork">Artwork</option>
                                                <option value="3d Style">3d Style</option>
                                                <option value="Photography">Photography</option>
                                                <option value="Collectibles">Collectibles</option>
                                                <option value="Crypto Card">Crypto Card</option>
                                                <option value="Games">Games</option>
                                                <option value="Music">Music</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <h6 class="text-uppercase fs-12 mb-2">File Type</h6>
                                            <select class="form-control" data-choices name="file-type"
                                                data-choices-search-false id="file-type">
                                                <option value="">File Type</option>
                                                <option value="jpg">Images</option>
                                                <option value="mp4">Video</option>
                                                <option value="mp3">Audio</option>
                                                <option value="gif">Gif</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <h6 class="text-uppercase fs-12 mb-2">Sales Type</h6>
                                            <select class="form-control" data-choices name="all-sales-type"
                                                data-choices-search-false id="all-sales-type">
                                                <option value="">All Sales Type</option>
                                                <option value="On Auction">On Auction</option>
                                                <option value="Has Offers">Has Offers</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <h6 class="text-uppercase fs-12 mb-4">Price</h6>
                                            <div class="slider" id="range-product-price" data-slider-color="primary">
                                            </div>
                                            <input class="form-control" type="hidden" id="minCost" value="0" />
                                            <input class="form-control" type="hidden" id="maxCost" value="1000" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-grow-1">
                                <p class="text-muted fs-14 mb-0">Result: 8745</p>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="text-muted fs-14 dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        All View
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1"
                    id="explorecard-list">
                </div>
                <!-- end row -->
                <div class="py-4 text-center" id="noresult" style="display: none;">
                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                        colors="primary:#8c68cd,secondary:#4788ff" style="width:72px;height:72px"></lord-icon>
                    <h5 class="mt-4">Sorry! No Result Found</h5>
                </div>
                <div class="text-center mb-3">
                    <button class="btn btn-link text-primary mt-2" id="loadmore"><i
                            class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </button>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<?php include 'layouts/customizer.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- nouisliderribute js -->
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>

<script src="assets/js/pages/apps-nft-explore.init.js"></script>
<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>