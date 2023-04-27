<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

    <head>
        
        <title>Log Out | Velzon - Admin & Dashboard Template</title>
        <?php include 'layouts/title-meta.php'; ?>

        <?php include 'layouts/head-css.php'; ?>

    </head>

    <?php include 'layouts/body.php'; ?>

        <div class="auth-page-wrapper pt-5">

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="index.php" class="d-inline-block auth-logo">
                                        <img src="assets/images/logo-light.png" alt="" height="20">
                                    </a>
                                </div>
                                <p class="mt-3 fs-15 fw-medium">Premium Admin & Dashboard Template</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4 card-bg-fill">
                                <div class="card-body p-4 text-center"> 
                                    <lord-icon
                                        src="https://cdn.lordicon.com/hzomhqxz.json"
                                        trigger="loop"
                                        colors="primary:#8c68cd,secondary:#4788ffs"
                                        style="width:180px;height:180px">
                                    </lord-icon>

                                    <div class="mt-4 pt-2">
                                        <h5>You are Logged Out</h5>
                                        <p class="text-muted">Thank you for using <span class="fw-semibold">velzon</span> admin template</p>
                                        <div class="mt-4">
                                            <a href="auth-signin-basic.php" class="btn btn-primary w-100">Sign In</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->

        <?php include 'layouts/vendor-scripts.php'; ?>

        <!-- particles js -->
        <script src="assets/libs/particles.js/particles.js"></script>

        <!-- particles app js -->
        <script src="assets/js/pages/particles.app.js"></script>
    </body>

</html>