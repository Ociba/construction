<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    @include('layouts.title')

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
   @include('layouts.styling')

</head>

<body>
     @include('layouts.preloader')
    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
             @include('layouts.sidebar')
            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                 @include('layouts.navbar')
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @include('layouts.breadcrumb')

                        <h4 class="font-weight-bold py-3 mb-0"></h4>
                        <div class="row">
                            <!-- Staustic card 8 Start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-mail bg-primary ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-primary">8.62k</span> Subscribers</h4>
                                        <p class="mb-3">Your main list is growing</p>
                                        <button class="btn btn-primary btn-sm btn-round">Manage List</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-twitter bg-success ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-success">+40</span> Followers</h4>
                                        <p class="mb-3">Your main list is growing</p>
                                        <button class="btn btn-success btn-sm btn-round">Check them out</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-briefcase bg-danger ui-rounded-icon"></i>
                                        <h4 class="mt-2">Business Plan</h4>
                                        <p class="mb-3">your current active plan</p>
                                        <button class="btn btn-danger btn-sm btn-round">Upgrade to VIP</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card  mb-4">
                                    <div class="card-body text-center">
                                        <i class="feather icon-shopping-cart bg-warning ui-rounded-icon"></i>
                                        <h4 class="mt-2"><span class="text-warning">10%</span> New Orders</h4>
                                        <p class="mb-3">your panding order</p>
                                        <button class="btn btn-warning btn-sm btn-round text-white">Update Now</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Staustic card 8 end -->
                            <!-- Chart card 11 Start -->
                            <div class="col-xl-8 col-md-12">
                                <div class="card mb-4">
                                    <div class="card-header with-elements">
                                        <h6 class="card-header-title mb-0">Statistics</h6>
                                        <div class="card-header-elements ml-auto">
                                            <label class="text m-0">
                                                <span class="text-light text-tiny font-weight-semibold align-middle">
                                                  SHOW STATS
                                                </span>
                                                <span class="switcher switcher-sm d-inline-block align-middle mr-0 ml-2">
                                                  <input type="checkbox" class="switcher-input" checked>
                                                  <span class="switcher-indicator">
                                                    <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                                </span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row no-gutters row-bordered">
                                        <div class="col-md-8 col-lg-12 col-xl-8">
                                            <div class="card-body">
                                                <div id="line-moris" class="moris-line-shadow" style="height:210px"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-lg-12 col-xl-4">
                                            <div class="card-body">
                                                <!-- Numbers -->
                                                <div class="row">
                                                    <div class="col-6 col-xl-5 text-muted mb-3">Total sales</div>
                                                    <div class="col-6 col-xl-7 mb-3">
                                                        <span class="text-big">10,332</span>
                                                        <sup class="text-success">+12%</sup>
                                                    </div>
                                                    <div class="col-6 col-xl-5 text-muted mb-3">Income amount</div>
                                                    <div class="col-6 col-xl-7 mb-3">
                                                        <span class="text-big">$1,534</span>
                                                        <sup class="text-danger">-5%</sup>
                                                    </div>
                                                    <div class="col-6 col-xl-5 text-muted mb-3">Total budget</div>
                                                    <div class="col-6 col-xl-7 mb-3">
                                                        <span class="text-big">$10,534</span>
                                                        <sup class="text-success">+12%</sup>
                                                    </div>
                                                    <div class="col-6 col-xl-5 text-muted mb-3">Page views</div>
                                                    <div class="col-6 col-xl-7 mb-3">
                                                        <span class="text-big">21,332</span>
                                                        <sup class="text-danger">-12%</sup>
                                                    </div>
                                                    <div class="col-6 col-xl-5 text-muted mb-3">Completed tasks</div>
                                                    <div class="col-6 col-xl-7 mb-3">
                                                        <span class="text-big">12</span>
                                                        <sup class="text-success">+12%</sup>
                                                    </div>
                                                </div>
                                                <!-- / Numbers -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card mb-4">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center">
                                            <div class="lnr lnr-earth display-4 text-success"></div>
                                            <div class="ml-3">
                                                <div class="text-muted small">Monthly visits</div>
                                                <div class="text-large">687,123</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ecom-chart-2" class="mt-3 chart-shadow-success" style="height:74px"></div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body pb-0">
                                        <div class="d-flex align-items-center">
                                            <div class="lnr lnr-users display-4 text-warning"></div>
                                            <div class="ml-3">
                                                <div class="text-muted small">Users</div>
                                                <div class="text-large">105,652</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ecom-chart-4" class="mt-3 chart-shadow-warning" style="height:74px"></div>
                                </div>
                            </div>
                            <!-- Chart card 11 end -->
                        </div>
                    </div>
                    <!-- [ content ] End -->

                    <!-- [ Layout footer ] Start -->
                     @include('layouts.footer')
                    <!-- [ Layout footer ] End -->

                </div>
                <!-- [ Layout content ] Start -->

            </div>
            <!-- [ Layout container ] End -->

        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper ] end -->

    <!-- Core scripts -->
    @include('layouts.javascript')
</body>

</html>
