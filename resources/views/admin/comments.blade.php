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
   <link rel="stylesheet" href="{{ asset('admin/assets/libs/datatables/datatables.css')}}">

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
                        <div class="row">
                            <!-- customar comments  start -->
                            <div class="col-xl-12">
                              @include('layouts.messages')
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center m-l-0">
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-6 text-right">
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table id="report-table" class="table table-bordered table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Comment</th>
                                                        <th width="50%">Name</th>
                                                        <th>Email</th>
                                                        <th>Location</th>
                                                        <th>Option</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($get_all_the_comments as $i =>$comments)
                                                    <tr>
                                                        <td>
                                                            {{ $i + 1}}
                                                        </td>
                                                        <td>{{$comments->comment}}</td>
                                                        <td>{{$comments->name}}</td>
                                                        <td>{{$comments->email}}</td>
                                                        <td>{{$comments->location}}</td>
                                                        <td>
                                                        @if($comments->status == 'pending')
                                                        <a href="/validate-comment/{{$comments->id}}" button class="btn btn-primary">Mark as Active</button></a>
                                                        @else
                                                        <button class="btn btn-info">Active</button>
                                                        @endif
                                                        <a href="/delete-comment/{{$comments->id}}" button class="btn btn-primary">Delete</button></a>
                                                    </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- customar comments  end -->
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
    <script src="{{ asset('admin/assets/js/pace.js')}}"></script>
    <script src="{{ asset('admin/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin/assets/js/sidenav.js')}}"></script>
    <script src="{{ asset('admin/assets/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin/assets/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('admin/assets/libs/datatables/datatables.js')}}"></script>

    <!-- Demo -->
    <script src="{{ asset('admin/assets/js/demo.js')}}"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
</body>

</html>
